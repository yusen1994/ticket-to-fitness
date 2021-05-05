<?php


class UserProfile extends Controller{


    public function __construct(){
        
    }

    public function index(){
			
       $data = [
            'title' => 'Dashboard',
          ];
	
	if(isset($_SESSION['user_id'])){
	$this->view('Dashboard/userprofile', $data);
         
        }
	else{
		redirect('Accounts/login');
	}

    }

}



?>