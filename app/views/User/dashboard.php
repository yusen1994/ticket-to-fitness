<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>






<div class="container-fluid">


    <div class="row justify-content-center p-0 m-0">
        <div class="col-sm-12 col-md-10 col-lg-6 col-xl-4 m-0 p-0">
            <?php

            if (!empty($data['error'])) {
                echo "<div class='alert alert-danger' role='alert'>";
                echo $data['error'];
                echo "</div>";
            }
            if (!empty($data['success'])) {
                echo "<div class='alert alert-success' role='alert'>";
                echo $data['success'];
                echo "</div>";
            }

            ?>
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <div class="user-name-background">
                        <h2 style="font-weight:bold">Hey, <span style="color: #E46E2E; text-transform: capitalize;"><?php echo $_SESSION['firstname']; ?>!</h2></span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col text-center">
                    <p style="font-size: 14px;">Time to smash your goals</p>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-5 text-center pl-0">
                    <div class="content-background">
                        <h3><b><?php echo $data['num_activities']->num_activities; ?></b></h3>
                        <p style="font-size: 12px;">saved <?php if ($data['num_activities']->num_activities = !1) {
                                                                echo 'activities';
                                                            } else {
                                                                echo 'activity';
                                                            } ?></p>
                    </div>
                </div>
                <div class="col-5 text-center pr-0">
                    <div class="content-background">
                        <h3><b><?php echo $data['num_allocation']->num_allocation; ?></b></h3>
                        <p style="font-size: 12px;">in timetable</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center p-0 m-0">
        <div class="col-12 col-lg-6">
            <div class="row justify-content-center mt-3">
                <div class="col-12 text-center">
                    <span style="font-size: 24px;font-weight:bold">My <span style="color: #E46E2E">Credits</span></span>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-sm-12 col-xl-6">
                    <div class="credits-content-background">
                        <div class="row justify-content-center">
                            <div class="col-6 align-self-center pr-3">
                                <span style="font-size: 20px;font-weight:bold">Available</span>
                            </div>
                            <div class="col-6 align-self-center pl-3" style="flex-direction:row">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.11" height="36.664" viewBox="0 0 32.11 36.664">
                                    <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.303, 33.639)">
                                        <path id="Path_63" data-name="Path 63" d="M31.118,20.263H3.618A3.623,3.623,0,0,1,0,16.645V13.75a.724.724,0,0,1,.724-.724h.724a2.895,2.895,0,0,0,0-5.789H.724A.724.724,0,0,1,0,6.513V3.618A3.623,3.623,0,0,1,3.618,0h27.5a3.623,3.623,0,0,1,3.618,3.618V6.513a.724.724,0,0,1-.724.724h-.724a2.895,2.895,0,0,0,0,5.789h.724a.724.724,0,0,1,.724.724v2.895A3.621,3.621,0,0,1,31.118,20.263ZM1.447,14.473v2.171a2.174,2.174,0,0,0,2.171,2.171h27.5a2.174,2.174,0,0,0,2.171-2.171V14.473h0a4.342,4.342,0,0,1,0-8.684V3.618a2.174,2.174,0,0,0-2.171-2.171H3.618A2.174,2.174,0,0,0,1.447,3.618V5.789a4.342,4.342,0,1,1,0,8.684Z" transform="translate(0 8.677)" />
                                        <path id="Path_64" data-name="Path 64" d="M.724,2.895A.724.724,0,0,1,0,2.171V.724a.724.724,0,1,1,1.447,0V2.171A.724.724,0,0,1,.724,2.895Z" transform="translate(11.579 8.677)" />
                                        <path id="Path_65" data-name="Path 65" d="M.724,10.019A.724.724,0,0,1,0,9.295V6.847a.724.724,0,1,1,1.447,0V9.3A.723.723,0,0,1,.724,10.019Zm0-6.122A.724.724,0,0,1,0,3.173V.724a.724.724,0,0,1,1.447,0V3.173A.724.724,0,0,1,.724,3.9Z" transform="translate(11.579 13.8)" />
                                        <path id="Path_66" data-name="Path 66" d="M.724,2.895A.724.724,0,0,1,0,2.171V.724a.724.724,0,1,1,1.447,0V2.171A.724.724,0,0,1,.724,2.895Z" transform="translate(11.579 26.046)" />
                                        <path id="Path_67" data-name="Path 67" d="M.724,10.125a.723.723,0,0,1-.253-1.4L23.483.131A2.21,2.21,0,0,1,26.3,1.467l2.61,7.7a.724.724,0,0,1-1.371.465l-2.61-7.7a.74.74,0,0,0-.939-.446L.975,10.079a.7.7,0,0,1-.252.046Z" transform="translate(2.895 0)" />
                                    </g>
                                </svg>
                                <span style="font-size: 22px;font-weight:bold;">
                                    <?php
                                    if ($data['user_credit']->total_credit == 0) {
                                        echo 0;
                                    } else {
                                        echo $data['user_credit']->total_credit;
                                    }

                                    ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center p-0 m-0">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <div class="row justify-content-center mt-5">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/User/credits">
                        <button type="button" class="dashboard-highlight-btn">Buy Credits</button>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/Activity">
                        <button type="button" class="dashboard-option-btn">View Activities</button>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT ?>/User/userProfile">
                        <button type="button" class="dashboard-option-btn">My Profile</button>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3" style="margin-bottom: 50px;">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/Accounts/logout">
                        <button type="button" class="dashboard-option-btn">Log out</button>
                    </a>
                </div>
            </div>


            <div class="row justify-content-center mt-3" style="margin-bottom: 50px;">
                <div class="col-sm-12 col-lg-7">

                    <?php
                    if ($_SESSION['partnership_status'] != NULL && $_SESSION['partnership_status'] == true) {

                    ?>
                        <a href="<?php echo URLROOT; ?>/Gym" style="text-decoration: none;">
                            <button type="button" class="gym-dashboard-btn">Switch to Gym Dashboard</button>
                        </a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php

if (!empty($data['message'])) {
    echo "<div class='alert alert-success' role='alert'>";
    echo $data['message'];
    echo "</div>";
}
?>


<style>
    .user-name-background {
        width: 100%;
        height: 75px;
        background-color: white;
        border-bottom-left-radius: 18px;
        border-bottom-right-radius: 18px;
        padding-top: 20px;
    }

    .content-background {
        width: 100%;
        height: 75px;
        background-color: white;
        border-radius: 18px;
        padding-top: 5px;
    }

    .credits-content-background {
        width: 100%;
        height: 75px;
        background-color: white;
        border-radius: 18px;
        display: flex;
        align-items: center;
        justify-content: center;
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

    .gym-dashboard-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: none;
        color: white;
        background-color: #0b518d;
        font-size: 18px;
        font-weight: bold;

    }
</style>