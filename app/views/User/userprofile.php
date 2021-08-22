<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="container-fullwidth"><span class="profile-heading"><i class="fas fa-arrow-left"></i> My Profile</span></div>



<div class="container-fullwidth mt-3">

    <div class="container-fullwidth" style="background-color:white;">

        <div class="row m-2">
            <div class="col-3 mt-3">

                <img class="img-fluid rounded" style=" display:block; height:auto; max-width:100%;" src="<?php echo URLROOT; ?>/images/profile-pic.jpg">

            </div>
            <div class="col-9 mt-3">
                <div class="row">
                    <div class="col-8">
                        <h4><b><?php echo $data['firstname'] . " " . $data['lastname'] ?></b></h4>
                    </div>
                    <div class="col-4">
                        <a href="<?php echo URLROOT; ?>" style="color:#E46E2E; text-decoration:none;"> <b>Edit</b></a>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-7">
                        <p><?php echo $data['email']; ?></p>
                        <p>Male </p>
                        <p>4 Aug 1998 </p>
                    </div>
                    <div class="col-5">

                        <a href="<?php echo URLROOT; ?>" data-toggle="modal" data-target="#changePasswordModal" style="color:#E46E2E; text-decoration:none; position: absolute; bottom: 0;"><b> Change Password </b> </a>

                    </div>
                </div>
                <hr>

                <h4 style="font-weight:bold">Joined: <span style="color: #E46E2E">9 February 2020</h4></span>
            </div>
        </div>
    </div><br>
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