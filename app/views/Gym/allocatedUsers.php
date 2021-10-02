<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-4">
            <div class="row" style="margin-top: 20px;">
                <div class=" col">
                    <h3><b><span><a href="javascript:history.back()"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Allocated Users</span></b></h3>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px;">
                <div class="col">
                    <div class="gym-form">
                        <input type="text" placeholder="Search for something">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px; margin-bottom: 100px; padding-left:15px; padding-right:15px;">
                <div class="col gym-body">
                    <div class="gym-member-list">

                        <?php 
                        
                        if(!empty($data['allocated_users'])){
                        foreach ($data['allocated_users'] as $single) {

                            echo '            <div class="gym-member">
                                         <div class="gym-member-construct">
                                          <div class="gym-member-name">' . $single->firstname . " " . $single->lastname . '</div>
                                           <div class="gym-member-active">Active</div>
                                              </div>
                                            <div class="gym-member-construct">
                                              <div class="gym-member-attend">'.$single->contact_number.'</div>
                                              <div class="gym-member-date">'.$single->gender.'</div>
                                           </div>      
                                            <div class="gym-line"></div>
                                         </div>';
                        }
                    }else{
                        echo '
                        <div class="container-fluid mt-4 mt-lg-5">
                            <div class="row justify-content-center">
                                <div class="col-sm-12 col-lg-4 text-center align-self-center">
                                    <div class="empty-container">
                                        <h4 class="mb-5"><b>No Allocated Users</b></h4>
                                        
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
        </div>
    </div>

</div>