<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>



<div class="container-fluid" style="margin-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-xl-4">
            <div class="row mt-3">
                <div class="col-8" style="flex-direction: row;">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/User"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">My Profile</span></b></h3>
                </div>
                <div class="col-4 text-right">
                    <a style="color: #EF8830" href="#"><b>Edit Info</b></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3 pt-3 pb-3" style="background-color:white;">
        <div class="col-sm-12 col-xl-4">
            <div class="row justify-content-center">
                <div class="col-4 pr-0">
                    <img class="img-fluid rounded" style=" display:block; height:auto; max-width:100%; object-fit: contain;" src="<?php echo URLROOT; ?>/uploads/<?php echo $data['photo']; ?>">
                </div>
                <div class="col-8">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h3><b><?php echo $data['firstname'] . " " . $data['lastname'] ?></b></h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="line-separator"></div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <p><?php echo $data['email']; ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <p>Gender</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <p>DOB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-12 col-xl-4 text-center">
            <div class="content-background pt-3 pb-3">
                <h4 style="font-weight:bold">Joined: <span style="color: #E46E2E">9 February 2020</h4></span>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-sm-12 col-lg-3">
            <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/Activity">
                <button type="button" class="dashboard-option-btn">Change Password</button>
            </a>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-12 col-lg-3">
            <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/User/credits">
                <button type="button" class="dashboard-highlight-btn">Add Payment Information</button>
            </a>
        </div>
    </div>

</div>

<style>
    p {
        padding: 0px;
        margin: 0px;
    }

    .line-separator {
        height: 1px;
        width: 100%;
        background-color: #f3f3f3;
    }

    .content-background {
        background-color: white;
        border-radius: 18px;
        width: 100%;

    }

    .dashboard-highlight-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: none;
        color: white;
        background-color: #EF8830;
        font-size: 18px;
        font-weight: bold;
    }

    .dashboard-option-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: solid;
        border-color: #EF8830;
        border-width: 1px;
        color: black;
        background-color: white;
        font-size: 18px;
        font-weight: bold;
    }
</style>


<div class="row">
    <div class="col-8">
        <span class="profile-heading">Address</span>

    </div>

    <div class="col-4 text-center">
        <a href="<?php echo URLROOT; ?>" style="color:#E46E2E; text-decoration:none;"> <b>Edit</b> </a>

    </div>
</div>
<div class="container-fullwidth" style="background-color:white;">
    <div class="row">
        <div class="col">
            <table class="table m-3">
                <tbody>
                    <tr>
                        <th>Street Number</th>
                        <td>1</td>

                    </tr>
                    <tr>
                        <th>Street</th>
                        <td>Homely Drive</td>

                    </tr>
                    <tr>
                        <th>Suburb/City</th>
                        <td>North Hobart</td>

                    </tr>
                    <tr>
                        <th>State</th>
                        <td>TAS</td>

                    </tr>

                    <tr>
                        <th>Post Code</th>
                        <td>7005</td>

                    </tr>
                </tbody>
            </table>
        </div>


    </div>

</div>

</div>

<br>

<div class="container-fullwidth m-3">
    <a href="#" class="btn btn-danger">Deactivate Account</a>

    <!-- Register gym model -->

    <?php
    if ($_SESSION['partnership_status'] != NULL && $_SESSION['partnership_status'] == true) {

    ?>
        <a href="<?php echo URLROOT; ?>/Gym" class="btn btn-success">Switch Gym</a>

    <?php

    } else {
        echo "<button type='button' class='btn btn-success' data-toggle='modal' data-target='#registerGymModal'>";
        echo "Register Gym Account";
        echo "</button>";
    }
    ?>
</div>
<br>

<!--Change Password Modal -->

<!-- Modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="changePasswordModal">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="<?php echo URLROOT; ?>/accounts/updatePassword">

                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="password" name="password" placeholder="Password" class="form-control" type="password">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control" type="password">
                        </div>

                        <div class="input-group" style="display:none">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                            <input id="email" name="email" placeholder="email" value="<?php echo $data['email']; ?>" class="form-control" type="text">
                        </div>

                    </div>
                    <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                    </div>

                    <input type="hidden" class="hide" name="token" id="token" value="">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal - Registeration-->
<div class="modal fade" id="registerGymModal" tabindex="-1" role="dialog" aria-labelledby="registerGymModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"> Fill in the form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo URLROOT; ?>/Accounts/registerGym" method="post">

                    <div class="form-group">

                        <input type="text" id="gymname" class="form-control" placeholder="Gym Name" value="<?php if (!empty($data['gym_name'])) {
                                                                                                                echo $data['gym_name'];
                                                                                                            } ?>" name="gym_name" required title="">
                        <?php
                        if (!empty($data['gym_name_err'])) {
                            echo "<span>";
                            echo $data['gym_name_err'];
                            echo "</span>";
                        }
                        ?>
                    </div>


                    <div class="form-group">
                        <input type="text" id="gymaddress" class="form-control" placeholder="Address" value="<?php if (!empty($data['gym_address'])) {
                                                                                                                    echo $data['gym_address'];
                                                                                                                } ?>" name="gym_address" required title="">

                    </div>

                    <div class="form-group" id="lat_area">
                        <input type="hidden" name="latitude" id="latitude" class="form-control" placeholder="Latitude">

                    </div>

                    <div class="form-group" id="long_area">
                        <input type="hidden" id="longitude" name="longitude" class="form-control" placeholder="Longitude">

                    </div>
                    <div class="form-group">
                        <input type="text" id="gymemail" class="form-control" placeholder="Gym Email" value="<?php if (!empty($data['gym_email'])) {
                                                                                                                    echo $data['gym_email'];
                                                                                                                } ?>" name="gym_email" required title="">
                        <?php
                        if (!empty($data['gym_email_err'])) {
                            echo "<span>";
                            echo $data['gym_email_err'];
                            echo "</span>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="text" id="phonenumber" class="form-control" placeholder="Phone Number" value="<?php if (!empty($data['phone_number'])) {
                                                                                                                        echo $data['phone_number'];
                                                                                                                    } ?>" name="phone_number" required title="">

                        <?php
                        if (!empty($data['phone_number_err'])) {
                            echo "<span>";
                            echo $data['phone_number_err'];
                            echo "</span>";
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="text" id="abn" class="form-control" placeholder="ABN" name="abn" required>

                        <?php
                        if (!empty($data['abn_err'])) {
                            echo "<span>";
                            echo $data['abn_err'];
                            echo "</span>";
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>



<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB3D6RYLp7QUyUuw93C-AOyP-_IPya_LXw"></script>

<script src="<?php echo URLROOT; ?>/js/address.js"></script>