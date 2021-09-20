<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<div class="container-fullwidth"><span class="profile-heading"><i class="fas fa-arrow-left"></i> Gym Profile</span></div>



<div class="container-fluid mt-3">



    <div class="row m-2">
        <div class="col-4 mt-3 pr-0">
            <?php
            if ($data['photo'] != NULL) {
                echo '<img class="img-fluid rounded" style=" display:block; height:auto; max-width:100%;" src="' . URLROOT . '/uploads/' . $data['photo'] . '">';
            } else {
                echo '<img class="img-fluid rounded" style=" display:block; height:auto; max-width:100%;" src="' . URLROOT . '/images/gym-default.png">';
            }
            ?>


        </div>
        <div class="col-8 mt-3">
            <div class="row">
                <div class="col-8">
                    <h4><b><?php echo $data['gym_name'] ?></b></h4>
                </div>
                <div class="col-4">
                    <a href="<?php echo URLROOT; ?>" style="color:#E46E2E; text-decoration:none;"> <b>Edit</b></a>
                </div>
            </div>
            <hr>

            <div class="row">
                <div class="col-7">
                    <p><?php echo $data['gym_email']; ?></p>
                    <p><?php echo $data['phone_number']; ?></p>

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


<br>

<div class="container-fullwidth m-3">
    <a href="<?php echo URLROOT; ?>/User" class="btn btn-success">Switch User</a>

</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>