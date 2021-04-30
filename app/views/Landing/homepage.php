<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<!--The html below this line is for display purpose only-->

<div class="py-5 text-center text-white" id="navbar_background" >
<div class="container py-5">
<div class="row py-5">
<div class="mx-auto col-lg-10">
  <h1 class="display-4 mb-4 ">Welcome To Ticket To Fitness </h1>
  <p class="lead mb-5">We will be back soon! </p> <a href="<?php echo URLROOT; ?>/accounts/login" class="btn btn-lg btn-outline-light mx-1">Login/Register</a> 
</div>
</div>
</div>
</div>



<div class = "container-fluid">
<div class="carousel slide carousel-fade" data-ride="carousel">

  <div id="carousel-gym-pics" class="carousel-slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo URLROOT;?>/images/gym1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo URLROOT;?>/images/gym2.jpg" height="250" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo URLROOT;?>/images/gym3.jpg" alt="Third slide">
      </div>
    </div>
  </div>
</div>

<div class="card-one">
  <div class="card-hearder-signup">
    <h4>Sign Up Today!</h4>
  </div>
  <div class="card-body-signup">
    <p>Sign up today and get so many gyms blah blah blah more text to come</p>
  </div>
</div>

</div>




<?php require APPROOT . '/views/inc/footer.php'; ?>

