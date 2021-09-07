<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!-- IF USER IS LOGGED IN -->
<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="row justify-content-center">
    <div class="col-sm-12 col-lg-6 align-self-center">
        <div class="pl-3">
            <p>
            <h3><b><span><a href="<?php echo URLROOT; ?>/Activity"><i class="fas fa-arrow-left" style="color:black;"></i></a></span><span class="pl-2" style="color:#E46E2E;">Activity</span> <span>Info</span> </b></h3>
            </p>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color:white; padding-top:15px;">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 text-center">
            <h3><b>Gym Name</h3></b>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 text-center">
            <h5><?php //Array with two object, we need to access object 1 from index 0 that has activity info
                echo $data['gym_activity'][0]->activity_name; ?></h5>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6 text-center">
            <p class="activity-address"><?php //Array with two object, we need to access object 2 from index 0 that has gym info
                                        echo $data['gym_activity'][1]->gym_address; ?></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-4 text-center">
            <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/Activity/addActivity/<?php echo $data['activity_id']; ?>">
                <button type="button" class="add-activity-btn">Add Activity</button>
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <table class="activity-table-info">
                <tbody>
                    <tr>
                        <th>
                            Activity
                        </th>
                        <td>
                            <?php echo $data['gym_activity'][0]->category; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Day(s)
                        </th>
                        <td>
                            <?php
                            foreach ((unserialize($data['gym_activity'][0]->sessions_per_week)) as $session_per_week) {
                                echo $session_per_week . "<br/>";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Time(s)
                        </th>
                        <td>
                            Nothing dynamic yet
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Price per session
                        </th>
                        <td>
                            <?php echo $data['gym_activity'][0]->credit; ?>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Capacity
                        </th>
                        <td>
                            <?php echo $data['gym_activity'][0]->max_capacity; ?></td>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Instructor
                        </th>
                        <td>
                            Nothing dynamic yet
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>




<style>
    th {
        padding-right: 15px;
        padding-bottom: 20px;
        text-align: right;
        width: 50%;
    }

    td {
        padding-left: 15px;
        padding-bottom: 20px;
        border: none;
        border-left: solid 1px #f2f2f2;
        text-align: left;
        width: 50%;
    }

    .activity-address {
        font-size: 12px;
    }

    .add-activity-btn {
        width: 100%;
        height: 45px;
        border-radius: 24px;
        border-style: none;
        color: white;
        background-color: #EF8830;
        font-size: 18px;
        font-weight: bold;
    }

    .activity-table-info {
        margin-top: 50px;
        width: 100%;
        border-collapse: collapse;
        border-spacing: 20px;
        margin-bottom: 100px;
    }
</style>



<?php require APPROOT . '/views/inc/footer.php'; ?>