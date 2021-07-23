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
    public function filterby($type, $param){
        //Check if the type is category or credit or frequency
        //if it is category then check what parameter it has like cycling, swimming etc based on that call ActivityModel function to get
     

        //Store category as number so, query becomes easy
        if($type == 'category'){
           
            if($param == 'cycling'){             
                $data = $this->activityModel->filterByCategory('cycling');
            }
            if($param == 'Pilates'){             
                $data = $this->activityModel->filterByCategory('Pilates');
                var_dump($data); exit;
            }
            if($param == 'weights'){             
                $data = $this->activityModel->filterByCategory('weights');
            }
            if($param == 'swimming'){             
                $data = $this->activityModel->filterByCategory('swimming');
            }
            if($param == 'yoga'){             
                $data = $this->activityModel->filterByCategory('yoga');
            }
            if($param == 'cardio'){             
                $data = $this->activityModel->filterByCategory('cardio');
            }
            if($param == 'HighIntensity'){             
                $data = $this->activityModel->filterByCategory('HighIntensity');

            }
        }

        if($type == 'credits'){
            if($param == 'high'){
                $data = $this->activityModel->filterByCredit('high');
                echo '<pre>';
                var_dump($data);
                echo '</pre>';

                exit;
            }

            if($param == 'low'){
                $data = $this->activityModel->filterByCredit('low');
                var_dump($data); exit;
            }
        }

        if($type == 'frequency'){
            if($param == 'high'){
                $data = $this->activityModel->filterByFrequency('high');
                echo '<pre>';
                var_dump($data);
                echo '</pre>';

                exit;
            }

            if($param == 'low'){
                $data = $this->activityModel->filterByFrequency('low');
                echo '<pre>';
                var_dump($data);
                echo '</pre>';

                exit;
            }

        }
       

    }

}

?>