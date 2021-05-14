<?php
/*
    This file contains logic for Admin authentication and its feature
*/
    class Administrator extends Controller {


        public function __construct(){

            $this->adminModel = $this->model('Admin');

        }


        public function index(){
            $this->login();


        }

        public function login(){
           
            if($this->isLoggedIn()){
                redirect('Administrator/dashboard');
                
            }

            if($_SERVER['REQUEST_METHOD']=='POST'){
                $data = [
                    'username'=>$_POST['username'],
                    'password'=>$_POST['password'],
                    'login_err'=>'',

                ];
                
                $this->validateLogin($data);
                    

            }else{
                
                $data = [
                    'username'=>'',
                    'password'=>'',
                    'login_err'=>'',
                    

                ];

                $this->view('Admin/login', $data);
            }


        }


        public function validateLogin($data){

       

            if(empty($data['username'])){
                $data['login_err'] = 'Please Enter Username And Password';
                $this->view('Admin/login', $data);
            }

            if(empty($data['password'])){
                $data['login_err'] = 'Please Enter Username And Password';
                $this->view('Admin/login', $data);
            }

            if(empty($data['login_err'])){
                $admin = $this->adminModel->validateLogin($data);
                if(!empty($admin)){
                    $this->createSession($admin);
                    $this->view('Admin/dashboard', $data);


                }else{
                    $data['login_err'] = 'Username or Password Incorrect';
                    $this->view('Admin/login', $data);
                }
            }
        }


        public function createSession($admin){
            $_SESSION['admin_id'] = $admin->id;
            
        }

        public function isLoggedIn(){

            if(isset($_SESSION['admin_id'])){
                return true;
            }else{
                return false;
            }
        }

        public function dashboard(){

            $data = [
                        'message' => 'Hello Admin',
                    ];
            $this->view('Admin/dashboard', $data);
        }





    }









?>