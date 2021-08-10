<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!--
<nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light fixed-top">
    <div class="container"> <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="ml-2 font-weight-bold"><img src="<?php echo URLROOT; ?>/images/t2f-logo.png" alt="logo" width="50" height="50" class="navbar-image"><a class="font-weight-bold">
                    <h4>Ticket To Fitness</h4>
                </a></apan>
        </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar4">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar4">
            <ul class="navbar-nav mr-auto pl-lg-4">
                <li class="nav-item px-lg-2"> <a class="nav-link" href="<?php echo URLROOT; ?>/Accounts/logout"><span class="d-inline-block d-lg-none icon-width"><i class="fas fa-spa"></i></span>Logout</a> </li>


            </ul>

        </div>
    </div>
</nav>

-->

<div class="container-fluid p-2">
    <!-- Nav start -->
        <div class="row" style="background-color:white;">

            <div class="col-3 text-center userdashboard-menu-active p-4" style="height:auto;">    
                <img src ="<?php echo URLROOT;?>/images/box.png" alt="">
                <a href = "<?php echo URLROOT ?>/User"  style="text-decoration:none; color:inherit;">  <span>Home</span> </a>
            </div>


            <div class="col-3 text-center p-4">
                <img src="<?php echo URLROOT;?>/images/map.png" alt="">
                <span>Map</span>
            </div>

            <div class="col-3 text-center p-4">

                <img src="<?php echo URLROOT;?>/images/calendar.png" alt="">
                <a href = "<?php echo URLROOT ?>/User/Timetable"  style="text-decoration:none; color:inherit;">    <span>Timetable</span> </a>
            </div>

            <div class="col-3 text-center p-4">
                <img src="<?php echo URLROOT;?>/images/user.png" alt="">
                <span>Social</span>

            </div>

    </div>