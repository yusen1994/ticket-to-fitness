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
            $_SESSION['admin_name'] = $admin->firstname." ". $admin->lastname;
            
        }

        public function isLoggedIn(){

            if(isset($_SESSION['admin_id'])){
                return true;
            }else{
                return false;
            }
        }

        public function dashboard(){

            $this->view('Admin/dashboard');
        }

        public function managegym(){
            if($this->isLoggedIn()){
                $getGymInformation = $this->adminModel->getGymInformation();
                $data['gym_info'] =  $getGymInformation;
                $this->view('Admin/managegym', $data);
            }else{
                $this->view('Admin/login');
            }
        }





    }
?>