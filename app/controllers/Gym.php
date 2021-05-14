<?php


class Gym extends Controller
{


    public function __construct()
    {
        $this->accountsModel = $this->model('Account');
    }

    public function isGymLoggedIn(){
        if(isset($_SESSION['user_id'] )){
            if($_SESSION['partnership_status']==true){
            return true;
            }
          } else {
            return false;
          }
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard',
        ];

        if($this->isGymLoggedIn()){
        $this->view('Gym/dashboard', $data);
        } else {
            redirect('Accounts/login');
        }
    }

    public function gymProfile(){
       
        if($this->isGymLoggedIn()){

            $gyminfo = $this->accountsModel->fetchGymInformation($_SESSION['user_id']);
          
            if(!empty($gyminfo)){
                $data=[

                    'gym_name'=>$gyminfo->gym_name,
                    'gym_address'=>$gyminfo->gym_address,
                    'gym_email'=>$gyminfo->gym_email,
                    'abn'=>$gyminfo->abn,

                ];
                

                $this->view('Gym/gymprofile', $data);
            }
            
        } else {
            redirect('Accounts/login');
        }


    }
}
