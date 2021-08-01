<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>



<div id="container-userprofile">

    <div class="card" style="width: 40rem; height:35rem;">
        <div class="card-body">
   
            
            <h3 class="card-title">Hello <?php echo $data['gym_name'] ?></h3>
            <div class="divider py-1 bg-dark"></div>
            <h5 class="card-title mt-5">Details</h5>
            <p class="font-weight-normal text-secondary">Gym Address: <?php echo $data['gym_address']; ?></p>
            <p class="font-weight-normal text-secondary">Email: <?php echo $data['gym_email']; ?></p>
           
            <a href="<?php echo URLROOT; ?>/User" class="btn btn-success">Switch User</a>

        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>