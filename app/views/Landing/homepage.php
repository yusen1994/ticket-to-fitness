<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<div class="container-fluid mt-2">
  <!-- If screen => lg display this background image -->
  <div class="row background-image d-none d-lg-block d-xl-block vh-100">
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
                <!-- <button type="button" class="land-learnmore-btn mt-3">Learn More</button>-->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row background-image-sml justify-content-center d-block d-lg-none vh-100">
    <div class="col-12 align-self-center">
      <div class="row justify-content-center" style="padding-top: 150px; padding-left:15px; padding-right:15px;">
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
                <!-- <button type="button" class="land-learnmore-btn mt-3">Learn More</button> -->
              </a>
            </div>
          </div>
        </div>
      </div>
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
            $address_array = explode(" ", $activity->gym_address);
            $suburb = $address_array[count($address_array) - 3];
            if ($count > 4) {
              break;
            }
            echo '  
                             <div class="col-6 col-md-4 col-lg-3 mt-3 mt-lg-5">
                             
                                <a href="' . URLROOT . '/Activity/activitydetails/' . $activity->id . '/' . $activity->gym_id . '" class="card-link" style="text-decoration:none!important; color:black;">
                                 <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-12 text-center" style="padding-top:10px;">';
            if ($activity->photo != NULL) {
              echo '<img class="card-img-top" src="' . URLROOT . '/uploads/' . $activity->photo . '" alt="Card image cap" style="max-width: 190px;">';
            } else {
              echo '<img class="card-img-top" src="' . URLROOT . '/images/gym-default.png" alt="Card image cap" style="max-width: 190px;">';
            }
            echo '
                                </div>
                            </div>
            
                                <div class="row justify-content-center mt-2">
                                    <div class="col-12 text-center">
                                        <h5 class="p-0 m-0"><b>' . $activity->gym_name . '</b></h5>
                                    </div>
                                </div>
                                        <div class="row justify-content-lg-center mt-3">
                                            <div class="col-12 col-lg-6">
                                                <div class="d-flex align-items-center" style="flex-direction:row;">
                                                 <div class="d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                                   <img src="' . URLROOT . '/public/images/activity-icon-' . $activity->category . '.svg">
                                                    </div>
                                                    <p class="p-0 m-0" style="font-size=16px;text-transform:capitalize; color: #ef8830"><b>' . $activity->category . '</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-lg-center">
                                         <div class="col-12 col-lg-6 text-center">
                                            <div class="d-flex align-items-center" style="flex-direction:row;">
                                         <div class="d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35.927" height="35.927" viewBox="0 0 35.927 35.927">
                                                        <g id="Icons" transform="translate(5 2)">
                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                            <g id="Communication" transform="translate(0 0)">
                                                                <g id="_-Round-_-Communication-_-location_on" data-name="-Round-/-Communication-/-location_on">
                                                                <g id="Group_123" data-name="Group 123">
                                                                    <path id="Path" d="M0,0H35.927V35.927H0Z" fill="none" fill-rule="evenodd"/>
                                                                    <path id="_Icon-Color" data-name="🔹Icon-Color" d="M15.479,2A10.471,10.471,0,0,0,5,12.479c0,6.242,6.616,14.85,9.341,18.128a1.486,1.486,0,0,0,2.29,0c2.709-3.278,9.326-11.886,9.326-18.128A10.471,10.471,0,0,0,15.479,2Zm0,14.221a3.742,3.742,0,1,1,3.742-3.742A3.744,3.744,0,0,1,15.479,16.221Z" transform="translate(2.485 0.994)" fill="#0645ad" fill-rule="evenodd"/>
                                                                </g>
                                                                </g>
                                                            </g>
                                                            </g>
                                                        </g>
                                                        </svg>
                                                    </div>
                                                    <p class="p-0 m-0 ml-1" style="font-size=16px;text-transform:capitalize; color: #0645AD"><b>' . $suburb . '</b></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-lg-center mb-4">
                                         <div class="col-12 col-lg-6 text-center">
                                            <div class="d-flex align-items-center" style="flex-direction:row;">
                                              <div class="d-flex align-items-center justify-content-center" style="width:50px; height:50px;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="27.184" height="30.953" viewBox="0 0 27.184 30.953">
                                                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, 0.031, 28.17)">
                                                            <path id="Path_63" data-name="Path 63" d="M25.8,16.8H3a3,3,0,0,1-3-3V11.4a.6.6,0,0,1,.6-.6h.6A2.4,2.4,0,1,0,1.2,6H.6A.6.6,0,0,1,0,5.4V3A3,3,0,0,1,3,0H25.8a3,3,0,0,1,3,3V5.4a.6.6,0,0,1-.6.6h-.6a2.4,2.4,0,0,0,0,4.8h.6a.6.6,0,0,1,.6.6v2.4A3,3,0,0,1,25.8,16.8ZM1.2,12v1.8A1.8,1.8,0,0,0,3,15.6H25.8a1.8,1.8,0,0,0,1.8-1.8V12h0a3.6,3.6,0,0,1,0-7.2V3a1.8,1.8,0,0,0-1.8-1.8H3A1.8,1.8,0,0,0,1.2,3V4.8a3.6,3.6,0,1,1,0,7.2Z" transform="translate(0 7.196)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_64" data-name="Path 64" d="M.6,2.4A.6.6,0,0,1,0,1.8V.6A.6.6,0,1,1,1.2.6V1.8A.6.6,0,0,1,.6,2.4Z" transform="translate(9.602 7.196)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_65" data-name="Path 65" d="M.6,8.308a.6.6,0,0,1-.6-.6V5.678a.6.6,0,1,1,1.2,0V7.709A.6.6,0,0,1,.6,8.308Zm0-5.077a.6.6,0,0,1-.6-.6V.6A.6.6,0,0,1,1.2.6V2.631A.6.6,0,0,1,.6,3.231Z" transform="translate(9.602 11.443)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_66" data-name="Path 66" d="M.6,2.4A.6.6,0,0,1,0,1.8V.6A.6.6,0,1,1,1.2.6V1.8A.6.6,0,0,1,.6,2.4Z" transform="translate(9.602 21.598)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                            <path id="Path_67" data-name="Path 67" d="M.6,8.4A.6.6,0,0,1,.39,7.234L19.473.109a1.833,1.833,0,0,1,2.334,1.108L23.972,7.6a.6.6,0,0,1-1.137.385L20.671,1.6a.614.614,0,0,0-.779-.37L.809,8.357A.579.579,0,0,1,.6,8.4Z" transform="translate(2.4 0)" fill="#2bb730" stroke="#2bb730" stroke-width="0.5"/>
                                                        </g>
                                                        </svg>
                                                        </div>
                                                    <p class="p-0 m-0 ml-1" style="font-size=16px;text-transform:capitalize; color: #2BB730"><b>' . $activity->credit . '</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                       
                    </a>
                </div>
                ';
            $count++;
          }
        } else {
          echo "Nothing to show, please check back later!";
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
          <a href="<?php echo URLROOT; ?>/Activity/filterby/category/weights">
            <img src=" <?php echo URLROOT; ?>/public/images/land-weight.svg">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <a href="<?php echo URLROOT; ?>/Activity/filterby/category/swimming">
            <img src="<?php echo URLROOT; ?>/public/images/land-swim.svg">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <a href="<?php echo URLROOT; ?>/Activity/filterby/category/cardio">
            <img src="<?php echo URLROOT; ?>/public/images/land-cardio.svg">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <a href="<?php echo URLROOT; ?>/Activity/filterby/category/yoga">
            <img src="<?php echo URLROOT; ?>/public/images/land-yoga.svg">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <a href="<?php echo URLROOT; ?>/Activity/filterby/category/fight">
            <img src="<?php echo URLROOT; ?>/public/images/land-fight.svg">
          </a>
        </div>
        <div class="col-6 col-md-4 col-lg-2 pb-2">
          <a href="<?php echo URLROOT; ?>/Activity/filterby/category/cycling">
            <img src="<?php echo URLROOT; ?>/public/images/land-cycle.svg">
          </a>
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



  <div class="row mt-5">
    <div class="col-12 p-0">
      <?php require APPROOT . '/views/inc/footer.php'; ?>
    </div>
  </div>

</div>



<style>
  .container-fluid {
    position: relative;
  }

  .background-image {
    background-image: url('<?php echo URLROOT; ?>/images/gym-workout.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
  }

  .background-image-sml {
    background-image: url('<?php echo URLROOT; ?>/images/landing-sml.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
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

  .card-body {
    border-width: 1px;
    border-radius: 18px;
    border-color: #DDDDDD;
    border-style: solid;
  }
</style>