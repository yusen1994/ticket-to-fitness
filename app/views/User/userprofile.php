<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<nav class="nav nav-pills nav-justified mt-4">
    <a class="nav-item nav-link " href="<?php echo URLROOT; ?>/User">Dashboard</a>
    <a class="nav-item nav-link active" href="<?php echo URLROOT; ?>/User/userProfile">Profile</a>
    <a class="nav-item nav-link" href="#">Timetable</a>
    <a class="nav-item nav-link " href="#">Manage Class</a>

</nav>

<div id="container-userprofile">

    <div class="card" style="width: 40rem; height:35rem;">
        <div class="card-body">
   
            
            <h3 class="card-title">Hello <?php echo $data['firstname'] ?></h3>
            <div class="divider py-1 bg-dark"></div>
            <h5 class="card-title mt-5">Details</h5>
            <p class="font-weight-normal text-secondary">Username: <?php echo $data['username']; ?></p>
            <p class="font-weight-normal text-secondary">Email: <?php echo $data['email']; ?></p>
            <h5 class="card-title mt-5"> Change Password</h5>
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

            <a href="#" class="btn btn-danger">Deactivate Account</a>


            <!-- Register gym model -->

            <?php
                if($_SESSION['partnership_status'] != NULL && $_SESSION['partnership_status'] == true ){
                   
                    ?>
                 <a href="<?php echo URLROOT; ?>/Gym" class="btn btn-success">Switch Gym</a>

                    <?php
                
                }else{
                    echo "<button type='button' class='btn btn-success' data-toggle='modal' data-target='#registerGymModal'>";
                    echo "Register Gym Account";
                    echo "</button>";
                }
            ?>

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
                            <form action="<?php echo URLROOT; ?>/accounts/registerGym" method="post">

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
                                    <input type="text" id="gymaddress" class="form-control" placeholder="Gym Address" value="<?php if (!empty($data['gym_address'])) {
                                                                                                                                    echo $data['gym_address'];
                                                                                                                                } ?>" name="gym_address" required title="">
                                    <?php
                                    if (!empty($data['gym_address_err'])) {
                                        echo "<span>";
                                        echo $data['gym_address_err'];
                                        echo "</span>";
                                    }
                                    ?>
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