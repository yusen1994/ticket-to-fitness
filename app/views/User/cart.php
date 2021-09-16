<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container-fluid" style="padding-top:10px;">

    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-sm-12 col-lg-6 align-self-center">
            <h3><b>My Cart</b></h3>
        </div>
    </div>

    <?php if (!empty($data['success'])) {

        echo '<div class="alert alert-success mt-4" role="alert">';
        echo $data['success'];
        echo '</div>';
    }
    ?>

    <?php if (!empty($data['error'])) {

        echo '<div class="alert alert-danger mt-4" role="alert">';
        echo $data['error'];
        echo '</div>';
    }
    ?>
    <!-- <div class="row justify-content-center" style="margin-top:20px; background-color: white;">
        <div class="col-sm-1 col-lg-4" style="padding-right:0px;padding-left:0px;">
            <div class="card-container"> -->
                <!-- <div class="row">
                    <div class="col-6 text-left" style="padding-right: 0px;">
                        <h5><b>Gym Name</b></h5>
                    </div>
                    <div class="col-3 text-left" style="padding: 0px;">
                        <p style="font-size:10px; margin-bottom:0px">40 Kerr Parade, Auburn NSW</p>
                    </div>
                    <div class="col-3 text-right">
                        <button class="myactivity-remove-btn">Remove</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p style="margin-bottom:5px;">Weightlifting</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <div class="line-separator"></div>
                    </div>
                </div> -->
                <!-- Dynamically add times per activity from here -->
                <!-- <div class="row" style="margin-top:10px; padding-left:10px;">
                    <div class="col-4 align-self-center" style="padding-right:0px;">
                        <p style="font-size:16px; margin-bottom:0px">Monday</p>
                    </div>
                    <div class="col-3 align-self-center" style="padding:0px;">
                        <p style="font-size:16px; margin-bottom:0px">1000-1100</p>
                    </div>
                    <div class="col-2 text-right align-self-center" style="padding:0px;">
                        <div style="display:flex; flex-direction:row; align-items:center; justify-content: flex-end;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14.95" height="17.07" viewBox="0 0 14.95 17.07">
                                <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.141, 15.662)">
                                    <path id="Path_63" data-name="Path 63" d="M14.488,9.434H1.685A1.687,1.687,0,0,1,0,7.749V6.4a.337.337,0,0,1,.337-.337H.674a1.348,1.348,0,0,0,0-2.7H.337A.337.337,0,0,1,0,3.032V1.685A1.687,1.687,0,0,1,1.685,0h12.8a1.687,1.687,0,0,1,1.685,1.685V3.032a.337.337,0,0,1-.337.337H15.5a1.348,1.348,0,0,0,0,2.7h.337a.337.337,0,0,1,.337.337V7.749A1.686,1.686,0,0,1,14.488,9.434ZM.674,6.739V7.749A1.012,1.012,0,0,0,1.685,8.76h12.8A1.012,1.012,0,0,0,15.5,7.749V6.739h0a2.022,2.022,0,0,1,0-4.043V1.685A1.012,1.012,0,0,0,14.488.674H1.685A1.012,1.012,0,0,0,.674,1.685V2.7a2.022,2.022,0,1,1,0,4.043Z" transform="translate(0 4.04)" />
                                    <path id="Path_64" data-name="Path 64" d="M.337,1.348A.337.337,0,0,1,0,1.011V.337a.337.337,0,1,1,.674,0v.674A.337.337,0,0,1,.337,1.348Z" transform="translate(5.391 4.04)" />
                                    <path id="Path_65" data-name="Path 65" d="M.337,4.664A.337.337,0,0,1,0,4.327V3.188a.337.337,0,1,1,.674,0v1.14A.336.336,0,0,1,.337,4.664Zm0-2.85A.337.337,0,0,1,0,1.477V.337a.337.337,0,0,1,.674,0v1.14A.337.337,0,0,1,.337,1.814Z" transform="translate(5.391 6.425)" />
                                    <path id="Path_66" data-name="Path 66" d="M.337,1.348A.337.337,0,0,1,0,1.011V.337a.337.337,0,1,1,.674,0v.674A.337.337,0,0,1,.337,1.348Z" transform="translate(5.391 12.126)" />
                                    <path id="Path_67" data-name="Path 67" d="M.337,4.714a.337.337,0,0,1-.118-.652l10.714-4a1.029,1.029,0,0,1,1.311.622l1.215,3.586a.337.337,0,0,1-.638.216L11.606.9a.345.345,0,0,0-.437-.208l-10.714,4a.325.325,0,0,1-.117.022Z" transform="translate(1.348 0)" />
                                </g>
                            </svg>
                            <p style="font-size:16px; margin-bottom:0px; margin-left:2px;">25</p>
                        </div>

                    </div> -->
<!-- 
                    <div class="line-separator" style="margin-top:10px;"></div>

                </div> -->
                <!-- End add times per activity here -->
            </div>
        </div> 
    </div>

    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <!-- following container have some issue check div block-->
            <div class="item-container">
                <?php
                $totalCost = 0;
                if (!empty($data['cart_activities'])) {

                    foreach ($data['cart_activities'] as $single) {

                        echo '  <!-- Cart item -->
                    <div class="item-content-container">
                        <div class="row">
                            <div class="col-10 item-content">
                                <h5>' . $single->activity_name . '</h5>
                                <p>' . $single->category . '</p>
                            </div>
                            <div class="col-2 text-center" style="padding:0px;">
                                <a href="' . URLROOT . '/User/RemoveCart/' . $single->activity_id . '/' . $single->user_id . '">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13.585" height="13.585" viewBox="0 0 13.585 13.585">
                                        <path id="close" d="M8.037,6.929l5.29-5.29A.88.88,0,1,0,12.083.394l-5.29,5.29L1.5.394A.88.88,0,0,0,.258,1.639l5.29,5.29-5.29,5.29A.88.88,0,1,0,1.5,13.463l5.29-5.29,5.29,5.29a.88.88,0,0,0,1.245-1.245Zm0,0" transform="translate(0 -0.136)" fill="#b90000" />
                                    </svg>
                                </a>
                            <div class="item-price-content"></div>    
                            </div>
                        </div>
                    </div>
                </div>';
                        $totalCost += $single->credit;
                }
                    echo '
                <!-- End Cart item -->';
                    echo '   <div class="total-container">
               <div class="line-separater"></div>
               <div class="total-content">
                   <div class="row justify-content-center">
                      
                       <div class="col-2 text-right" style="padding:0px;">
                    
                       </div>
                      
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
<div class="row checkout-container justify-content-center">
   <div class="col-sm-6 col-lg-3 text-right">
       <a href="' . URLROOT . '/User/confirmActivity/' . $single->user_id . '">
           <button type="button" class="checkout-btn mb-4">Confirm<span class="btn-arrow"><svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="12.536" height="10.751" viewBox="0 0 12.536 10.751">
                       <g id="Group_87" data-name="Group 87" transform="translate(0 0)">
                           <path id="Path_103" data-name="Path 103" d="M.753,36.337a.9.9,0,0,1,.155-.011H9.752l-.193-.09a1.794,1.794,0,0,1-.507-.359L6.573,33.4a.928.928,0,0,1-.13-1.188.9.9,0,0,1,1.345-.117l4.485,4.485a.9.9,0,0,1,0,1.268h0L7.788,42.331a.9.9,0,0,1-1.345-.09.928.928,0,0,1,.13-1.188l2.476-2.485a1.794,1.794,0,0,1,.448-.327l.269-.121H.958a.928.928,0,0,1-.946-.753A.9.9,0,0,1,.753,36.337Z" transform="translate(0 -31.842)" />
                       </g>
                   </svg>
               </span>
           </button>
       </a>
   </div>
</div>';
                } else {
                    echo '
                <!-- If empty -->
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div>
                            <h3>Cart is Empty</h3>
                            <a href="' . URLROOT . '/Activity/allactivity">
                                <button type="button" class="checkout-btn mb-4">View Activities</button>
                            </a>
                        </div>
                    </div>
                </div>
                </div>';
                }


                ?>


            </div>

            <?php require APPROOT . '/views/inc/footer.php'; ?>


            <style>
                body {
                    background-color: #F2F2F2;
                }

                .card-container {
                    padding: 15px;
                    align-items: center;
                    color: black;
                    background-color: white;
                    border-radius: 0px;
                    margin: 0px;

                }

                .myactivity-remove-btn {
                    width: 100%;
                    max-width: 100px;
                    height: 32px;
                    border-radius: 24px;
                    border-style: none;
                    color: white;
                    background-color: #DA0000;
                    font-size: 14px;

                }


                .empty-cart-container {
                    position: absolute;
                    width: 300px;
                    top: 40%;
                    left: 12%;
                }

                .item-container {
                    height: 100px;
                    margin-top: 10px;
                    margin-left: 15px;
                    margin-right: 15px;
                    padding-left: 15px;
                    padding-right: 15px;
                    background-color: #ffffff;
                    border-radius: 28px;
                    display: flex;
                    flex-direction: column;
                    position: relative;
                    margin-bottom: 15px;
                }

                .item-content-container {
                    margin-top: 20px;
                }

                .item-price-content {
                    display: flex;
                    flex-direction: row;
                }

                .amount-container {
                    display: flex;
                    flex-direction: row;
                }


                .line-separater {
                    margin-bottom: 10px;
                    height: 1px;
                    background-color: #D7D7D7;
                }

                .total-container {
                    position: absolute;
                    bottom: 20px;
                    left: 15px;
                    right: 15px;
                }

                .checkout-container {
                    margin-top: 20px;
                    margin-bottom: 20px;
                }

                .checkout-btn {
                    background-color: #EF8830;
                    font-family: 'Poppins';
                    font-weight: bold;
                    border-radius: 22px;
                    border-style: none;
                    color: white;
                    width: 60%;
                    max-width: 200px;
                    height: 45px;
                    margin-top: 50px;
                }

                .btn-arrow {
                    padding-left: 5px;
                    margin-bottom: 50px;
                }
            </style>