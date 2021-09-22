<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-4">
            <div class="row" style="margin-top: 20px;">
                <div class=" col">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/gym"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Members</span></b></h3>
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

                        <?php foreach ($data['gym_members'] as $single) {

                            echo '            <div class="gym-member">
                                         <div class="gym-member-construct">
                                          <div class="gym-member-name">' . $single->firstname . " " . $single->lastname . '</div>
                                           <div class="gym-member-active">Active</div>
                                              </div>
                                            <div class="gym-member-construct">
                                              <div class="gym-member-attend">Classes attended:3</div>
                                              <div class="gym-member-date">Joined:20 July 6</div>
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