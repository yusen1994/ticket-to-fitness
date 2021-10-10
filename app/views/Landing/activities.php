<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<!-- IF USER IS LOGGED IN -->
<?php if (!empty($_SESSION['user_id'])) {
    require APPROOT . '/views/User/dashboardmenu.php';
} ?>



<div class="container-fluid pt-3 pt-lg-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 text-center align-self-center">
            <p>
            <h3><b>All <span style="color:#E46E2E;">Activities</span></b></h3>
            </p>
        </div>
    </div>


    <div class="row justify-content-center pt-lg-3">
        <div class="col-8 col-lg-4 col-xl-3 pr-0">

            <form method="POST" action="<?php echo URLROOT; ?>/Activity/search">
                <div class="search-input p-1">
                    <button type="submit" style="padding:0; border:none; background:none;">
                        <span class="search-text-icon">
                            <svg id="loupe" xmlns="http://www.w3.org/2000/svg" width="19.261" height="19.261" viewBox="0 0 19.261 19.261">
                                <g id="Group_86" data-name="Group 86">
                                    <path id="Path_100" data-name="Path 100" d="M19.026,17.894l-5.477-5.477a7.639,7.639,0,1,0-1.135,1.135l5.477,5.477a.8.8,0,1,0,1.135-1.135Zm-11.4-4.248a6.019,6.019,0,1,1,6.019-6.019A6.025,6.025,0,0,1,7.624,13.646Z" transform="translate(0 -0.003)" fill="#001e4e" />
                                </g>
                            </svg>
                        </span>
                    </button>
                    <input class="search-input-text ml-1" id="searchField" name="searchField" placeholder="Search...">
                </div>

                <?php if (!empty($data['error'])) {

                    echo '<div class="alert alert-danger mt-4" role="alert">';
                    echo $data['error'];
                    echo '</div>';
                }
                ?>

                <?php if (!empty($data['success'])) {

                    echo '<div class="alert alert-success mt-4" role="alert">';
                    echo $data['success'];
                    echo '</div>';
                }
                ?>

            </form>


        </div>
        <div class="col-4 col-lg-2 col-xl-1">
            <button type="button" class="filter-btn" data-toggle="modal" data-target="#filterModal"><span class="filter-btn-icon">
                    <svg id="filter-filled-tool-symbol" xmlns="http://www.w3.org/2000/svg" width="14.761" height="14.896" viewBox="0 0 14.761 14.896">
                        <path id="Path_103" data-name="Path 103" d="M10.016,7.039a.919.919,0,0,1,.242.622v6.774a.46.46,0,0,0,.783.328L12.93,12.6c.253-.3.392-.454.392-.754V7.663a.927.927,0,0,1,.242-.622l5.422-5.883A.69.69,0,0,0,18.48,0H5.1a.69.69,0,0,0-.507,1.157Z" transform="translate(-4.41)" />
                    </svg>

                </span>
                Filter
            </button>

        </div>
    </div>

</div>



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-8 col-xl-6">
            <div class="row background-card mt-3 mt-lg-5 pl-2 pl-lg-3 pr-2 pr-lg-3">
                <?php
                if (!empty($data['gym_activity'])) {
                    foreach ($data['gym_activity'] as $activity) {
                        $address_array = explode(" ", $activity->gym_address);
                        $suburb = $address_array[count($address_array) - 3];

                        echo '  
                             <div class="col-6 col-md-4 col-lg-4 mt-3 mt-lg-5">
                             
                                <a href="' . URLROOT . '/Activity/activitydetails/' . $activity->id . '/' . $activity->gym_id . '" class="card-link" style="text-decoration:none!important; color:black;">
                                 <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-12 text-center" style="padding-top:10px;">';
                        if ($activity->photo != NULL) {
                            echo '<img class="card-img-top activity-gym-logo" src="' . URLROOT . '/uploads/' . $activity->photo . '" alt="Card image cap">';
                        } else {
                            echo '<img class="card-img-top activity-gym-logo" src="' . URLROOT . '/images/gym-default.png" alt="Card image cap">';
                        }
                        echo '
                                </div>
                            </div>
            
                                <div class="row justify-content-center mt-2">
                                    <div class="col-12 text-center">
                                        <h5 class="p-0 m-0"><b>' . $activity->gym_name . '</b></h5>
                                    </div>
                                </div>
                                        <div class="row justify-content-lg-center mt-3">
                                            <div class="col-12 col-lg-6">
                                                <div class="d-flex align-items-center" style="flex-direction:row;">
                                                 <div class="d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                                   <img src="' . URLROOT . '/public/images/activity-icon-' . $activity->category . '.svg">
                                                    </div>
                                                    <p class="p-0 m-0" style="font-size=16px;text-transform:capitalize; color: #ef8830"><b>' . $activity->category . '</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-lg-center">
                                         <div class="col-12 col-lg-6 text-center">
                                            <div class="d-flex align-items-center" style="flex-direction:row;">
                                         <div class="d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35.927" height="35.927" viewBox="0 0 35.927 35.927">
                                                        <g id="Icons" transform="translate(5 2)">
                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                            <g id="Communication" transform="translate(0 0)">
                                                                <g id="_-Round-_-Communication-_-location_on" data-name="-Round-/-Communication-/-location_on">
                                                                <g id="Group_123" data-name="Group 123">
                                                                    <path id="Path" d="M0,0H35.927V35.927H0Z" fill="none" fill-rule="evenodd"/>
                                                                    <path id="_Icon-Color" data-name="🔹Icon-Color" d="M15.479,2A10.471,10.471,0,0,0,5,12.479c0,6.242,6.616,14.85,9.341,18.128a1.486,1.486,0,0,0,2.29,0c2.709-3.278,9.326-11.886,9.326-18.128A10.471,10.471,0,0,0,15.479,2Zm0,14.221a3.742,3.742,0,1,1,3.742-3.742A3.744,3.744,0,0,1,15.479,16.221Z" transform="translate(2.485 0.994)" fill="#0645ad" fill-rule="evenodd"/>
                                                                </g>
                                                                </g>
                                                            </g>
                                                            </g>
                                                        </g>
                                                        </svg>
                                                    </div>
                                                    <p class="p-0 m-0 ml-1" style="font-size=16px;text-transform:capitalize; color: #0645AD"><b>' . $suburb . '</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-lg-center mb-4">
                                         <div class="col-12 col-lg-6 text-center">
                                            <div class="d-flex align-items-center" style="flex-direction:row;">
                                              <div class="d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.184" height="30.953" viewBox="0 0 27.184 30.953">
                                                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, 0.031, 28.17)">
                                                            <path id="Path_63" data-name="Path 63" d="M25.8,16.8H3a3,3,0,0,1-3-3V11.4a.6.6,0,0,1,.6-.6h.6A2.4,2.4,0,1,0,1.2,6H.6A.6.6,0,0,1,0,5.4V3A3,3,0,0,1,3,0H25.8a3,3,0,0,1,3,3V5.4a.6.6,0,0,1-.6.6h-.6a2.4,2.4,0,0,0,0,4.8h.6a.6.6,0,0,1,.6.6v2.4A3,3,0,0,1,25.8,16.8ZM1.2,12v1.8A1.8,1.8,0,0,0,3,15.6H25.8a1.8,1.8,0,0,0,1.8-1.8V12h0a3.6,3.6,0,0,1,0-7.2V3a1.8,1.8,0,0,0-1.8-1.8H3A1.8,1.8,0,0,0,1.2,3V4.8a3.6,3.6,0,1,1,0,7.2Z" transform="translate(0 7.196)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_64" data-name="Path 64" d="M.6,2.4A.6.6,0,0,1,0,1.8V.6A.6.6,0,1,1,1.2.6V1.8A.6.6,0,0,1,.6,2.4Z" transform="translate(9.602 7.196)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_65" data-name="Path 65" d="M.6,8.308a.6.6,0,0,1-.6-.6V5.678a.6.6,0,1,1,1.2,0V7.709A.6.6,0,0,1,.6,8.308Zm0-5.077a.6.6,0,0,1-.6-.6V.6A.6.6,0,0,1,1.2.6V2.631A.6.6,0,0,1,.6,3.231Z" transform="translate(9.602 11.443)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_66" data-name="Path 66" d="M.6,2.4A.6.6,0,0,1,0,1.8V.6A.6.6,0,1,1,1.2.6V1.8A.6.6,0,0,1,.6,2.4Z" transform="translate(9.602 21.598)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_67" data-name="Path 67" d="M.6,8.4A.6.6,0,0,1,.39,7.234L19.473.109a1.833,1.833,0,0,1,2.334,1.108L23.972,7.6a.6.6,0,0,1-1.137.385L20.671,1.6a.614.614,0,0,0-.779-.37L.809,8.357A.579.579,0,0,1,.6,8.4Z" transform="translate(2.4 0)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                        </g>
                                                        </svg>
                                                        </div>
                                                    <p class="p-0 m-0 ml-1" style="font-size=16px;text-transform:capitalize; color: #2BB730"><b>' . $activity->credit . '</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                       
                    </a>
                </div>
                ';
                    }
                } else {
                    echo "Nothing to show, please check back later!";
                }
                ?>
            </div>
        </div>
    </div>

</div>

<br>

<div style="height:200px;width:100%; position:absolute;">
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</div>

<!--Filter Modal-->

<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header" style="background-color:#3F3F3F;">
                <h2 class="modal-title" id="filterModalLabel" style="color: white;"><b>Filter</b></h2>
                <span style="color: white; margin-top: 5px;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <svg xmlns="http://www.w3.org/2000/svg" width="20.215" height="20.215" viewBox="0 0 20.215 20.215">
                            <path id="close" d="M11.96,10.244l7.871-7.872A1.309,1.309,0,0,0,17.979.52L10.108,8.392,2.236.52A1.309,1.309,0,1,0,.384,2.372l7.871,7.872L.384,18.115a1.309,1.309,0,1,0,1.852,1.852L10.108,12.1l7.872,7.872a1.309,1.309,0,1,0,1.852-1.852Zm0,0" transform="translate(0 -0.136)" fill="#fff" />
                        </svg>
                    </button>
                </span>
            </div>

            <div class="modal-body">
                <div class="filter_body">
                    <div class="row pt-3 pb-3">
                        <div class="col-8 align-self-center ">
                            <h4><b>Options</b></h4>
                        </div>
                        <div class="col-4 align-self-center text-right">
                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            $urlarray = explode("/", $url);
                            $end = $urlarray[count($urlarray) - 1];
                            if (strpos($end, 'Activity') == false) {
                                echo
                                '
                                        <a href="' ?><?php echo URLROOT ?><?php echo '/Activity">
                                                <button class="reset-filter-btn"><b>Reset</b></button>
                                        </a>
                                            ';
                                                                        }  ?>
                        </div>
                    </div>
                    <div class=" line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/credits/high">
                                <h5>Credits (High)</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/credits/low">
                                <h5>Credits (Low)</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <h5>Distance (Close)</h5>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row pt-3 pb-3">
                        <div class="col-12 align-self-center pl-3">
                            <h4><b>Categories</b></h4>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/category/weights">
                                <h5>Weights</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/category/yoga">
                                <h5>Yoga</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/category/cycling">
                                <h5>Cycling</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/category/swimming">
                                <h5>Swimming</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/category/cardio">
                                <h5>Cardio</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>
                    <div class="row p-2 p-lg-3">
                        <div class="col-12 align-self-center pl-3">
                            <a class="remove-link" href="<?php echo URLROOT; ?>/Activity/filterby/category/fight">
                                <h5>Martial Arts</h5>
                            </a>
                        </div>
                    </div>
                    <div class="line-separator"></div>


                    <form method="POST" action="<?php echo URLROOT; ?>/Activity/nearestOffer">

                        <div class="form-group mt-2">
                            <!-- <select name="distance">
                        <option value="">Distance</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>-->

                            <input type="hidden" name="distance" value="50">
                        </div>

                        <div class="form-group">
                            <input type="text" id="gymaddress" class="form-control address-input" placeholder="Enter Address" value="<?php if (!empty($data['gym_address'])) {
                                                                                                                                            echo $data['gym_address'];
                                                                                                                                        } ?>" name="gym_address" required title="">

                        </div>

                        <div class="form-group" id="lat_area">
                            <input type="hidden" name="latitude" id="latitude" class="form-control" placeholder="Latitude">

                        </div>

                        <div class="form-group" id="long_area">
                            <input type="hidden" id="longitude" name="longitude" class="form-control" placeholder="Longitude">

                        </div>

                        <button type="submit" class="btn btn-warning search-btn">Search</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<style>
    h5 {
        margin: 0px;
    }

    h4 {
        margin: 0px;
        width: 150px;
    }

    .line-separator {
        height: 1px;
        width: 100%;
        background-color: #f3f3f3;
    }

    .remove-link {
        text-decoration: none !important;
        color: black;
    }


    .reset-filter-btn {
        background-color: #2BB730;
        width: 100%;
        height: 37px;
        color: black;
        border-radius: 18px;
        border-style: none;
        outline: none;
    }

    .address-input {
        border-radius: 18px;
    }

    .search-btn {
        background-color: #EF8830;
        width: 100px;
        height: 37px;
        color: black;
        border-radius: 18px;
        border-style: none;
        outline: none;
    }


    .activities-responsive {
        width: 100%;
        filter: blur(4px);
    }

    .search-text-icon {
        margin-left: 5px;

    }

    .background-card {
        background-color: white;
        border-radius: 60px;
        padding-bottom: 30px;
    }

    .search-input {
        display: flex;
        flex-direction: row;
        background-color: white;
        justify-content: center;
        align-items: center;
        height: 37px;
        border-radius: 18px;
        border-width: 1px;
        border-color: black;
        border-style: solid;
    }

    .search-input-text {
        height: 100%;
        width: 90%;
        background-color: transparent;
        border-style: none;
        outline: none;
    }

    .card-body {
        border-width: 1px;
        border-radius: 18px;
        border-color: #DDDDDD;
        border-style: solid;
    }

    .activity-gym-logo {
        height: 145px !important;
        width: 145px;
        object-fit: scale-down;
    }
</style>






<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBXLLkk-01k8l0ERjmzHFUImS0IRGtmlbw"></script>

<script src="<?php echo URLROOT; ?>/js/address.js"></script>