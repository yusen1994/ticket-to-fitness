<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="container-fluid" style="padding-top:20px; margin-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-4">
            <div class="heading-content">
                <h3><b><span><a href="<?php echo URLROOT; ?>/User"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Buy Credits</span></b></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center mt-2">
        <div class="col-sm-12 col-lg-4">

            <!-- ####################### -->




            <!-- ####################### -->

            <?php
            if (!empty($data['error'])) {
                echo '<div class="alert alert-danger" role="alert">
        ' . $data['error'] . '
    </div>';
            } else {

                if (!empty($data['credits'])) {

                    foreach ($data['credits'] as $single) {
                        echo '
                                    <div class="row justify-content-center" style="background-color: white; padding-top:15px;padding-bottom:15px;margin-bottom:20px;">
                <div class="col-12">
                    <a style="text-decoration: none; width:100%;" href="' . URLROOT . '/user/checkout/' . $single->cost . '/' . $single->total_credit . '" class="credit-item-link">
                        <div class="row mb-2">
                            <div class="col-8 align-self-center">
                                <b style="font-size:20px">' . $single->name . '</b>
                            </div>
                            <div class="col-4 text-center align-self-center">
                                <b style="font-size:24px">$10</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-left align-self-center pr-0">
                                <div class="content-row">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42.011" height="47.97" viewBox="0 0 42.011 47.97">
                                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.396, 44.012)">
                                            <path id="Path_63" data-name="Path 63" d="M40.713,26.511H4.734A4.741,4.741,0,0,1,0,21.777V17.99a.947.947,0,0,1,.947-.947h.947a3.787,3.787,0,1,0,0-7.575H.947A.947.947,0,0,1,0,8.521V4.734A4.741,4.741,0,0,1,4.734,0H40.713a4.741,4.741,0,0,1,4.734,4.734V8.521a.947.947,0,0,1-.947.947h-.947a3.787,3.787,0,0,0,0,7.575H44.5a.947.947,0,0,1,.947.947v3.787A4.738,4.738,0,0,1,40.713,26.511ZM1.894,18.936v2.84a2.844,2.844,0,0,0,2.84,2.84H40.713a2.844,2.844,0,0,0,2.84-2.84v-2.84h0a5.681,5.681,0,0,1,0-11.362V4.734a2.844,2.844,0,0,0-2.84-2.84H4.734a2.844,2.844,0,0,0-2.84,2.84v2.84a5.681,5.681,0,1,1,0,11.362Z" transform="translate(0 11.353)" />
                                            <path id="Path_64" data-name="Path 64" d="M.947,3.787A.947.947,0,0,1,0,2.84V.947a.947.947,0,1,1,1.894,0V2.84A.947.947,0,0,1,.947,3.787Z" transform="translate(15.149 11.353)" />
                                            <path id="Path_65" data-name="Path 65" d="M.947,13.108A.947.947,0,0,1,0,12.161v-3.2a.947.947,0,1,1,1.894,0v3.2A.946.946,0,0,1,.947,13.108Zm0-8.01A.947.947,0,0,1,0,4.151V.947a.947.947,0,0,1,1.894,0v3.2A.947.947,0,0,1,.947,5.1Z" transform="translate(15.149 18.055)" />
                                            <path id="Path_66" data-name="Path 66" d="M.947,3.787A.947.947,0,0,1,0,2.84V.947a.947.947,0,1,1,1.894,0V2.84A.947.947,0,0,1,.947,3.787Z" transform="translate(15.149 34.077)" />
                                            <path id="Path_67" data-name="Path 67" d="M.947,13.247a.947.947,0,0,1-.331-1.833L30.724.171a2.891,2.891,0,0,1,3.683,1.748L37.822,12a.947.947,0,0,1-1.793.608L32.614,2.527a.968.968,0,0,0-1.229-.583L1.276,13.186a.913.913,0,0,1-.329.061Z" transform="translate(3.787 0)" />
                                        </g>
                                    </svg>

                                    <span style="margin-left: 10px;margin-top: 5px;">
                                        <h4><b>' . $single->total_credit . '</b></h4>
                                    </span>
                                </div>

                            </div>
                            <div class="col-5 text-center align-self-center pl-0 pr-0">
                                <div class="content-row-bonus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.148" height="19.58" viewBox="0 0 17.148 19.58">
                                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.162, 17.964)">
                                            <path id="Path_63" data-name="Path 63" d="M16.618,10.821H1.932A1.935,1.935,0,0,1,0,8.889V7.343a.387.387,0,0,1,.386-.386H.773a1.546,1.546,0,1,0,0-3.092H.386A.387.387,0,0,1,0,3.478V1.932A1.935,1.935,0,0,1,1.932,0H16.618A1.935,1.935,0,0,1,18.55,1.932V3.478a.387.387,0,0,1-.386.386h-.386a1.546,1.546,0,0,0,0,3.092h.386a.387.387,0,0,1,.386.386V8.889A1.934,1.934,0,0,1,16.618,10.821ZM.773,7.729V8.889a1.161,1.161,0,0,0,1.159,1.159H16.618a1.161,1.161,0,0,0,1.159-1.159V7.729h0a2.319,2.319,0,0,1,0-4.638V1.932A1.161,1.161,0,0,0,16.618.773H1.932A1.161,1.161,0,0,0,.773,1.932V3.092a2.319,2.319,0,1,1,0,4.638Z" transform="translate(0 4.634)" fill="#ef8830" />
                                            <path id="Path_64" data-name="Path 64" d="M.386,1.546A.387.387,0,0,1,0,1.159V.386a.386.386,0,1,1,.773,0v.773A.387.387,0,0,1,.386,1.546Z" transform="translate(6.183 4.634)" fill="#ef8830" />
                                            <path id="Path_65" data-name="Path 65" d="M.386,5.35A.387.387,0,0,1,0,4.964V3.657a.386.386,0,1,1,.773,0V4.965A.386.386,0,0,1,.386,5.35Zm0-3.27A.387.387,0,0,1,0,1.694V.386a.386.386,0,0,1,.773,0V1.694A.387.387,0,0,1,.386,2.081Z" transform="translate(6.183 7.369)" fill="#ef8830" />
                                            <path id="Path_66" data-name="Path 66" d="M.386,1.546A.387.387,0,0,1,0,1.159V.386a.386.386,0,1,1,.773,0v.773A.387.387,0,0,1,.386,1.546Z" transform="translate(6.183 13.909)" fill="#ef8830" />
                                            <path id="Path_67" data-name="Path 67" d="M.386,5.407a.386.386,0,0,1-.135-.748L12.541.07a1.18,1.18,0,0,1,1.5.713L15.438,4.9a.386.386,0,0,1-.732.248L13.312,1.031a.4.4,0,0,0-.5-.238L.521,5.382a.373.373,0,0,1-.134.025Z" transform="translate(1.546 0)" fill="#ef8830" />
                                        </g>
                                    </svg>

                                    <p style="padding:0px;margin:0px; color:#EF8830">+10 Bonus!</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.148" height="19.58" viewBox="0 0 17.148 19.58">
                                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.162, 17.964)">
                                            <path id="Path_63" data-name="Path 63" d="M16.618,10.821H1.932A1.935,1.935,0,0,1,0,8.889V7.343a.387.387,0,0,1,.386-.386H.773a1.546,1.546,0,1,0,0-3.092H.386A.387.387,0,0,1,0,3.478V1.932A1.935,1.935,0,0,1,1.932,0H16.618A1.935,1.935,0,0,1,18.55,1.932V3.478a.387.387,0,0,1-.386.386h-.386a1.546,1.546,0,0,0,0,3.092h.386a.387.387,0,0,1,.386.386V8.889A1.934,1.934,0,0,1,16.618,10.821ZM.773,7.729V8.889a1.161,1.161,0,0,0,1.159,1.159H16.618a1.161,1.161,0,0,0,1.159-1.159V7.729h0a2.319,2.319,0,0,1,0-4.638V1.932A1.161,1.161,0,0,0,16.618.773H1.932A1.161,1.161,0,0,0,.773,1.932V3.092a2.319,2.319,0,1,1,0,4.638Z" transform="translate(0 4.634)" fill="#ef8830" />
                                            <path id="Path_64" data-name="Path 64" d="M.386,1.546A.387.387,0,0,1,0,1.159V.386a.386.386,0,1,1,.773,0v.773A.387.387,0,0,1,.386,1.546Z" transform="translate(6.183 4.634)" fill="#ef8830" />
                                            <path id="Path_65" data-name="Path 65" d="M.386,5.35A.387.387,0,0,1,0,4.964V3.657a.386.386,0,1,1,.773,0V4.965A.386.386,0,0,1,.386,5.35Zm0-3.27A.387.387,0,0,1,0,1.694V.386a.386.386,0,0,1,.773,0V1.694A.387.387,0,0,1,.386,2.081Z" transform="translate(6.183 7.369)" fill="#ef8830" />
                                            <path id="Path_66" data-name="Path 66" d="M.386,1.546A.387.387,0,0,1,0,1.159V.386a.386.386,0,1,1,.773,0v.773A.387.387,0,0,1,.386,1.546Z" transform="translate(6.183 13.909)" fill="#ef8830" />
                                            <path id="Path_67" data-name="Path 67" d="M.386,5.407a.386.386,0,0,1-.135-.748L12.541.07a1.18,1.18,0,0,1,1.5.713L15.438,4.9a.386.386,0,0,1-.732.248L13.312,1.031a.4.4,0,0,0-.5-.238L.521,5.382a.373.373,0,0,1-.134.025Z" transform="translate(1.546 0)" fill="#ef8830" />
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <div class="col-4 text-center">
                                <span style="color: #2BB730">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37.519" height="37.461" viewBox="0 0 37.519 37.461">
                                        <g id="_16744398191571183082" data-name="16744398191571183082" transform="translate(-2 -1.5)">
                                            <path id="Path_133" data-name="Path 133" d="M14.006,24.344,7.87,5A2.723,2.723,0,0,0,5.2,3H2" fill="none" stroke="#2BB730" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                            <path id="Path_134" data-name="Path 134" d="M32.547,28.679H9.068A2.676,2.676,0,0,1,6.4,26.01h0a2.867,2.867,0,0,1,2.668-2.668l27.481-4V6H12.537" transform="translate(1.47 1.002)" fill="none" stroke="#2BB730" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                            <circle id="Ellipse_20" data-name="Ellipse 20" cx="1.566" cy="1.566" r="1.566" transform="translate(12.965 34.328)" fill="none" stroke="#2BB730" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                            <circle id="Ellipse_21" data-name="Ellipse 21" cx="1.566" cy="1.566" r="1.566" transform="translate(30.195 34.328)" fill="none" stroke="#2BB730" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                        </g>
                                    </svg>
                                    <br><b>Add to cart</b>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>';
                    }
                }
            }

            ?>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>

<style>
    .heading-content {
        display: flex;
        flex-direction: row;

    }

    .content-row {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
    }

    .content-row-bonus {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .credit-item-link {
        background-color: white;
        border-width: 1px;
        border-color: #707070;
        border-radius: 24px;
        height: auto;
        text-decoration: none;
        color: black;
    }
</style>