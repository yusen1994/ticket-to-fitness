<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>


<nav class="nav nav-pills nav-justified mt-4">
  <a class="nav-item nav-link active" href="#">Dashboard</a>
  <a class="nav-item nav-link " href="<?php echo URLROOT;?>/User/userProfile">Profile</a>
  <a class="nav-item nav-link" href="#">Timetable</a>
  <a class="nav-item nav-link " href="#">Manage Class</a>
     
</nav>

<?php 

                if(!empty($data['message'])){
                   echo "<div class='alert alert-success' role='alert'>";
                    echo $data['message'];
                    echo "</div>";
                }
   ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>
