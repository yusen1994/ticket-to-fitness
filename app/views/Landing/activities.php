<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<!-- IF USER IS LOGGED IN -->
<?php if(!empty($_SESSION['user_id'])){ 
    require APPROOT . '/views/User/dashboardmenu.php';
 } ?>

<!--Activity page-->

<div class="container-fluid" style="background-color:#F2F2F2;">
    <div class="row justify-content-center">
        <div class="landing-image col-sm-12 col-lg-6 px-0">
            <img class="activities-responsive" src="<?php echo URLROOT; ?>/images/gym-workout-routines.jpg" alt="">
            <div class="text-overlay-5">
                <h3 class="land-text-6">All Activities</h3>
            </div>
        </div>
    </div>
</div>

<div class="container" style="padding-top: 20px;">
    <div class="row" style="padding-left: 15px; padding-right: 15px; padding-bottom: 20px;">
        <div class="col-9">
            <form method="POST" action="<?php echo URLROOT; ?>/Activity/search">
                <div class="search-input p-1">
                    <button type="submit" style="padding:0; border:none; background:none;"> <span class="search-text-icon"><svg id="loupe" xmlns="http://www.w3.org/2000/svg" width="19.261" height="19.261" viewBox="0 0 19.261 19.261">
                                <g id="Group_86" data-name="Group 86">
                                    <path id="Path_100" data-name="Path 100" d="M19.026,17.894l-5.477-5.477a7.639,7.639,0,1,0-1.135,1.135l5.477,5.477a.8.8,0,1,0,1.135-1.135Zm-11.4-4.248a6.019,6.019,0,1,1,6.019-6.019A6.025,6.025,0,0,1,7.624,13.646Z" transform="translate(0 -0.003)" fill="#001e4e" />
                                </g>
                            </svg></span></button>
                    <input class="search-input-text" id="searchField" name="searchField" placeholder="Search for something">
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
        <div class="col-3">
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



<!--Filter Modal-->

<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:#E46E2E;">
                <h3 class="modal-title" id="filterModalLabel"><b>Filter</b></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="filter_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/credits/low"> <button class="filter_btn text-center"><img src="<?php echo URLROOT; ?>/images/credits_noBG.png">

                                        </button></a>
                                    <p> Credits Low </p>
                                </div>
                                <div class="col-sm-3">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/credits/high"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/credits_noBG.png"></button></a>
                                    <p> Credits High </p>

                                </div>
                                <div class="col-sm-3">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/frequency/low"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/frequency.png"></button></a>
                                    <p> Frequency Low </p>
                                </div>
                                <div class="col-sm-3">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/frequency/high"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/frequency.png"></button></a>
                                    <p> Frequency High </p>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <h3 style="text-align:center;"><b>CATEGORIES </b></h3>
                            <hr>
                            <div class="row">
                                <div class="col-sm-4">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/category/cycling"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/cycle.png"></button></a>
                                    <p>Cycling</p>
                                    <br>
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/category/weights"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/weights.png"></button></a>
                                    <p>Weights</p>
                                </div>
                                <div class="col-sm-4">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/category/swimming"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/swimmer.png"></button></a>
                                    <p>Swimming</p>
                                    <br>
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/category/fight"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/fight.png"></button></a>
                                    <p>Martial Arts</p>
                                </div>
                                <div class="col-sm-4">
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/category/yoga"><button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/meditation.png"></button></a>
                                    <p>Yoga</p>
                                    <br>
                                    <a href="<?php echo URLROOT; ?>/Activity/filterby/category/cardio"> <button class="filter_btn"><img src="<?php echo URLROOT; ?>/images/cardio.png"></button></a>
                                    <p>Cardio</p>
                                </div>

                            </div>
                        </div>

                        <form method="POST" action="<?php echo URLROOT; ?>/Activity/nearestOffer">
                            <h3 style="text-align:center;"><b>Search by Location </b></h3>
                            <hr>


                            <div class="form-group mt-5">
                                <!-- <select name="distance">
                        <option value="">Distance</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>-->

                                <input type="hidden" name="distance" value="50">
                            </div>

                            <div class="form-group">
                                <input type="text" id="gymaddress" class="form-control" placeholder="Enter Address" value="<?php if (!empty($data['gym_address'])) {
                                                                                                                                echo $data['gym_address'];
                                                                                                                            } ?>" name="gym_address" required title="">

                            </div>

                            <div class="form-group" id="lat_area">
                                <input type="hidden" name="latitude" id="latitude" class="form-control" placeholder="Latitude">

                            </div>

                            <div class="form-group" id="long_area">
                                <input type="hidden" id="longitude" name="longitude" class="form-control" placeholder="Longitude">

                            </div>

                            <button type="submit" class="btn btn-warning">Search</button>


                        </form>
                    </div>
                </div>
            </div>



            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<!--<div class="container" style="padding-top: 20px; height: 500px; background-color: #f3f3f3">-->
<!-- Cards here -->
<!--
        <a href="#" class="card-container">
            <div class="gym-image-container">
                <img class="gym-image" src="<?php echo URLROOT; ?>/images/golds gym.png">
            </div>
            <div class="card-content">
                <p class="gym-name">Gold's Gym</p>
                <div class="line-separator"></div>
                <div class="gym-info-container">
                    <table style="width:100%;">
                        <tr>
                            <td class="card-info-col">
                                <img class="card-category-image" src="<?php echo URLROOT; ?>/images/weightlift.svg">
                                <small class="card-cateogry-text">Weightlifting</small>
                            </td>
                            <td>
                                <img class="card-category-image" src="<?php echo URLROOT; ?>/images/location-#E46E2E.svg">
                                <small class="card-cateogry-text">Venice Beach</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="card-info-col">
                                <img class="card-category-image" src="<?php echo URLROOT; ?>/images/timer-#E46E2E.svg">
                                <small class="card-cateogry-text">x3 weekly</small>
                            </td>
                            <td>
                                <img class="card-category-image" src="<?php echo URLROOT; ?>/images/group-#E46E2E.svg">
                                <small class="card-cateogry-text">Unlimited</small>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="credits-container">
                <img class="credits-image" class="card-category-image" src="<?php echo URLROOT; ?>/images/credits.svg">
                <h5>25</h5>
            </div>
        </a>

-->
<div class="container">
    <div class="row">
        <?php
        if (!empty($data['gym_activity'])) {
            foreach ($data['gym_activity'] as $activity) {

                echo '<div class = "col-6">';
                echo '<div class="card mt-4 " style="width: auto;">';
                echo '<img class="card-img-top" src="' . URLROOT . '/images/gym1.jpg" alt="Card image cap">';
                echo '<div class="card-body rounded-pill">';
                echo '<h6 class="card-title">' . $activity->activity_name . '</h6>';
                echo '<p class="card-subtitle mb-2 text-muted">Category: ' . $activity->category . '</p>';
                echo '<img src';
                echo '<hr>';
                echo '<p><b>Credit: ' . $activity->credit . '</b></p>';
                echo '<a href="' . URLROOT . '/Activity/activitydetails/' . $activity->id . '/' . $activity->gym_id . '" class="card-link">More Details</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "No Gym activity please check back later!";
        }
        ?>
    </div>
</div>

<br>



<?php require APPROOT . '/views/inc/footer.php'; ?>
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB3D6RYLp7QUyUuw93C-AOyP-_IPya_LXw"></script>

<script src="<?php echo URLROOT; ?>/js/address.js"></script>