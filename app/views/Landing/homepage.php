<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<head>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
</head>

<body>
  <div class="container-fluid" style="background-color:#F2F2F2;">

    <div class="row justify-content-center">
      <div class="landing-image col-sm-12 col-lg-6 px-0">
        <img class="img-responsive" src="<?php echo URLROOT; ?>/images/gym1.jpg" alt="">
        <div class="text-overlay-1">
          <h3 class="land-text-1">Join the fitness</h3>
        </div>
        <div class="text-overlay-2">
          <h3 class="land-text-2">revolution</h3>
        </div>
      </div>
    </div>

    <div class="container" style="padding-top: 20px;">
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6">
          <a href="<?php echo URLROOT; ?>/Accounts/login">
            <button type="button" class="land-login-btn float-left">Sign up now</button>
          </a>
        </div>
      </div>
      <div class="row justify-content-center" style="padding-top: 20px;">
        <div class="col-sm-1 col-lg-6">
          <button href="#" class="land-learnmore-btn float-right">Learn more</button>
        </div>
      </div>
    </div>

    <div class="container" style="padding-top: 20px; height: 600px;">
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 text-left">
          <h3 class="land-text-3"><span class="land-text-4">Activities</span> near you</h3>
        </div>
      </div>
      <div class="row justify-content-center" style="padding-top: 20px;">
        <div class="col-sm-1 col-lg-6 text-center">
          <a href="#">
            <button type="button" class="land-seeall-btn">See all<span class="btn-arrow-1"><svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="12.536" height="10.751" viewBox="0 0 12.536 10.751">
                  <g id="Group_87" data-name="Group 87" transform="translate(0 0)">
                    <path id="Path_103" data-name="Path 103" d="M.753,36.337a.9.9,0,0,1,.155-.011H9.752l-.193-.09a1.794,1.794,0,0,1-.507-.359L6.573,33.4a.928.928,0,0,1-.13-1.188.9.9,0,0,1,1.345-.117l4.485,4.485a.9.9,0,0,1,0,1.268h0L7.788,42.331a.9.9,0,0,1-1.345-.09.928.928,0,0,1,.13-1.188l2.476-2.485a1.794,1.794,0,0,1,.448-.327l.269-.121H.958a.928.928,0,0,1-.946-.753A.9.9,0,0,1,.753,36.337Z" transform="translate(0 -31.842)" />
                  </g>
                </svg>
              </span></button>
          </a>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="padding-top: 20px;">
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 text-right">
          <h3 class="land-text-5"><span class="land-text-4">Categories</span> for everyone</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 category-col">
          <a href="#" class="btn category-btn-left">
            <span class="category-img-left"><img src="<?php echo URLROOT; ?>/images/weightlift.svg"></span>
            Weightlifting
            <span class="btn-arrow-left"><svg id="Group_108" data-name="Group 108" xmlns="http://www.w3.org/2000/svg" width="23.917" height="20.511" viewBox="0 0 23.917 20.511">
                <path id="Path_103" data-name="Path 103" d="M1.437,40.418a1.709,1.709,0,0,1,.3-.022H18.606l-.368-.171a3.423,3.423,0,0,1-.967-.684L12.54,34.809a1.771,1.771,0,0,1-.248-2.267,1.711,1.711,0,0,1,2.567-.222l8.556,8.556a1.711,1.711,0,0,1,0,2.42h0l-8.556,8.556a1.711,1.711,0,0,1-2.567-.171,1.771,1.771,0,0,1,.248-2.267l4.723-4.74a3.423,3.423,0,0,1,.856-.625l.513-.231H1.827A1.771,1.771,0,0,1,.022,42.382,1.711,1.711,0,0,1,1.437,40.418Z" transform="translate(0 -31.842)" />
              </svg>

            </span>
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 category-col">
          <a href="#" class="btn category-btn-right float-right">
            <span class="btn-arrow-right"><svg id="Group_108" data-name="Group 108" xmlns="http://www.w3.org/2000/svg" width="23.917" height="20.511" viewBox="0 0 23.917 20.511">
                <path id="Path_103" data-name="Path 103" d="M1.437,40.418a1.709,1.709,0,0,1,.3-.022H18.606l-.368-.171a3.423,3.423,0,0,1-.967-.684L12.54,34.809a1.771,1.771,0,0,1-.248-2.267,1.711,1.711,0,0,1,2.567-.222l8.556,8.556a1.711,1.711,0,0,1,0,2.42h0l-8.556,8.556a1.711,1.711,0,0,1-2.567-.171,1.771,1.771,0,0,1,.248-2.267l4.723-4.74a3.423,3.423,0,0,1,.856-.625l.513-.231H1.827A1.771,1.771,0,0,1,.022,42.382,1.711,1.711,0,0,1,1.437,40.418Z" transform="translate(0 -31.842)" />
              </svg>
              Yoga
            </span>
            <span class="category-img-right"><img src="<?php echo URLROOT; ?>/images/meditate.svg"></span>
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 category-col">
          <a href="#" class="btn category-btn-left">
            <span class="category-img-left"><img src="<?php echo URLROOT; ?>/images/treadmill.svg"></span>
            Cardio
            <span class="btn-arrow-left"><svg id="Group_108" data-name="Group 108" xmlns="http://www.w3.org/2000/svg" width="23.917" height="20.511" viewBox="0 0 23.917 20.511">
                <path id="Path_103" data-name="Path 103" d="M1.437,40.418a1.709,1.709,0,0,1,.3-.022H18.606l-.368-.171a3.423,3.423,0,0,1-.967-.684L12.54,34.809a1.771,1.771,0,0,1-.248-2.267,1.711,1.711,0,0,1,2.567-.222l8.556,8.556a1.711,1.711,0,0,1,0,2.42h0l-8.556,8.556a1.711,1.711,0,0,1-2.567-.171,1.771,1.771,0,0,1,.248-2.267l4.723-4.74a3.423,3.423,0,0,1,.856-.625l.513-.231H1.827A1.771,1.771,0,0,1,.022,42.382,1.711,1.711,0,0,1,1.437,40.418Z" transform="translate(0 -31.842)" />
              </svg>
            </span>
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 category-col">
          <a href="#" class="btn category-btn-right float-right">
            <span class="btn-arrow-right"><svg id="Group_108" data-name="Group 108" xmlns="http://www.w3.org/2000/svg" width="23.917" height="20.511" viewBox="0 0 23.917 20.511">
                <path id="Path_103" data-name="Path 103" d="M1.437,40.418a1.709,1.709,0,0,1,.3-.022H18.606l-.368-.171a3.423,3.423,0,0,1-.967-.684L12.54,34.809a1.771,1.771,0,0,1-.248-2.267,1.711,1.711,0,0,1,2.567-.222l8.556,8.556a1.711,1.711,0,0,1,0,2.42h0l-8.556,8.556a1.711,1.711,0,0,1-2.567-.171,1.771,1.771,0,0,1,.248-2.267l4.723-4.74a3.423,3.423,0,0,1,.856-.625l.513-.231H1.827A1.771,1.771,0,0,1,.022,42.382,1.711,1.711,0,0,1,1.437,40.418Z" transform="translate(0 -31.842)" />
              </svg>
              Cycling
              <span class="category-img-right"><img src="<?php echo URLROOT; ?>/images/cycle.svg"></span>
            </span>
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 category-col">
          <a href="#" class="btn category-btn-left">
            <span class="category-img-left"><img src="<?php echo URLROOT; ?>/images/swim.svg"></span>
            Swimming
            <span class="btn-arrow-left"><svg id="Group_108" data-name="Group 108" xmlns="http://www.w3.org/2000/svg" width="23.917" height="20.511" viewBox="0 0 23.917 20.511">
                <path id="Path_103" data-name="Path 103" d="M1.437,40.418a1.709,1.709,0,0,1,.3-.022H18.606l-.368-.171a3.423,3.423,0,0,1-.967-.684L12.54,34.809a1.771,1.771,0,0,1-.248-2.267,1.711,1.711,0,0,1,2.567-.222l8.556,8.556a1.711,1.711,0,0,1,0,2.42h0l-8.556,8.556a1.711,1.711,0,0,1-2.567-.171,1.771,1.771,0,0,1,.248-2.267l4.723-4.74a3.423,3.423,0,0,1,.856-.625l.513-.231H1.827A1.771,1.771,0,0,1,.022,42.382,1.711,1.711,0,0,1,1.437,40.418Z" transform="translate(0 -31.842)" />
              </svg>
            </span>
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-6 category-col">
          <a href="#" class="btn category-btn-right float-right">
            <span class="btn-arrow-right"><svg id="Group_108" data-name="Group 108" xmlns="http://www.w3.org/2000/svg" width="23.917" height="20.511" viewBox="0 0 23.917 20.511">
                <path id="Path_103" data-name="Path 103" d="M1.437,40.418a1.709,1.709,0,0,1,.3-.022H18.606l-.368-.171a3.423,3.423,0,0,1-.967-.684L12.54,34.809a1.771,1.771,0,0,1-.248-2.267,1.711,1.711,0,0,1,2.567-.222l8.556,8.556a1.711,1.711,0,0,1,0,2.42h0l-8.556,8.556a1.711,1.711,0,0,1-2.567-.171,1.771,1.771,0,0,1,.248-2.267l4.723-4.74a3.423,3.423,0,0,1,.856-.625l.513-.231H1.827A1.771,1.771,0,0,1,.022,42.382,1.711,1.711,0,0,1,1.437,40.418Z" transform="translate(0 -31.842)" />
              </svg>

            </span>
            Martial Arts
            <span class="category-img-right"><img src="<?php echo URLROOT; ?>/images/fight.svg"></span>
          </a>
        </div>
      </div>
      <div class="row justify-content-center" style="padding-top: 20px;">
        <div class="col-sm-1 col-lg-6 text-center">
          <a href="#">
            <button type="button" class="land-seeall-btn">See all<span class="btn-arrow-1"><svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="12.536" height="10.751" viewBox="0 0 12.536 10.751">
                  <g id="Group_87" data-name="Group 87" transform="translate(0 0)">
                    <path id="Path_103" data-name="Path 103" d="M.753,36.337a.9.9,0,0,1,.155-.011H9.752l-.193-.09a1.794,1.794,0,0,1-.507-.359L6.573,33.4a.928.928,0,0,1-.13-1.188.9.9,0,0,1,1.345-.117l4.485,4.485a.9.9,0,0,1,0,1.268h0L7.788,42.331a.9.9,0,0,1-1.345-.09.928.928,0,0,1,.13-1.188l2.476-2.485a1.794,1.794,0,0,1,.448-.327l.269-.121H.958a.928.928,0,0,1-.946-.753A.9.9,0,0,1,.753,36.337Z" transform="translate(0 -31.842)" />
                  </g>
                </svg>
              </span></button>
          </a>
        </div>
      </div>
    </div>

    <div class="row justify-content-center" style="padding-top: 20px;">
      <div class="landing-image col-sm-12 col-lg-6 px-0">
        <img class="img-responsive" src="<?php echo URLROOT; ?>/images/gym2.jpg" alt="">
        <div class="text-overlay-3">
          <h3 class="land-text-1">Start</h3>
        </div>
        <div class="text-overlay-4">
          <h3 class="land-text-2">Today</h3>
        </div>
      </div>
    </div>
  </div>

</body>


<?php require APPROOT . '/views/inc/footer.php'; ?>

<style>
  .landing-image {
    position: relative;
    text-align: center;
  }

  .img-responsive {
    width: 100%;
  }

  .text-overlay-1 {
    position: absolute;
    bottom: 35px;
    right: 15px;

  }

  .text-overlay-2 {
    position: absolute;
    bottom: 0px;
    right: 15px;
  }

  .text-overlay-3 {
    position: absolute;
    top: 10px;
    left: 15px;

  }

  .text-overlay-4 {
    position: absolute;
    top: 10px;
    left: 100px;
  }

  .land-text-1 {
    font-size: 30px;
    font-weight: bold;
    color: white;
    text-shadow: 0.5px 0 0 #000, 0 -0.5px 0 #000, 0 0.5px 0 #000, -0.5px 0 0 #000;
  }

  .land-text-2 {
    font-size: 30px;
    font-weight: bold;
    color: #EF8830;
    text-shadow: 0.5px 0 0 #000, 0 -0.5px 0 #000, 0 0.5px 0 #000, -0.5px 0 0 #000;
  }

  .land-text-3 {
    font-size: 25px;
    font-weight: bold;

  }

  .land-text-4 {
    font-size: 25px;
    font-weight: bold;
    color: #EF8830;
  }

  .land-text-5 {
    font-size: 25px;
    font-weight: bold;
    text-align: right;

  }

  .land-login-btn {
    background-color: #EF8830;
    font-family: 'Poppins';
    font-weight: bold;
    border-radius: 12px;
    border: none;
    width: 75%;
    height: 45px;
  }

  .land-learnmore-btn {
    background-color: white;
    font-family: 'Poppins';
    font-weight: bold;
    border-radius: 12px;
    border-color: #EF8830;
    border-width: thin;
    width: 75%;
    height: 45px;
  }

  .land-seeall-btn {
    background-color: white;
    font-family: 'Poppins';
    font-weight: bold;
    border-radius: 12px;
    border-color: #EF8830;
    border-width: thin;
    width: 75%;
    height: 45px;
  }

  .btn-arrow-1 {
    padding-left: 5px;

  }

  .category-btn-left {
    width: 75%;
    height: 75px;
    align-items: left;
    padding: 0px;
    margin: 0px;
    border-radius: 50px;
    border-color: #3F3F3F;
    border-width: 2px;
    text-align: left;
    position: relative;
  }

  .category-col {
    padding: 0px;
    margin: 0px;
    padding-top: 20px;
  }

  .category-img-left {
    margin-left: -1px;
    margin-right: 5px;
  }

  .category-btn-right {
    width: 75%;
    height: 74px;
    align-items: right;
    padding: 0px;
    margin: 0px;
    border-radius: 50px;
    border-color: #3F3F3F;
    border-width: 2px;
    text-align: right;
  }

  .category-img-right {
    position: relative;
    margin-right: -2px;
  }

  .btn-arrow-left {
    position: absolute;
    top: 35%;
    right: 10%;

  }

  .btn-arrow-right {}
</style>