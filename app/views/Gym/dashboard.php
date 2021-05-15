<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>

<nav class="nav nav-pills nav-justified mt-4" id="mobileHide"  id="content-desktop">
    <a class="nav-item nav-link active" href="<?php echo URLROOT; ?>/gym">Dashboard</a>
    <a class="nav-item nav-link " href="<?php echo URLROOT; ?>/Gym/gymprofile">Profile</a>
    <a class="nav-item nav-link" href="#">Manage Timetable</a>
    <a class="nav-item nav-link " href="#">Manage Class</a>
    <a class="nav-item nav-link " href="#">Earnings</a>

</nav>
<?php

if (!empty($data['message'])) {
    echo "<div class='alert alert-success' role='alert'>";
    echo $data['message'];
    echo "</div>";
}
?>

<div class="container mt-2">
    <h2><?php echo $data['gym_name']; ?>
        <hr>
    </h2>
    <p> <b>Your <span style="color:orange;">monthly</span> stats are in! <b></p>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2 style="text-align:center;"><b> 18 </b></h2>
                <p style="text-align:center;"> members
                <p>
            </div>
            <div class="col">
                <h2 style="text-align:center;"><b> 2 </b></h2>
                <p style="text-align:center;"> classes
                <p>
            </div>
            <div class="col">
                <h2 style="text-align:center;"><b> 180 </b></h2>
                <p style="text-align:center;"> $/months
                <p>
            </div>
        </div>
    </div>
    <hr>

    <h4><b>Upcoming <span style="color:orange;">Activities</span></b></h4>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-block rounded-pill" style="background-color:orange;"><i class="fas fa-list"></i> View all</button>

            </div>

            <div class="col">
                <button type="button" class="btn btn-block rounded-pill " style="background-color:orange;"><i class="fas fa-plus"></i> Add activity</button>

            </div>


        </div>


    </div>


    <div class="card mt-4 " style="width: auto;">
        <div class="card-body rounded-pill">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>

    </div>

    <div class="card mt-4 " style="width: auto;">
        <div class="card-body rounded-pill">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>

    </div>

    <div class="card mt-4 " style="width: auto;">
        <div class="card-body rounded-pill">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>

    </div>

</div>

<nav class="navbar fixed-bottom navbar-expand-sm visible-xs-block " id="desktopHide" style="background-color:orange;">
    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">

            <i class="fas fa-home"></i>
        </span>
    </div>

    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">
            <i class="fas fa-map-marked-alt"></i>
        </span>
    </div>
    <div class="btn-group" role="group" aria-label="Third group" >
        <span style="font-size: 2em;">

            <i class="fas fa-calendar-alt "></i>

        </span>
    </div>


    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">
            <i class="fas fa-user"></i>
        </span>
    </div>

    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">
            <i class="fas fa-cogs"></i>
        </span>
    </div>

</nav>






<?php require APPROOT . '/views/inc/footer.php'; ?>