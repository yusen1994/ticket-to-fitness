<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->

<div class="carousel slide carousel-fade" data-ride="carousel">

  <div id="carousel-gym-pics" class="carousel-slide">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://localhost/ticket-to-fitness/public/images/gym1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://localhost/ticket-to-fitness/public/images/gym2.jpg" height="250" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://localhost/ticket-to-fitness/public/images/gym3.jpg" alt="Third slide">
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






<?php require APPROOT . '/views/inc/footer.php'; ?>

<style>
  .carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    transform: none;

  }

  .carousel-item {
    height: 250px;
    width: 100%;
    object-fit: contain;
  }
  
</style>