<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!-- IF USER IS LOGGED IN -->
<?php if (!empty($_SESSION['user_id'])) {
    require APPROOT . '/views/User/dashboardmenu.php';
} ?>



<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4 align-self-center">
            <p>
            <h3><b><span><a href="<?php echo URLROOT; ?>/Activity"><i class="fas fa-arrow-left" style="color:black;"></i></a></span><span class="pl-2" style="color:#E46E2E;">Activity</span> <span>Info</span> </b></h3>
            </p>
        </div>
    </div>


    <div class="row justify-content-center" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4 align-self-center">
            <div class="row">
                <div class="col-4 pr-0">
                    <img class="card-img-top" src="<?php echo URLROOT; ?>/images/golds_gym.png" alt="Card image cap" style="max-width: 200px;">
                </div>
                <div class="col-8">
                    <h4><b><?php //Array with two object, we need to access object 2 from index 0 that has gym info
                            echo $data['gym_activity'][1]->gym_name; ?></h4></b>
                    <hr>
                    <h5 class="mt-2 mt-sm-3"><?php //Array with two object, we need to access object 1 from index 0 that has activity info
                                                echo $data['gym_activity'][0]->activity_name; ?>
                    </h5>
                    <h5 class="mt-2 mt-sm-3"><b> <?php echo $data['gym_activity'][0]->category; ?></b></h5>

                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center d-none d-lg-flex" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4 text-center">
            <a style="text-decoration: none;" class="align-items-end" href="<?php echo URLROOT; ?>/Activity/addActivity/<?php echo $data['activity_id']; ?>/<?php echo $data['gym_activity'][1]->gym_id; ?>">
                <button type="button" class="add-activity-btn">Add Activity</button>
            </a>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <h5><b>Description</b></h5>
            <p class="m-0 pl-2"><?php echo $data['gym_activity'][0]->description; ?></p>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">

            <h5><b>Days and Times</b></h5>
            <table>
                <tbody>
                    <?php
                    foreach (($data['activity_time']) as $session_per_week) {
                        echo '
                            <tr>
                                <td class="pl-2">
                                      <span style="text-transform: capitalize;"><p class="m-0">' . $session_per_week->day . '</p></span>
                                </td>
                                <td class="pl-5">
                                    <p class="m-0">' . $session_per_week->time . '</p>
                                </td>
                            </tr>
                    ';
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    <div class="row justify-content-center" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <h5><b>Price</b></h5>
            <p class="m-0 pl-2"><?php echo $data['gym_activity'][0]->credit; ?> credits per session</p>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <h5><b>Capacity</b></h5>
            <p class="m-0 pl-2"><?php echo $data['gym_activity'][0]->max_capacity; ?> people per class</p>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color: white; padding-top:20px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <h5><b>Location</b></h5>
            <p class="m-0 pl-2"> <?php //Array with two object, we need to access object 2 from index 0 that has gym info
                                    echo $data['gym_activity'][1]->gym_address; ?>
            </p>
        </div>
    </div>
    <div class="row justify-content-center" style="background-color: white; padding-top:20px; padding-bottom: 100px;">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">

            <div id="map"></div>


            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtWSTetYh3Y_zEDAgUK5k0FgssOuwZo7g&callback=initMap&libraries=&v=weekly" async></script>
        </div>
    </div>
</div>

<div class="btn-bottom">
    <div class="row justify-content-center d-flex d-lg-none">
        <div class="col-12 text-center" style=>
            <a style="text-decoration: none;" class="align-items-end" href="<?php echo URLROOT; ?>/Activity/addActivity/<?php echo $data['activity_id']; ?>/<?php echo $data['gym_activity'][1]->gym_id; ?>">
                <button type="button" class="add-activity-btn">Add Activity</button>
                
            </a>
        </div>
    </div>
</div>



<script>
    // Initialize and add the map
    function initMap() {
        // The location of Uluru
        const location = {
            lat: <?php echo $data['gym_activity'][1]->latitude; ?>,
            lng: <?php echo $data['gym_activity'][1]->longitude; ?>
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: location,
            map: map,
        });
    }
</script>

<style>
    td {
        padding-top: 10px;
    }


    #map {
        width: 100%;
        height: 300px;
    }

    .activity-address {
        font-size: 12px;
    }

    .add-activity-btn {
        width: 100%;
        max-width: 350px;
        height: 45px;
        border-radius: 24px;
        border-style: none;
        color: white;
        background-color: #EF8830;
        font-size: 18px;
        font-weight: bold;
    }

    .btn-bottom {
        position: fixed;
        width: 100%;
        bottom: 0;
        padding-bottom: 20px;
    }
</style>