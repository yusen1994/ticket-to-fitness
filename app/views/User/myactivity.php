<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-1 col-lg-4">
            <div class="row" style="margin-top: 20px;">
                <div class=" col">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/User"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">My Activities</span></b></h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <?php
                     if (!empty($data['myActivity'])) {
                    foreach ($data['myActivity'] as $single) {

                        echo '<div class="container" style="padding-top: 20px; background-color: #f3f3f3">
   
  
            <div class="card-container p-2" style="width:100%; height:auto;">
                <div class="gym-image-container">
                    <img class="gym-image" src="' . URLROOT . '/images/golds gym.png">
                </div>
                <div class="card-content"style="width:100%; height:auto;" >
                    <p class="gym-name">' . $single->gym_name . '</p>
                    <div class="line-separator"></div>
                    <div class="gym-info-container">
                        <table >
                            <tr>
                                <td class="card-info-col">
                                    <img class="card-category-image" src="' . URLROOT . '/images/weightlift.svg">
                                    <small class="card-cateogry-text">' . $single->category . '</small>
                                </td>
                                <td>
                                    <img class="card-category-image" src="' . URLROOT . '/images/location-orange.svg">
                                    <small class="card-cateogry-text">' . $single->gym_address . '</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="card-info-col">
                                    <img class="card-category-image" src="' . URLROOT . '/images/timer-orange.svg">
                                    <small class="card-cateogry-text">';
                        foreach ((unserialize($single->sessions_per_week)) as $session_per_week) {
                            echo $session_per_week . "  ";
                        }
                        echo '</small>
                                </td>
                                <td>
                                    <img class="card-category-image" src="' . URLROOT . '/images/group-orange.svg">
                                    <small class="card-cateogry-text">Unlimited</small>
                                </td>
                            </tr>
                            
                        </table>

                    </div>
                           

                </div>
                <div class="credits-container">
                
                    <img class="credits-image" class="card-category-image" src="' . URLROOT . '/images/credits.svg">
                    <h5>25</h5>
                    <a style="text-decoration:none" href = "' . URLROOT . '/User/removeActivity/' . $single->activity_id . '">
                    
                    <button type="button" class="btn pl-4"  style="color: red;"><b>Delete</b></button></a>

                   
                </div>
            </div>
            </div>';
                    } 
                } else {


                        echo '<div class="alert alert-danger" role="alert">
        ' . $data['error'] . '
    </div>';
                }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>





<?php require APPROOT . '/views/inc/footer.php'; ?>