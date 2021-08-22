<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>
<?php
foreach ($data['myActivity'] as $single) {

    echo '<div class="container" style="padding-top: 20px; background-color: #f3f3f3">
   
  
            <div class="card-container">
                <div class="gym-image-container">
                    <img class="gym-image" src="' . URLROOT . '/images/golds gym.png">
                </div>
                <div class="card-content" >
                    <p class="gym-name">' . $single->gym_name . '</p>
                    <div class="line-separator"></div>
                    <div class="gym-info-container">
                        <table style="width:100%;">
                            <tr>
                                <td class="card-info-col">
                                    <img class="card-category-image" src="' . URLROOT . '/images/weightlift.svg">
                                    <small class="card-cateogry-text">' . $single->category . '</small>
                                </td>
                                <td>
                                    <img class="card-category-image" src="' . URLROOT . '/images/location-#E46E2E.svg">
                                    <small class="card-cateogry-text">' . $single->gym_address . '</small>
                                </td>
                            </tr>
                            <tr>
                                <td class="card-info-col">
                                    <img class="card-category-image" src="' . URLROOT . '/images/timer-#E46E2E.svg">
                                    <small class="card-cateogry-text">';
    foreach ((unserialize($single->sessions_per_week)) as $session_per_week) {
        echo $session_per_week . "  ";
    }
    echo '</small>
                                </td>
                                <td>
                                    <img class="card-category-image" src="' . URLROOT . '/images/group-#E46E2E.svg">
                                    <small class="card-cateogry-text">Unlimited</small>
                                </td>
                            </tr>
                            
                        </table>

                    </div>
                           

                </div>
                <div class="credits-container">
                    <img class="credits-image" class="card-category-image" src="' . URLROOT . '/images/credits.svg">
                    <a style="text-decoration:none" href = "'.URLROOT.'/User/removeActivity/'.$single->activity_id.'"><button type="button" class="btn"  style="color: red;"><b>Delete</b></button></a>

                    <h5>25</h5>
                </div>
            </div>
            </div>';
}

?>


<?php require APPROOT . '/views/inc/footer.php'; ?>
