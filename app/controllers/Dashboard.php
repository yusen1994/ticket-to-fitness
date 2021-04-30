<?php


class Dashboard extends Controller{


    public function __construct(){
        
    }

    public function index(){
			
       $data = [
            'title' => 'Dashboard',
          ];
	
	if(isset($_SESSION['user_id'])){
	$this->view('Dashboard/dashboard', $data);
         
        }
	else{
		redirect('Accounts/login');
	}

    }

}



?>