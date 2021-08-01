<?php require APPROOT . '/views/inc/header.php'; ?>


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
<div class="container">
    <div class="gym_container">
        <!-- Nav start -->
        <div class="gym_nav mt-3">
            <ul>
                <li class="gym_active">
                    <img src="<?php echo URLROOT; ?>/images/box.png" alt="">
                    <a href = "<?php echo URLROOT;?>/gym"><span>Home</span></a>
                </li>
                <li>
                    <img src="<?php echo URLROOT; ?>/images/calendar.png" alt="">
                    <a href = "<?php echo URLROOT; ?>/gym/timetable"><span>Manage Timetable</span></a>
                </li>
                <li>
                    <img src="<?php echo URLROOT; ?>/images/user.png" alt="">
                    <a href = "<?php echo URLROOT; ?>/gym/gymprofile"><span>Gym Information</span></a>
                </li>
            </ul>
        </div>
        <!-- Nav end -->