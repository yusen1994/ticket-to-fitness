<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<?php

if (!empty($data['message'])) {
    echo "<div class='alert alert-success' role='alert'>";
    echo $data['message'];
    echo "</div>";
}
?>

<div class="container-fluid">
    <div class="row justify-content-center p-0 m-0">
        <div class="col-sm-12 col-md-8 col-lg-4 m-0 p-0">
            <div class="row justify-content-center">
                <div class="col-10 text-center">
                    <h2 style="font-weight:bold">
                        <div class="gym_title"><?php echo $_SESSION['gym_name']; ?></div>
                    </h2>

                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-5 text-center pl-0">
                    <div class="content-background">
                        <h3><b>2</b></h3>
                        <p style="font-size: 12px;">total members</p>
                    </div>
                </div>
                <div class="col-5 text-center pr-0">
                    <div class="content-background">
                        <h3><b>3</b></h3>
                        <p style="font-size: 12px;">members/month</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-5 text-center pl-0">
                    <div class="content-background">
                        <h3><b>100</b></h3>
                        <p style="font-size: 12px;">$ this month</p>
                    </div>
                </div>
                <div class="col-5 text-center pr-0">
                    <div class="content-background">
                        <h3><b>8</b></h3>
                        <p style="font-size: 12px;">activities</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center p-0 m-0">
        <div class="col-sm-12 col-md-8 col-lg-6 col-xl-4">
            <div class="row justify-content-center mt-5">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/Gym/activities">
                        <button type="button" class="dashboard-add-btn">Add Activity</button>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/Gym/gymProfile">
                        <button type="button" class="dashboard-option-btn">Gym Information</button>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/gym/members">
                        <button type="button" class="dashboard-option-btn">Members</button>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-7">
                    <a style="text-decoration: none;" href="<?php echo URLROOT; ?>/gym/reports">
                        <button type="button" class="dashboard-option-btn">Reports</button>
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
                    <a href="<?php echo URLROOT; ?>/User" style="text-decoration: none;">
                        <button type="button" class="dashboard-highlight-btn">Switch to User Dashboard</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .user-name-background {
        width: 100%;
        height: 75px;
        background-color: white;
        border-bottom-left-radius: 18px;
        border-bottom-right-radius: 18px;
        padding-top: 10px;
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

    .dashboard-add-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: none;
        color: white;
        background-color: #0b518d;
        font-size: 18px;
        font-weight: bold;

    }

    .dashboard-highlight-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: none;
        color: white;
        background-color: #ef8830;
        font-size: 18px;
        font-weight: bold;

    }

    .dashboard-option-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: solid;
        border-color: #0b518d;
        border-width: 1px;
        color: black;
        background-color: white;
        font-size: 18px;
        font-weight: bold;

    }

    #container-userprofile {
        display: flex;
        justify-content: center;
        min-height: 80vh;
        align-items: center;
    }
</style>