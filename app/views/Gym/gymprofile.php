<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>

<div class="container-fluid">
    <div class=" row justify-content-center">
        <div class="col-sm-12 col-xl-4">
            <div class="row mt-3">
                <div class="col-8" style="flex-direction: row;">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/Gym"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Gym Info</span></b></h3>
                </div>
                <div class="col-4 text-right">
                    <a style="color: #0B518D" href="#"><b>Edit Info</b></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3 pt-3 pb-3" style="background-color:white;">
        <div class="col-sm-12 col-xl-4">
            <div class="row justify-content-center">
                <div class="col-4 pr-0">
                    <?php
                    if ($data['photo'] !== "") {
                        echo '<img class="img-fluid rounded" style=" display:block; height:auto; max-width:100%;" src="' . URLROOT . '/uploads/' . $data['photo'] . '">';
                    } else {
                        echo '<img class="img-fluid rounded" style=" display:block; height:auto; max-width:100%;" src="' . URLROOT . '/images/gym-default.png">';
                    }
                    ?>
                </div>
                <div class="col-8">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h3><b><?php echo $data['gym_name'] ?></b></h3>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="line-separator"></div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <p><?php echo $data['gym_email']; ?></p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <p><?php echo $data['phone_number']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>