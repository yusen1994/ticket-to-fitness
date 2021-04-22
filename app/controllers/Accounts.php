<?php


class Accounts extends Controller{

        public function __construct(){

            $this->accountsModel = $this->model('Accounts');

        }

        public function index(){
            $this->showLogin();
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
                    $verified_user = checkPassword($data['password'], $user->password);
                    if($verified_user){
                        //If user is verified then create session
                        $this->createUserSession($verified_user);
                    }else{
                        //If password doesn't match, show error.
                        $data['loginError'] = 'Username or Password seems Incorrect!';
                        $this->view('Landing\login', $data);
                    }
                }
                else{   
                        //If username doesn't exists, show error.
                        $data['loginError'] = 'Username or Password seems Incorrect!';
                        $this->view('Landing\login', $data);
                    }
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
            $_SESSION['user_id'] = $user->id;
            
            redirect('dashboard');
          }


        /*
          Function to unset session when user logs out.
        */
        public function logout(){
            unset($_SESSION['user_id']);
            
            session_destroy();
            redirect('users/login');
          }
    
        /*
        Function to display login page
        */
        public function showLogin(){

            //Check if the user is already logged in i.e the session is set.
            // If session is set then redirect to dashboard.
            if($this->isLoggedIn()){
                redirect('dashboard');
            }
            //If Login button is clicked i.e POST request is made then validate login else show login page
            if($_SERVER['REQUEST_METHOD']=='POST'){
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = ['username'=>'', 'password'=>'', 'loginError'=>''];
                $data['username'] = trim($_POST['username']);
                $data['password'] = trim($_POST['password']);
                validateLogin($data);
                
            }else{
                $data = ['username'=>'', 'password'=>'', 'loginError'=>''];
                $this->view('Landing\login', $data);

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
                if(($checkEmail->email)==$data['email']){
                    $data['email_err'] = 'The Email already Exists in the system';
                }

                $checkUsername = $this->accountsModel->checkUsernameExists($data['username']);
                if(($checkUsername->username)==$data['username']){
                    $data['username_err'] = 'The Username already Exists in the system';
                }

                if(strlen($data['password']) < 6){
                    $data['password_err'] = 'Password must have atleast 6 characters.';
                  }

                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err'] = 'Password do not match.';
                }


            }
            //If no error then proceed to create password has and register user account
            if(empty($data['username_err']) && !empty($data['firstname_err']) &&!empty($data['lastname_err']) &&!empty($data['email_err'])&&!empty($data['password_err'])&&!empty($data['cpassword_err'])){

                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                if($this->accountsModel->registerAccount($data)){
                    // Redirect to login
                    redirect('users/login');
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
                redirect('dashboard');
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
                    'username_err'=>'',
                    'firstname_err'=>'',
                    'lastname_err'=>'',
                    'email_err'=>'',
                    'password_err'=>'',
                    'cpassword_err'=>'',
                ];
                //Function call to validate user data for registeration
                validateRegister($data);
            }else{
                $data = [

                    'username'=>'',
                    'firstname'=>'',
                    'lastname'=>'',
                    'email'=>'',
                    'password'=>'',
                    'cpassword'=>'',
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



        



    

}









?>