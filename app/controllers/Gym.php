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
                if(!empty($gyminfo)){
                    $_SESSION['gym_name'] = $gyminfo->gym_name;
                    $_SESSION['gym_address'] = $gyminfo->gym_address;
                    return true;

                }
            }
        } else {
            return false;
        }
    }

    public function index()
    {
        $this->dashboard();
    }

    public function dashboard()
    {


        if ($this->isGymLoggedIn()) {

            $gyminfo = $this->accountsModel->fetchGymInformation($_SESSION['user_id']);

            if (!empty($gyminfo)) {
                $data = [
                    'gym_id' => $_SESSION['user_id'],
                    'gym_name' => $gyminfo->gym_name,
                    'gym_address' => $gyminfo->gym_address,
                    'gym_email' => $gyminfo->gym_email,
                    'abn' => $gyminfo->abn,

                ];

                $gym_members = $this->gymModel->totalGymMembers($data);
                $data['members_count'] = $gym_members;
                $gym_earnings = $this->gymModel->totalEarnings($data);
                $data['gym_earnings'] = $gym_earnings;
                $gymactivity = $this->gymModel->numGymActivities($data);
                $data['gym_activity'] = $gymactivity;




                $this->view('Gym/dashboard', $data);
            }
        } else {
            redirect('Accounts/login');
        }
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
                    'phone_number' => $gyminfo->phone_number,
                    'photo' => $gyminfo->photo,

                ];



                $this->view('Gym/gymprofile', $data);
            }
        } else {
            redirect('Accounts/login');
        }
    }


    public function joinTime($startTime, $endTime)
    {

        $i = count($startTime);
        $finalTime = array();

        for ($k = 0; $k < $i; $k++) {

            $finalTime[] = $startTime[$k] . "-" . $endTime[$k];
        }

        return $finalTime;
    }

    public function isEmptyArray($array)
    {

        foreach ($array as $single) {
            if (empty($single)) {
                return true;
                break;
            }
        }

        return false;
    }
    public function addActivity()
    {

        if ($this->isGymLoggedIn()) {

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $time_monday = $time_tuesday = $time_wednesday = $time_thursday = $time_friday = $time_saturday = $time_sunday = NULL;

                if (!$this->isEmptyArray($_POST['monday_starttimeArray'])) {

                    $time_monday = array();
                    $time_monday = $this->joinTime($_POST['monday_starttimeArray'], $_POST['monday_endtimeArray']);
                }

                if (!$this->isEmptyArray($_POST['tuesday_starttimeArray'])) {
                    $time_tuesday = array();
                    $time_tuesday = $this->joinTime($_POST['tuesday_starttimeArray'], $_POST['tuesday_endtimeArray']);
                }

                if (!$this->isEmptyArray($_POST['wednesday_starttimeArray'])) {
                    $time_wednesday = array();
                    $time_wednesday = $this->joinTime($_POST['wednesday_starttimeArray'], $_POST['wednesday_endtimeArray']);
                }

                if (!$this->isEmptyArray($_POST['thursday_starttimeArray'])) {

                    $time_thursday = array();
                    $time_thursday = $this->joinTime($_POST['thursday_starttimeArray'], $_POST['thursday_endtimeArray']);
                }

                if (!$this->isEmptyArray($_POST['friday_starttimeArray'])) {
                    $time_friday = array();
                    $time_friday = $this->joinTime($_POST['friday_starttimeArray'], $_POST['friday_endtimeArray']);
                }

                if (!$this->isEmptyArray($_POST['saturday_starttimeArray'])) {
                    $time_saturday = array();
                    $time_saturday = $this->joinTime($_POST['saturday_starttimeArray'], $_POST['saturday_endtimeArray']);
                }

                if (!$this->isEmptyArray($_POST['sunday_starttimeArray'])) {
                    $time_sunday = array();
                    $time_sunday = $this->joinTime($_POST['sunday_starttimeArray'], $_POST['sunday_endtimeArray']);
                }


                $data = [

                    'gym_id' => $_SESSION['user_id'],
                    'activity_name' => trim($_POST['activity_name']),
                    'category' => trim($_POST['category']),
                    'sessions_per_week' => serialize($_POST['sessions_per_week']),
                    'max_capacity' => trim($_POST['max_capacity']),
                    'credit' => trim($_POST['credit']),
                    'description' => trim($_POST['description']),
                    'time_monday' => $time_monday,
                    'time_tuesday' => $time_tuesday,
                    'time_wednesday' => $time_wednesday,
                    'time_thursday' => $time_thursday,
                    'time_friday' => $time_friday,
                    'time_saturday' => $time_saturday,
                    'time_sunday' => $time_sunday,
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
                        redirect('Gym/manageActivities');
                    } else {
                        echo "<script>alert('Something went Wrong'); </script>";
                        $data['message'] = 'Something Wrong! Try Again Later';
                        redirect('Gym/manageActivities');
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
                    'time_monday' => '',
                    'time_tuesday' => '',
                    'time_wednesday' => '',
                    'time_thursday' => '',
                    'time_friday' => '',
                    'time_saturday' => '',
                    'time_sunday' => '',
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
                        redirect('Gym/manageActivities');
                    } else {
                        echo "<script>alert('Something is wrong')</script>";
                    }
                }
            }
        }
    }


    public function registerGym()
    {
        $data = [
            'title' => 'Register a Gym'
        ];

        $this->view('gym/registergym', $data);
    }

    public function activities()
    {
        if ($this->isGymLoggedIn()) {
            $data = [

                'gym_id' => $_SESSION['user_id'],
                'gym_activity' => '',

            ];
            $getGymLogo = $this->gymModel->getGymLogo($data);
            $data['photo'] = $getGymLogo->photo;
            $gymactivity = $this->gymModel->viewActivity($data);
            if (!empty($gymactivity)) {
                $data['gym_activity'] = $gymactivity;
                $this->view('Gym/newactivity', $data);
            }



            $this->view('Gym/newactivity', $data);
        } else {
            redirect('Accounts/login');
        }
    }




    public function manageActivities($msg = NULL)
    {

        if ($this->isGymLoggedIn()) {
            $data = [

                'gym_id' => $_SESSION['user_id'],
                'gym_activity' => '',

            ];
            if (!empty($msg['success'])) {
                $data['success'] = $msg['success'];
            }

            if (!empty($msg['error'])) {
                $data['error'] = $msg['error'];
            }


            $gymactivity = $this->gymModel->manageActivity($data);

            if (!empty($gymactivity)) {
                $data['gym_activity'] = $gymactivity;
            }

            $this->view('Gym/manageactivities', $data);
        } else {
            redirect('Accounts/login');
        }
    }

    public function timetable($day = "monday")
    {

        if ($this->isGymLoggedIn()) {
            $data = [

                'gym_id' => $_SESSION['user_id'],
                'day' => $day,
                'gym_activity' => '',
                'gym_address' => $_SESSION['gym_address']
            ];
            $gymactivity = $this->gymModel->viewtimeTable($data);
            if (!empty($gymactivity)) {
                $data['gym_activity'] = $gymactivity;
                $this->view('Gym/timetable', $data);
            } else {
                $data['error'] = 'No activities at this time';
                $this->view('Gym/timetable', $data);
            }
        } else {
            redirect('Accounts/login');
        }
    }

    public function allocatedUsers($timetableid)
    {
        if ($this->isGymLoggedIn()) {
            $data = [
                'gym_id' => $_SESSION['user_id'],
                'timetable_id' => $timetableid,

            ];

            $allocated_users = $this->gymModel->allocatedusers($data);

            if (!empty($allocated_users)) {
                $data['allocated_users'] = $allocated_users;
                $this->view('Gym/allocatedUsers', $data);
            } else {
                $data['error'] = 'No allocation at this time';
                $this->view('Gym/allocatedUsers', $data);
            }
        } else {
            redirect('Accounts/login');
        }
    }



    public function members()
    {
        if ($this->isGymLoggedIn()) {
            $data = [
                'gym_id' => $_SESSION['user_id'],
            ];

            $gym_members = $this->gymModel->members($data);

            $data['gym_members'] = $gym_members;

            $this->view('Gym/members', $data);
        } else {
            $data['error'] = "No members yet!";
            $this->view('Gym/members', $data);
        }
    }


    public function reports()
    {
        if ($this->isGymLoggedIn()) {
            $data = [
                'gym_id' => $_SESSION['user_id'],
            ];

            $gym_earnings = $this->gymModel->earnings($data);

            $data['gym_earnings'] = $gym_earnings;

            $this->view('Gym/reports', $data);
        } else {
            $data['error'] = "No reports yet!";
            $this->view('Gym/reports', $data);
        }
    }

    public function applySales($percentage, $timetable_id)
    {
        if ($this->isGymLoggedIn()) {
            $data = [
                'gym_id' => $_SESSION['user_id'],
                'sale_percentage' => $percentage,
                'timetable_id' => $timetable_id,
            ];

            $apply_sales = $this->gymModel->apple_sales($data);
            $msg['success'] = 'Successfully applied!';
            $this->manageActivities($msg);
        } else {
            $msg['error'] = "Something\'s wrong please try again later!";
            $this->manageActivities($msg);
        }
    }

    public function removeSales($timetable_id)
    {
        if ($this->isGymLoggedIn()) {
            $data = [
                'gym_id' => $_SESSION['user_id'],
                'timetable_id' => $timetable_id,
            ];

            $remove_sales = $this->gymModel->remove_sales($data);
            $msg['success'] = 'Successfully removed!';
            $this->manageActivities($msg);
        } else {
            $msg['error'] = "Something\'s wrong please try again later!";
            $this->manageActivities($msg);
        }
    }
}
