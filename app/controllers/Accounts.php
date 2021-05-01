<?php


class Accounts extends Controller{

        public function __construct(){

            $this->accountsModel = $this->model('Account');

        }

        public function index(){
            $this->login();
        }

        /*
            Function to validate login
        */
        
        public function validateLogin($data){

            //Check if the POST data is empty.
            if(empty($data['username'])){
                $data['loginError'] = 'Make sure to fill in username and password';
                $this->view('Landing/login', $data);
            }

            
            if(empty($data['password'])){
                $data['loginError'] = 'Make sure to fill in username and password';
                $this->view('Landing/login', $data);
            }

            //If POST data isn't empty then check if the user provided username exists in the database

            if(!empty($data['username']) && !empty($data['password'])){
                $user = $this->accountsModel->checkUsername($data['username']);

                //Is username exists then check user supplied password with the password hash stored in the database
                if(!empty($user)){
                    $verified_user = $this->checkPassword($data['password'], $user->password);
                    if($verified_user){
                        //If user is verified then create session
                        $this->createUserSession($user);
                    }else{
                        //If password doesn't match, show error.
                        $data['loginError'] = 'Username or Password seems Incorrect!';
                        $this->view('Landing/login', $data);
                    }
                }else{   
                        //If username doesn't exists, show error.
                        $data['loginError'] = 'Username or Password seems Incorrect!';
                        $this->view('Landing/login', $data);
                    }
                }
            }

        /*
            Function to check password
            @Param1, user supplied password
            @Param2, password hash received from database of the user.
        */
        public function checkPassword($userPassword, $userPasswordHash){
            return password_verify($userPassword, $userPasswordHash);
        }

        /*
            Function to check if the user is logged in
        */
        public function isLoggedIn(){
            if(isset($_SESSION['user_id'])){
              return true;
            } else {
              return false;
            }
          }


         /*
            Function to create user session
            @Param1, user object.
         */
        public function createUserSession($user){
            echo $user->id;
            $_SESSION['user_id'] = $user->id;
            
            redirect('Dashboard');
          }


        /*
          Function to unset session when user logs out.
        */
        public function logout(){
            unset($_SESSION['user_id']);
            
            session_destroy();
            redirect('Accounts/login');
          }
    
        /*
        Function to display login page
        */
        public function login(){

            //Check if the user is already logged in i.e the session is set.
            // If session is set then redirect to dashboard.
            if($this->isLoggedIn()){
                redirect('Dashboard');
            }
            //If Login button is clicked i.e POST request is made then validate login else show login page
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = ['username'=>'', 'password'=>'', 'loginError'=>''];
                $data['username'] = trim($_POST['username']);
                $data['password'] = trim($_POST['password']);
                $this->validateLogin($data);
                
            }else{
                $data = ['username'=>'', 'password'=>'', 'loginError'=>''];
                $this->view('Landing/login', $data);

            }


        }
        /*
            Function to Validate user supplied information
            @Param1, Associative array named data
        */

        public function validateRegister($data){
            //Check if fields are empty
            if(empty($data['username'])){
                $data['username_err'] = 'Please Enter the Username';
            }
            if(empty($data['firstname'])){
                $data['firstname_err'] = 'Please Enter the Firstname';
            }
            if(empty($data['lastname'])){
                $data['lastname_err'] = 'Please Enter the Lastname';
            }
            if(empty($data['email'])){
                $data['email_err'] = 'Please Enter the Email';
            }

            if(empty($data['password'])){
                $data['password_err'] = 'Please Enter the Password';
            }

            if(empty($data['cpassword'])){
                $data['cpassword_err'] = 'Please Enter the Confirm Password';
            }

            if(!empty($data['username']) && !empty($data['firstname']) &&!empty($data['lastname']) &&!empty($data['email'])&&!empty($data['password'])&&!empty($data['cpassword'])){
                //If Fields aren't empty further check
               
                $checkEmail = $this->accountsModel->checkEmailExists($data['email']);
                if(!empty($checkEmail->email)){
                if(($checkEmail->email)==$data['email']){
                    $data['email_err'] = 'The Email already Exists in the system';
                }
            }

                
                $checkUsername = $this->accountsModel->checkUsernameExists($data['username']);
                if(!empty($checkUsername->username)){
                if(($checkUsername->username)==$data['username']){
                    $data['username_err'] = 'The Username already Exists in the system';
                }
            }

                if(strlen($data['password']) < 6){
                    $data['password_err'] = 'Password must have atleast 6 characters.';
                  }

                if($data['password'] != $data['cpassword']){
                    $data['confirm_password_err'] = 'Password do not match.';
                }


            }
            
            //If no error then proceed to create password has and register user account
            if(empty($data['username_err']) && empty($data['firstname_err']) && empty($data['lastname_err']) && empty($data['email_err'])&& empty($data['password_err'])&& empty($data['cpassword_err'])){

                    
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                $data['activation_code'] = $this->createActivationCode();
                if($this->accountsModel->registerAccount($data)){

                    //Send email Verification
                    $this->verificationEmail($data);
                    // Redirect to login
                    $data['message'] = 'Please check your email for verification link!';
                    $this->view('Landing/login', $data); 
                  } else {
                    die('Something went wrong');
                  }
            }else {
                // Load View
                $this->view('Landing/register', $data);
              }

        }

        /*
            Function for Registeration
        */

        public function register(){
            //If the user session is already set then redirect to his/her dashboard
            if($this->isLoggedIn()){
                redirect('Dashboard');
            }

            //If Request method is POST then init array.

            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [

                    'username'=>trim($_POST['username']),
                    'firstname'=>trim($_POST['firstname']),
                    'lastname'=>trim($_POST['lastname']),
                    'email'=>trim($_POST['email']),
                    'password'=>trim($_POST['password']),
                    'cpassword'=>trim($_POST['cpassword']),
                    'message'=>'',
                    'activation_code' => '',
                    'user_email_status'=>'not verified',
                    'username_err'=>'',
                    'firstname_err'=>'',
                    'lastname_err'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                    'cpassword_err'=>'',
                ];
                //Function call to validate user data for registeration
               
                $this->validateRegister($data);
            }else{
                $data = [

                    'username'=>'',
                    'firstname'=>'',
                    'lastname'=>'',
                    'email'=>'',
                    'password'=>'',
                    'cpassword'=>'',
                    'message'=>'',
                    'activation_code' => '',
                    'user_email_status'=>'not verified',
                    'username_err'=>'',
                    'firstname_err'=>'',
                    'lastname_err'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                    'cpassword_err'=>'',
                ];

                $this->view('Landing/register', $data); //Need to show view for register if no POST request
            }
        }


        public function createActivationCode(){

            return md5(rand());

        }

        public function sendEmail($data){
            $URLROOT = URLROOT;
            $base_url = $URLROOT."'/checkActivation/";
            $to      = $data['email']; // Send email to our user
            $subject = 'Signup | Verification'; // Give the email a subject 
            $hash=$data['activation_code'];
            $message = '
            
            Thanks for signing up!
            Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
            
            ------------------------
            Username: '.$data['username'].'
            ------------------------
            
            Please click this link to activate your account:
            http://localhost.com/tickettofitness/Accounts/checkActivation?hash='.$hash.'&email='.$to.'
            
            '; // Our message above including the link
                                
            $headers = 'From:sndpflashtv@gmail.com' . "\r\n"; // Set from headers
            mail($to, $subject, $message, $headers); // Send our email
           }
        

        public function verificationEmail($data){
            

            //Check if the account exists in the database and the email isn't verified

            $user_exists = $this->accountsModel->checkEmailExists($data['email']);

            if(!empty($user_exists)){

                if($user_exists->user_email_status == 'not verified'){

                    //Send Activation Code
                    $this->sendEmail($data);



                }

            }

        }

        public function checkActivation(){

            if($_SERVER['REQUEST_METHOD']=='GET'){
                $data=[
                    'activation_code_from_user' => $_GET['hash'],
                    'user_email'=>$_GET['email']
                ];
               
                //check if the hash matches the hash in database;
                $this->checkHash($data);

            }


        }

        public function checkHash($data){

            $user= $this->accountsModel->checkEmailExists($data['user_email']);
            if(!empty($user)){
                if($user->activation_code==$data['activation_code_from_user']){
                    $data['user_email_status'] = 'verified';
                    if($this->accountsModel->updateEmailStatus($data)){
                        $data['message'] = 'Your Email Address Successfully Verified';
                        $this->view('Landing/login',$data);
                    }else{
                        $data['message'] = 'Something Wrong! Try Again';
                        $this->view('Landing/login',$data);

                    }

                }else{

                    $data['message'] = 'Something Wrong! Try Again';
                    $this->view('Landing/login',$data);
                }

            }
        }

}







?>