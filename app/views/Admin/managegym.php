<?php require APPROOT . '/views/Admin/dashboardmenu.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-4">
            <div class="row" style="margin-top: 20px;">
                <div class=" col">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/Administrator"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Manage Gyms</span></b></h3>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px;">
                <div class="col">
                    <div class="gym-form">
                        <input type="text" placeholder="Search form something">
                    </div>
                    
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px; margin-bottom: 100px; padding-left:15px; padding-right:15px;">
                <div class="col gym-body">
                    <div class="gym-member-list">

                        <?php foreach ($data['gym_info'] as $single) {

                            echo '            <div class="gym-member">
                                         <div class="gym-member-construct">
                                          <div class="gym-member-name">' . $single->gym_name . '</div>
                                          
                                           <div class="gym-member-active">Active</div>
                                              </div>
                                            <div class="gym-member-construct">
                                              <div class="gym-member-attend">'.$single->gym_address.'</div>
                                              
                                              <div class="gym-member-date">'.$single->phone_number.'</div>
                                           </div>      
                                            <div class="gym-line"></div>
                                         </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

