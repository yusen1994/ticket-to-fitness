<?php


class Activity extends Controller
{

    public function __construct()
    {

        $this->activityModel = $this->model('ActivityModel');
        $this->userModel = $this->model('userModel');

    }

    public function index()
    {
        $this->allactivity();
    }


    public function allactivity()
    {
        $activity = $this->activityModel->fetchActiveActivity();
        if ($activity != NULL) {
            $data['gym_activity'] = $activity;
        }
        $this->view('Landing/activities', $data);
    }

    //Param from GET Request
    //Param will be type which can be category, credit or frequency
    //Return data, array of rows from database
    //All the database query should be done in ActivityModel.php model
    public function filterby($type, $param)
    {
        //Check if the type is category or credit or frequency
        //if it is category then check what parameter it has like cycling, swimming etc based on that call ActivityModel function to get


        //Store category as number so, query becomes easy
        if ($type == 'category') {

            if ($param == 'cycling') {
                $data['gym_activity'] = $this->activityModel->filterByCategory('cycling');
            }
            if ($param == 'swimming') {
                $data['gym_activity']  = $this->activityModel->filterByCategory('swimming');
            }
            if ($param == 'yoga') {
                $data['gym_activity']  = $this->activityModel->filterByCategory('yoga');
            }
            if ($param == 'weights') {
                $data['gym_activity']  = $this->activityModel->filterByCategory('weights');
            }
            if ($param == 'fight') {
                $data['gym_activity'] = $this->activityModel->filterByCategory('fight');
            }
            if ($param == 'cardio') {
                $data['gym_activity']  = $this->activityModel->filterByCategory('cardio');
            }



            $this->view('Landing/activities', $data);
        }

        if ($type == 'credits') {
            if ($param == 'high') {
                $data['gym_activity']  = $this->activityModel->filterByCredit('high');
            }

            if ($param == 'low') {
                $data['gym_activity']  = $this->activityModel->filterByCredit('low');
            }

            $this->view('Landing/activities', $data);
        }

        if ($type == 'frequency') {
            if ($param == 'high') {
                $data['gym_activity']  = $this->activityModel->filterByFrequency('high');
            }

            if ($param == 'low') {
                $data['gym_activity']  = $this->activityModel->filterByFrequency('low');
            }

            $this->view('Landing/activities', $data);
        }
    }

    public function search()
    {
        //Need to filter the param

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $param = $_POST['searchField'];
            if (!empty($param)) {
                $data['gym_activity'] = $this->activityModel->searchByName($param);
                $this->view('landing/activities', $data);
            } else {
                $data['error'] = "No Gym Offer";
                $this->view('landing/activities', $data);
            }
        }
    }

    public function nearestOffer()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data['distance'] = $_POST['distance'];
            $data['latitude'] = $_POST['latitude'];
            $data['longitude'] = $_POST['longitude'];

            $data['gym_activity'] = $this->activityModel->nearestOffer($data);
            $this->view('landing/activities', $data);
        }
    }


    public function activitydetails($activityid, $gymid)
    {

        $data['activity'] = $this->activityModel->fetchActivitybyid($activityid);
        $data['gym_info'] = $this->activityModel->fetchgymInfoByid($gymid);
        $data['gym_activity'] = array_merge($data['activity'], $data['gym_info']);
        $data['activity_id'] = $activityid;
        $this->view('landing/activitydetails', $data);
    }


    public function addActivity($activityid)
    {
        $url = $_SERVER['HTTP_REFERER'];
        $url = explode("/",$url,5);// so at second index rest of the string will come.
       

       
        if (isset($_SESSION['user_id'])) {

            $data = [

                'user_id' => $_SESSION['user_id'],
                'activity_id' => $activityid,
            ];
            $checkActivityExists = $this->activityModel->checkCart($data);
            $checkExistingActivity = $this->userModel->checkActivity($data);
            if (($checkActivityExists && $checkExistingActivity)) {
                $data['error'] = "Activity already Added";
                $this->allactivity($data);
            } else {
                $addActivity = $this->activityModel->addToCart($data);
                if ($addActivity) {
                    $data['success'] = "Activity Added To Cart";
                    $this->allactivity($data);
                } else {
                    $data['error'] = "Something'\s Wrong! Please try again later";
                    $this->allactivity($data);
                }
            }
        } else {
            $data['loginError'] = 'Please login to add activity';
   
            redirect('Accounts/login/continue='.$url[4].'');
        }
    }
}
