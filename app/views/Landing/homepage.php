<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<div class="container-fluid mt-2">

  <!-- If screen => lg display this background image -->
  <div class="row  background-image d-none d-lg-block d-xl-block vh-100">
    <div class="col-12 align-self-center">

      <div class="row justify-content-center" style="padding-top: 250px;">
        <div class="col-lg-6 col-xl-4 col text-center title-card-overlay pt-5 pb-5 ">
          <h2>The only place to get all your</h2>
          <h1><b><span class="text-orange">Fit</span>ness <span class="text-orange">Ch</span>oice</b></h1>
          <div class="row justify-content-center">
            <div class="col-12 justify-content-center">
              <a href="<?php echo URLROOT; ?>/Accounts/login">
                <button type="button" class="land-login-btn mt-3">Sign up now</button>
              </a>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 justify-content-center">
              <a href="#">
                <button type="button" class="land-learnmore-btn mt-3">Learn More</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- If screen =< lg display normal view -->
  <div class="row justify-content-center d-block d-lg-none d-xl-none">
    <div class=" col-2 text-center align-items-center d-none d-lg-block d-xl-block pt-5 pb-5">
      <img src="<?php echo URLROOT; ?>/images/t2f-logo.png" height="210px" width="190px" />
    </div>
    <div class="col-sm-12 col-lg-8 text-center align-items-center title-card pt-5 pb-5">
      <h2>The only place to get all your</h2>
      <h1><b><span class="text-orange">Fit</span>ness <span class="text-orange">Ch</span>oice</b></h1>
      <div class="row justify-content-center">
        <div class="col-12 justify-content-center">
          <a href="<?php echo URLROOT; ?>/Accounts/login">
            <button type="button" class="land-login-btn mt-3">Sign up now</button>
          </a>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 justify-content-center">
          <a href="#">
            <button type="button" class="land-learnmore-btn mt-3">Learn More</button>
          </a>
        </div>
      </div>

    </div>
    <div class="col-2 text-center align-items-center d-none d-lg-block d-xl-block pt-5 pb-5">
      <img class="img-flip" src="<?php echo URLROOT; ?>/images/t2f-logo.png" height="210px" width="190px" />
    </div>
  </div>


  <div class="row justify-content-center mt-5">
    <div class="col-sm-12 col-lg-9 text-center align-items-center background-card p-lg-5 pb-5 pt-3">

      <h4><span class="text-orange">Browse</span> Activities</h4>

      <div class="row justify-content-center mt-3">
        <?php
        $count = 1;

        if ($data['gym_activity'] != NULL) {

          foreach ($data['gym_activity'] as $activity) {
            if ($count > 4) {
              break;
            }
            echo '
                <div class = "col-6 col-md-4 col-lg-3">
                    <a href="' . URLROOT . '/Activity/activitydetails/' . $activity->id . '/' . $activity->gym_id . '" class="card-link" style="text-decoration:none!important; color:black;">
                        <div class="card pt-2" style="width: auto; border-radius:18px; min-height:420px;">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img class="card-img-top" src="' . URLROOT . '/images/golds_gym.png" alt="Card image cap" style="max-width: 200px;">
                                </div>
                            </div>
                            <div class="card-body">
                            <h6 class="card-title">' . $activity->activity_name . '</h6>
                            <p class="card-subtitle mb-2 text-muted">Category: ' . $activity->category . '</p>
                            <img src
                            <hr>
                            <p><b>Credit: ' . $activity->credit . '</b></p>
                            <a href="' . URLROOT . '/Activity/activitydetails/' . $activity->id . '/' . $activity->gym_id . '">More Details</a>
                            </div>
                        </div>
                    </a>
                </div>
                ';

            $count++;
          }
        } else {
          echo "No Gym activity please check back later!";
        }

        ?>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-3 mt-lg-5">
    <div class=" col-sm-12 col-lg-8 text-center align-items-center">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-4 text-center">
          <a href="<?php echo URLROOT; ?>/Activity">
            <button type=" button" class="land-learnmore-btn">View All</button>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center mt-5 mt-lg-5">
    <div class="col-sm-12 col-lg-8 text-center align-items-center background-card pt-3 pt-lg-5 pb-5">

      <h4><span class="text-orange">Categories</span> for Everyone</h4>

      <div class="row justify-content-center mt-5">
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <img src=" <?php echo URLROOT; ?>/public/images/land-weight.svg">
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <img src="<?php echo URLROOT; ?>/public/images/land-swim.svg">
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <img src="<?php echo URLROOT; ?>/public/images/land-cardio.svg">
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <img src="<?php echo URLROOT; ?>/public/images/land-yoga.svg">
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <img src="<?php echo URLROOT; ?>/public/images/land-fight.svg">
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <img src="<?php echo URLROOT; ?>/public/images/land-cycle.svg">
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-3 mt-lg-5">
    <div class=" col-sm-12 col-lg-8 text-center align-items-center">
      <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-4 text-center">
          <a href="<?php echo URLROOT; ?>/Activity">
            <button type=" button" class="land-learnmore-btn">View All</button>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="row justify-content-center">
    <div class="col-12">
      <div class="card text-center mt-3 mt-lg-5">
        <div class="card-header">
          <h2><b>Promotion</b></h2>
        </div>
      </div>
      <div class="row justify-content-center mt-3">
        <div class="col-sm-12 col-lg-4 text-center">
          <h5 class="card-title">Get 10% bonus credit when you purchase 100 credits</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="<?php echo URLROOT; ?>/Accounts/login">
            <button type="button" class="land-login-btn m-2">Sign up now</button>
          </a>
        </div>
      </div>

    </div>
  </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
  .background-image {
    background-image: url('<?php echo URLROOT; ?>/images/gym-workout.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
  }

  .title-card {
    width: 100%;
    background-color: white;
    border-bottom-left-radius: 60px;
    border-bottom-right-radius: 60px;
  }

  .title-card-overlay {
    width: 100%;
    background-color: rgba(255, 255, 255, .8);
    border-radius: 60px;
  }

  .background-card {
    width: 100%;
    background-color: white;
    border-radius: 60px;
  }

  .img-flip {
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
  }

  .land-login-btn {
    background-color: #ef8830;
    font-family: "Poppins";
    font-weight: bold;
    border-radius: 18px;
    border: none;
    height: 45px;
    width: 100%;
    max-width: 345px;
  }

  .land-learnmore-btn {
    background-color: white;
    font-family: "Poppins";
    font-weight: bold;
    border-radius: 18px;
    border-color: #ef8830;
    border-width: 1px;
    height: 45px;
    width: 100%;
    max-width: 345px;
  }

  .text-orange {
    color: #ef8830;
  }
</style>