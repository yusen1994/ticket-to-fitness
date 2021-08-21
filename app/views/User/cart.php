<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container-fluid" style="padding-top:10px;">

    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <div class="heading-container">
                <h4>My Cart</h4>
            </div>
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
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
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
                                <div class="item-price-content">
                                   
                                   
                                </div>
    
                            </div>
    
                        </div>
                    </div>
                    
                    <div class="row">
                    <div class="col-12">
                        <div class="line-separater"></div>
                    </div>
                </div>';

                        $totalCost += $single->credit;
                    }

                    echo '
                <!-- End Cart item -->';
                    echo '                <div class="total-container">
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
                                <button type="button" class="checkout-btn mb-4">View Activities<span class="btn-arrow"><svg id="arrow" xmlns="http://www.w3.org/2000/svg" width="12.536" height="10.751" viewBox="0 0 12.536 10.751">
                                            <g id="Group_87" data-name="Group 87" transform="translate(0 0)">
                                                <path id="Path_103" data-name="Path 103" d="M.753,36.337a.9.9,0,0,1,.155-.011H9.752l-.193-.09a1.794,1.794,0,0,1-.507-.359L6.573,33.4a.928.928,0,0,1-.13-1.188.9.9,0,0,1,1.345-.117l4.485,4.485a.9.9,0,0,1,0,1.268h0L7.788,42.331a.9.9,0,0,1-1.345-.09.928.928,0,0,1,.13-1.188l2.476-2.485a1.794,1.794,0,0,1,.448-.327l.269-.121H.958a.928.928,0,0,1-.946-.753A.9.9,0,0,1,.753,36.337Z" transform="translate(0 -31.842)" />
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
                </div>


';
                }


                ?>










            </div>

            <?php require APPROOT . '/views/inc/footer.php'; ?>


            <style>
                body {
                    background-color: #F2F2F2;
                }

                .heading-container {
                    margin-top: 20px;

                }

                .empty-cart-container {
                    position: absolute;
                    width: 300px;
                    top: 40%;
                    left: 12%;
                }

                .item-container {
                    height: 600px;
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
                    margin-bottom: 100px;
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
                    background-color: white;
                    font-family: 'Poppins';
                    font-weight: bold;
                    border-radius: 22px;
                    border-color: #EF8830;
                    border-width: thin;
                    width: 60%;
                    height: 45px;
                    margin-top: 50px;
                }

                .btn-arrow {
                    padding-left: 5px;
                    margin-bottom: 50px;
                }
            </style>