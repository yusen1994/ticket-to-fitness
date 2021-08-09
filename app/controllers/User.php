<?php


class User extends Controller
{


    public function __construct()
    {
        $this->accountsModel = $this->model('Account');
        $this->userModel = $this->model('userModel');
    }

    public function index()
    {

        $data = [
            'title' => 'Dashboard',
        ];

        if (isset($_SESSION['user_id'])) {
            $this->view('User/dashboard', $data);
        } else {
            redirect('Accounts/login');
        }
    }

    public function userProfile()
    {

        if (isset($_SESSION['user_id'])) {

            $userinfo = $this->accountsModel->fetchUserInformation($_SESSION['user_id']);

            if (!empty($userinfo)) {
                $data = [

                    'firstname' => $userinfo->firstname,
                    'lastname' => $userinfo->lastname,
                    'email' => $userinfo->email,
                    'username' => $userinfo->username,

                ];


                $this->view('User/userprofile', $data);
            }
        } else {
            redirect('Accounts/login');
        }
    }


    public function timetable($day = "monday")
    {

        if (isset($_SESSION['user_id'])) {
            $data = [

                'user_id' => $_SESSION['user_id'],
                'day' => $day,

            ];
            $useractivity = $this->userModel->viewtimeTable($data);


            if (!empty($useractivity)) {
                $data['user_activity'] = $useractivity;
                $this->view('User/timetable', $data);
            } else {
                $data['error'] = 'No Activity in this time';
                $this->view('User/timetable', $data);
            }
        } else {
            $this->view('Account/login');
        }
    }


    public function allocation($data){
        //Request from timetable UI Users Param! (Activity id of the selected activity along with id from timetable because we need which
        // time is allocated )



        //Check how many purchase for that particular activity id of the user in user_activity table = 2




        //Check how many already allocated in allocation table for that particular activity id of the user = 2


        //Allow to allocate as much as the total purchase



        //Send message of "All Allocated" if no more allocation


    }



    public function payment(){

        $this->view('User/payment');
    }

}
