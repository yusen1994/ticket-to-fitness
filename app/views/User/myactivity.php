<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>
<?php
foreach($data['myActivity'] as $single){
    echo '<div class="container">
            <div class ="row">
            <div class = "col">
                '.$single->activity_name.'
                '.$single->category;

                foreach ((unserialize($single->sessions_per_week)) as $session_per_week) {
                    echo $session_per_week . "  ";
                }

        echo'    </div>
            </div>
        </div>
    ';
}

?>


<?php require APPROOT . '/views/inc/footer.php'; ?>
