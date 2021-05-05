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
                $data['user_activation_code'] = $this->createActivationCode();
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
                    'user_activation_code' => '',
                    'user_email_status'=>'not verified',
                    'password_reset'=>'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj',
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
                    'user_activation_code' => '',
                    'user_email_status'=>'not verified',
                    'password_reset'=>'SASAffhdjfhdjkhfdkjhfjdhfjhjfdhfdhj',
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
            $hash=$data['user_activation_code'];
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
                if($user->user_activation_code==$data['activation_code_from_user']){
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

        public function verifyGymInformation($data){
            //Check if fields are empty
            if(empty($data['gym_id'])){
                $data['gym_id_err'] = 'Please Enter the gym ID';
            }
            if(empty($data['gym_name'])){
                $data['gym_name_err'] = 'Please Enter the Gym name';
            }
            if(empty($data['gym_address'])){
                $data['gym_address_err'] = 'Please Enter the Gym address';
            }
            if(empty($data['gym_email'])){
                $data['gym_email_err'] = 'Please Enter the GymEmail';
            }

            if(empty($data['phone_number'])){
                $data['phone_number_err'] = 'Please Enter the phone number';
            }

            if(empty($data['abn'])){
                $data['abn_err'] = 'Please Enter the ABN';
            }

            if(!empty($data['gym_id']) && !empty($data['gym_name']) &&!empty($data['gym_address']) &&!empty($data['gym_email'])&&!empty($data['phone_number'])&&!empty($data['abn'])){

            //If no error then proceed to create password has and register user account
            if(empty($data['gym_id_err']) && empty($data['gym_name_err']) && empty($data['gym_address_err']) && empty($data['gym_email_err'])&& empty($data['phone_number_err'])&& empty($data['abn_err'])){

                    
                if($this->accountsModel->registerGym($data)){
                    // Redirect to login
                    $this->view('Dashboard/dashboard', $data);
                } else {
                    die('Something went wrong');
                }
            }else {
                // Load View
                $this->view('Dashboard/gymregister', $data);
            }
        }
    }


        public function registerGym(){

            if($this->isLoggedIn()){
                //Show the register page and let user register for gym account
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                    $data = [
                        'gym_id'=>trim($_SESSION['user_id']),
                        'gym_name'=>trim($_POST['gym_name']),
                        'gym_address'=>trim($_POST['gym_address']),
                        'gym_email'=>trim($_POST['gym_email']),
                        'phone_number'=>trim($_POST['phone_number']),
                        'abn'=>trim($_POST['abn']),
                        'gym_id_err'=>'',
                        'gym_name_err'=>'',
                        'gym_address_err'=>'',
                        'gym_email_err'=>'',
                        'phone_number_err'=>'',
                        'abn_err'=>'',
                        

                    ];

                    $this->verifyGymInformation();

                }else{

                    $data = [
                        'gym_id'=>'',
                        'gym_name'=>'',
                        'gym_address'=>'',
                        'gym_email'=>'',
                        'phone_number'=>'',
                        'abn'=>'',
                        'gym_id_err'=>'',
                        'gym_name_err'=>'',
                        'gym_address_err'=>'',
                        'gym_email_err'=>'',
                        'phone_number_err'=>'',
                        'abn_err'=>'',
                    ];

                    $this->view('Dashboard/gymregister', $data);
                }

            }else{
                $data['error_message'] = 'You need to login in order to access this page';
                $this->view('Landing/login', $data);
            }
        }


        //Reset Password

        public function resetPassword(){
         
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                    $data = [

                        'email'=>trim($_POST['email']),
                        'email_err'=>'',
                        'password_reset_code'=>'',
                        'warning'=>'',
                        'message'=>'',


                    ];
                    
                    $email_exists = $this->accountsModel->checkEmailExists($data['email']);
                    if(!empty($email_exists)){

                        $hash = $this->createPasswordResetToken();
                        $data['password_reset_code'] = $hash;
                        if($this->accountsModel->updatePasswordResetHash($data)){
                            $this->sendPasswordResetEmail($data);
                        }else{
                            $data['warning'] = 'Something is wrong please try again later!';
                            $this->view('Landing/passwordreset',$data);
                        }
                        

                    }else{

                        $data['email_err'] = 'Email does not exist';
                        $this->view('Landing/passwordreset',$data);
                    }

                   

                }else{

                    $data = [
                        'email'=>'',
                        'email_err'=>'',
                        'password_reset_code'=>'',
                        'warning'=>'',
                        'message'=>'',
                    ];

                    $this->view('Landing/passwordreset', $data);
                }

        } 

        public function createPasswordResetToken(){

            //call function to create password reset token.
            return md5(rand());
        }

        public function sendPasswordResetEmail($data){
            
            $base_url = URLROOT;
            $to      = $data['email']; // Send email to our user
            $subject = 'Password Reset | Verification'; // Give the email a subject 
            $hash=$data['password_reset_code'];
            $message = '
            
            Thanks for Reset Password!
            
                   
            Please click this link to reset your password:
            '.$base_url.'/Accounts/checkPasswordResetCode?hash='.$hash.'&email='.$to.'
            
            '; // Our message above including the link
                                
            $headers = 'From:sndpflashtv@gmail.com' . "\r\n"; // Set from headers
            $result = mail($to, $subject, $message, $headers); // Send our email

            if(!$result){
                $data['warning'] = 'Something went wrong! Please try again later';
                $this->view('Landing/passwordreset',$data);


            }else{
                $data['message'] = 'Please check your email for pasword change link';
                $this->view('Landing/login',$data);

            }

        }

        public function checkPasswordResetCode(){

                //Verify if the password reset code coming in the GET request i.e in url parameter is same as in the database
                //Url/Accounts/CheckPpasswordResetCode?/hash=shakshajkhsakhsakj&email=sndpflashtv@2gmail.com
            
            $data =[

                'email'=>'',
            ];
            if($_SERVER['REQUEST_METHOD']=='GET'){    
                
            $user= $this->accountsModel->checkEmailExists($_GET['email']);
            if(!empty($user)){
                if($user->password_reset==$_GET['hash']){
                    $data['email'] = $_GET['email'];
                    $this->view('Landing/passwordupdate',$data); //We need to store this email in a hidden input field
                }else{
                    $data['warning'] = 'Something Wrong! Try Again';
                    $this->view('Landing/passwordreset',$data);
                }
            
            }else{

                    $data['message'] = 'Something Wrong! Try Again';
                    $this->view('Landing/login',$data);
                }
            }

        }


//Wwhen user enters password and confirm password make request to this function
        public function updatePassword(){
            
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [

                    'email'=>trim($_POST['email']), //iIT'S BEING STORED IN A HIDDEN FIELD
                    'password'=>trim($_POST['password']),
                    'cpassword'=>trim($_POST['cpassword']),
                    'password_err'=>'',
                    'message'=>'',
                ];

                //check is password and confirm password is same
                if(empty($data['password'])){

                    $data['password_err'] = 'Password cannot be empty';
                    $this->view('Landing/passwordupdate',$data);
                }
                if(empty($data['cpassword'])){

                    $data['password_err'] = 'Confirm Password cannot be empty';
                    $this->view('Landing/passwordupdate',$data);
                }
                if(empty($data['password_err'])){
                    if($data['password']== $data['cpassword']){

                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                        $updated_password = $this->accountsModel->updatePassword($data);
                        if($updated_password){
                            $data['message'] = 'Password Changed';
                            $this->view('Landing/login',$data);

                        }else{
                            $data['message'] = 'Something Wrong. Try it later';
                            $this->view('Landing/login',$data);
                        }    
                    }else{
                        $data['password_err'] = 'Your Password didnot match with confirm passwrord !';
                    }
                }
                
            }else{

                $data = [

                    'email'=>'', 
                    'password'=>'',
                    'cpassword'=>'',
                    'password_err'=>'',
                    'message'=>'',
                ];

                $this-view('Landing/passwordupdate',$data);                
                
            }
        }
}







?>