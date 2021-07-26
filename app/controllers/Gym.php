<?php


class Gym extends Controller
{


    public function __construct()
    {
        $this->accountsModel = $this->model('Account'); //Model for Authentication or managing account related work
        $this->gymModel = $this->model('GymModel'); // Model for gym related work
    }

    public function isGymLoggedIn()
    {
        if (isset($_SESSION['user_id'])) {
            if ($_SESSION['partnership_status'] == true) {
                $gyminfo = $this->accountsModel->fetchGymInformation($_SESSION['user_id']);
                $_SESSION['gym_name'] = $gyminfo->gym_name;
                return true;
            }
        } else {
            return false;
        }
    }

    public function index()
    {
        $this->dashboard();
    }

    public function gymProfile()
    {

        if ($this->isGymLoggedIn()) {

            $gyminfo = $this->accountsModel->fetchGymInformation($_SESSION['user_id']);

            if (!empty($gyminfo)) {
                $data = [

                    'gym_name' => $gyminfo->gym_name,
                    'gym_address' => $gyminfo->gym_address,
                    'gym_email' => $gyminfo->gym_email,
                    'abn' => $gyminfo->abn,

                ];



                $this->view('Gym/gymprofile', $data);
            }
        } else {
            redirect('Accounts/login');
        }
    }

    public function addActivity()
    {

        if ($this->isGymLoggedIn()) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


                $data = [

                    'gym_id' => $_SESSION['user_id'],
                    'activity_name' => trim($_POST['activity_name']),
                    'category' => trim($_POST['category']),
                    'sessions_per_week' => serialize($_POST['sessions_per_week']),
                    'max_capacity' => trim($_POST['max_capacity']),
                    'credit' => trim($_POST['credit']),
                    'description' => trim($_POST['description']),
                    'status' => '',
                    'activity_name_err' => '',
                    'category_err' => '',
                    'sessions_per_week_err' => '',
                    'max_capacity_err' => '',
                    'credit_err' => '',
                    'message' => '',
                    'description_err' => '',
                ];

                if (empty($data['activity_name'])) {
                    $data['activity_name_err'] = 'Please enter activity name';
                }
                if (($data['category']) == 'Category') {
                    $data['category_err'] = 'Please enter category name';
                }
                if (empty($data['sessions_per_week'])) {
                    $data['sessions_per_week_err'] = 'Please enter sessions';
                }
                if (empty($data['max_capacity'])) {
                    $data['max_capacity_err'] = 'Please enter max capacity';
                }
                if (empty($data['credit'])) {
                    $data['credit_err'] = 'Please enter credit amount';
                }

                if (empty($data['description'])) {
                    $data['description'] = 'Please enter description';
                }

                if (empty($data['activity_name_err']) && empty($data['category_err']) && empty($data['sessions_per_week_err']) && empty($data['max_capacity_err']) && empty($data['credit_err']) && empty($data['description_err'])) {

                    $gym_add_activity =  $this->gymModel->addActivity($data);
                    if ($gym_add_activity) {
                        echo "<script>alert('SuccessFully Added'); </script>";
                        $data['status'] = 0;
                        $data['message'] = 'Successfully added';
                        redirect('Gym/dashboard');
                    } else {
                        echo "<script>alert('Something went Wrong'); </script>";
                        $data['message'] = 'Something Wrong! Try Again Later';
                        redirect('Gym/dashboard');
                    }
                } else {
                    echo "<script>alert('Please enter all the field'); </script>";
                    redirect('Gym/dashboard');
                }
            } else {
                $data = [
                    'gym_id' => '',
                    'activity_name' => '',
                    'category' => '',
                    'sessions_per_week' => '',
                    'max_capacity' => '',
                    'credit' => '',
                    'description' => '',
                    'status' => '',
                    'activity_name_err' => '',
                    'category_err' => '',
                    'sessions_per_week_err' => '',
                    'credit_err' => '',
                    'message' => '',

                ];

                $this->view('Gym/dashboard', $data);
            }
        } else {
            redirect('Accounts/login');
        }
    }

    public function editActivity($param)
    {
        if ($this->isGymLoggedIn()) {

            if ($param == 'delete') {

                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    $data = [

                        'activity_id' => $_POST['activity_id'],

                    ];

                    $this->gymModel->deleteActivity($data);
                    redirect('Gym/dashboard');
                }
            }

            if ($param == 'edit') {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    $data = [

                        'activity_id' => $_POST['activity_id'],
                        'activity_name' => trim($_POST['activity_name']),
                        'category' => trim($_POST['category']),
                        'sessions_per_week' => serialize($_POST['sessions_per_week']),
                        'max_capacity' => trim($_POST['max_capacity']),
                        'credit' => trim($_POST['credit']),
                        'description' => trim($_POST['description']),

                    ];

                    $this->gymModel->editActivity($data);
                    redirect('Gym/dashboard');
                }
            }

            if ($param == 'activate') {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    if ($_POST['status'] == 'true') {
                        $_POST['status'] = 1;
                    } else {
                        $_POST['status'] = 0;
                    }
                    $data = [

                        'activity_id' => $_POST['activity_id'],
                        'status' => $_POST['status'],

                    ];

                    if ($this->gymModel->updateStatus($data)) {
                        redirect('Gym/dashboard');
                    } else {
                        echo "<script>alert('Something is wrong')</script>";
                    }
                }
            }
        }
        
        
    }



    public function dashboard()
    {
        if ($this->isGymLoggedIn()) {
            $data = [

                'gym_id' => $_SESSION['user_id'],
                'gym_activity' => '',
            ];
            $gymactivity = $this->gymModel->viewActivity($data);
            if (!empty($gymactivity)) {
                $data['gym_activity'] = $gymactivity;
                $this->view('Gym/dashboard', $data);
            }



            $this->view('Gym/dashboard', $data);
        } else {
            redirect('Accounts/login');
        }
    }
}
