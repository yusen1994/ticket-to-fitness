<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<head>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
</head>

<body>
  <div class="container-fluid py-2 px-0" style="background-color:#F2F2F2;">

    <div class="row justify-content-center">
      <div class="col-sm-12 col-lg-6 px-0">
        <img class="img-responsive" src="<?php echo URLROOT; ?>/images/gym1.jpg" alt="">
        <div class="img-overlay">
          <a href="<?php echo URLROOT; ?>/accounts/login" class="landing-button btn btn-lg mx-1">Register/Login</a> 
        </div>
      </div>
    </div>


    <div class="container px-0">
      <div class="content py-5">
        <div class="row mx-auto">
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/cycle.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/swim.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/meditate.svg">
          </div>
        </div>
        <div class="row justify-content-center py-5">
          <h3 class="landing-text-one">One Membership</h3>
          <a href="#">
            <h3 class="landing-text-two">Multiple Gyms</h3>
          </a>
        </div>
        <div class="row mx-auto">
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/weightlift.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/fight.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/treadmill.svg">
          </div>
        </div>
      </div>
    </div>

    <div class="container px-0">
      <div class="content py-5" style="background-color:#0B518D">
        <div class="row mx-auto">
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/gymlogo-placeholder.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/gymlogo-placeholder.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/gymlogo-placeholder.svg">
          </div>
        </div>
        <div class="row justify-content-center py-5">
          <h3 class="landing-text-three">Access to Your</h3>
          <a href="#">
            <h3 class="landing-text-two">Favourite Gyms</h3>
          </a>
        </div>
        <div class="row mx-auto">
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/gymlogo-placeholder.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/gymlogo-placeholder.svg">
          </div>
          <div class="col landing-col-item">
            <img src="<?php echo URLROOT; ?>/images/gymlogo-placeholder.svg">
          </div>
        </div>
      </div>
    </div>

    <div class="container px-0">
      <div class="content py-5">
        <div class="row justify-content-center">
          <div class="col">
            <h3 style="text-align:center;">Testimonials</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>




<?php require APPROOT . '/views/inc/footer.php'; ?>

<style>

</style>