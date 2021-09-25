<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>


<div class="d-flex justify-content-center" style="margin-top: 20px;">
    <div class="col-sm-12 col-lg-6 col-xl-4">
        <h3><b>Manage Activities</b></h3>
    </div>
</div>



<!-- Dynamically add activity from here -->
<?php
//47, 47, 47, 48, 48, 49

if (!empty($data['myActivity'])) {
    $flag = true; //If current is the same then flag becomes false i.e only show the unique id once
    $current = NULL;
    $sale_credit_1 = NULL;
    foreach ($data['myActivity'] as $single) {
        if ($current == $single->activity_id) { //loops as much as there is repetetive id so, display rest of the information
            $flag = false;
            
            echo '
                <div class="row" style="margin-top:10px; padding-left:10px;">
                    <div class="col-4 align-self-center" style="padding-right:0px;">
                        <p style="font-size:16px; margin-bottom:0px">' . $single->day . '</p>
                    </div>
                    <div class="col-3 align-self-center" style="padding:0px;">
                        <p style="font-size:16px; margin-bottom:0px">' . $single->time . '</p>
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
                            <p style="font-size:16px; margin-bottom:0px; margin-left:2px;">'; if($single->sale_percentage != NULL){
                                $sale_credit_1 = $single->credit - ($single->sale_percentage / 100 * $single->credit);
                            } if($sale_credit_1 != NULL) { echo "<del style='color:red'>".$single->credit. "</del>".$sale_credit_1; } else { echo $single->credit; } echo '</p>
                        </div>
    
                    </div>
                    <div class="col-3 text-right align-self-center">
                    <a href = "' . URLROOT . '/User/allocation/' . $single->id . '" style ="text-decoration:none;"> <button class="myactivity-buy-btn">Buy</button></a>
                    </div>
                    <div class="col text-left">
                        <div class="line-separator" style="margin-top:10px;"></div>
                    </div>
                </div>';
        } else {
            $flag = true;
            $sale_credit_2 = NULL;

            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        if ($flag == true) { //Will only loop once to display the acivity name with other information
            $current = $single->activity_id;
            echo '
                                    
                <div class="d-flex justify-content-center" style="margin-top:20px;  background-color: white;">
                <div class="col-sm-12 col-lg-6 col-xl-4" style="padding-right:0px;">
                <div class="card-container">
                    <div class="row">
                        <div class="col-6 text-left" style="padding-right: 0px;">
                            <span style="text-transform: capitalize;"><h5><b>' . $single->gym_name . '</b></h5></span>
                        </div>
                        <div class="col-3 text-left" style="padding: 0px;">
                            <p style="font-size:10px; margin-bottom:0px">' . $single->gym_address . '</p>
                        </div>
                        <div class="col-3 text-right">
                        <a style="text-decoration:none" href = "' . URLROOT . '/User/removeActivity/' . $single->activity_id . '"> <button class="myactivity-remove-btn">Remove</button></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-left">
                            <p style="margin-bottom:5px; text-transform: capitalize;">' . $single->category . '</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-left">
                            <div class="line-separator"></div>
                        </div>
                    </div>
                    <!-- Dynamically add times per activity from here -->
                    <div class="row" style="margin-top:10px; padding-left:10px;">
                        <div class="col-4 align-self-center" style="padding-right:0px;">
                            <p style="font-size:16px; margin-bottom:0px; text-transform: capitalize;">' . $single->day . '</p>
                        </div>
                        <div class="col-3 align-self-center" style="padding:0px;">
                            <p style="font-size:16px; margin-bottom:0px;">' . $single->time . '</p>
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
                                <p style="font-size:16px; margin-bottom:0px; margin-left:2px;">'; if($single->sale_percentage != NULL){
                                    $sale_credit_2 = $single->credit - ($single->sale_percentage / 100 * $single->credit);
                                } if($sale_credit_2 != NULL) { echo "<del style='color:red'>".$single->credit. "</del>".$sale_credit_2; } else { echo $single->credit; } echo '</p>
                            </div>
        
                        </div>
                        <div class="col-3 text-right align-self-center">

                        <a href = "' . URLROOT . '/User/allocation/' . $single->id . '" style ="text-decoration:none;"> <button class="myactivity-buy-btn">Buy</button></a>
                        </div>
                        <div class="col text-left">
                            <div class="line-separator" style="margin-top:10px;"></div>
                        </div>
                    </div>
        
                
                <!-- End add times per activity here -->';
        }
    }
} else {
    echo '
    <div class="container-fluid mt-4 mt-lg-5">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-lg-4 text-center align-self-center">
                <div class="empty-container">
                    <h4 class="mb-5"><b>No Activities</b></h4>
                    <h5 class="mb-5">Add one from our list of activities</h5>
                    <a href="' . URLROOT . '/Activity/allactivity">
                        <button type="button" class="checkout-btn mb-4">View Activities</button>
                    </a>
                </div>
            </div>
        </div>
     </div>
    
    
    ';
}


?>


</div>
</div>
</div>





<style>
    .card-container {
        padding: 15px;
        align-items: center;
        color: black;
        background-color: white;
        border-radius: 0px;
        margin: 0px;

    }

    .card-container:focus {
        text-decoration: none;
        color: black;
    }

    .empty-container {
        background-color: white;
        border-radius: 60px;
        padding: 30px;

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

    .myactivity-buy-btn {
        width: 100%;
        max-width: 100px;
        height: 32px;
        border-radius: 24px;
        border-style: none;
        color: white;
        background-color: #2BB730;
        font-size: 14px;
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
    }
</style>