<?php


class Activity extends Controller{

    public function __construct(){

        $this->activityModel = $this->model('ActivityModel');


    }

    public function index(){
        $this->allactivity();
    }


    public function allactivity(){

        $this->view('Landing/activities');
    }

    //Param from GET Request
    //Param will be type which can be category, credit or frequency
    //Return data, array of rows from database
    //All the database query should be done in ActivityModel.php model
    public function filterby($type=[], $param="",$asc=true){
        //Check if the type is category or credit or frequency
        //if it is category then check what parameter it has like cycling, swimming etc based on that call ActivityModel function to get
        //filtered result

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            $GET = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'gym_id' => $_SESSION['user_id'],
                'activity_name' => trim($_GET['activity_name']),
                'category' => trim($_GET['category']),
                'sessions_per_week' => trim($_GET['sessions_per_week']),
                'max_capacity' => trim($_GET['max_capacity']),
                'price_per_week' => trim($_GET['price_per_week']),
                'description' => trim($_GET['description']),
                'status' => '',
                'activity_name_err' => '',
                'category_err' => '',
                'sessions_per_week_err' => '',
                'max_capacity_err' => '',
                'price_per_week_err' => '',
                'message' => '',
                'description_err' => '',
            ];
            $result= []; 
            if($data['category']) {
                foreach ($array as $k => $v){
                    $values[$k] = $v[$key] ?? "";
                }
        // Sort the key values in ascending or descending order
                $asc ? asort($values) : arsort($values);
        //Destroy variable
                unset($k,$v);
        //Rearrange the original array
                foreach ($values as $k => $v){
                    $result[$k] = $array[$k];
                }
        //Returns the newly sorted array
                return $result;
            }

            if ($data['sessions_per_week']){
                foreach ($array as $k => $v){
                    $values[$k] = $v[$key] ?? "";
                }
        // Sort the key values in ascending or descending order
                $asc ? asort($values) : arsort($values);
        //Destroy variable
                unset($k,$v);
        //Rearrange the original array
                foreach ($values as $k => $v){
                    $result[$k] = $array[$k];
                }
        //Returns the newly sorted array
                return $result;
            }

            if ($data['price_per_week']){
                foreach ($array as $k => $v){
                    $values[$k] = $v[$key] ?? "";
                }
        // Sort the key values in ascending or descending order
                $asc ? asort($values) : arsort($values);
        //Destroy variable
                unset($k,$v);
        //Rearrange the original array
                foreach ($values as $k => $v){
                    $result[$k] = $array[$k];
                }
        //Returns the newly sorted array
                return $result;
            }


    }
}
}
?>