<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<div class="container mt-3">
    <div class="p-3 mb-2 bg-light text-dark">
        <div class="pl-3">
            <p>
            <h3><b><span><a href = "<?php echo URLROOT; ?>/Activity" ><i class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:orange;">Activity</span> <span>Information</span> </b></h3>
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col">
            <img src="<?php echo URLROOT; ?>/images/gym1.jpg" class="rounded-circle float-left mw-100 pl-2" alt="...">

        </div>

        <div class="col-5">
            <h4><?php //Array with two object, we need to access object 1 from index 0 that has activity info
                echo $data['gym_activity'][0]->activity_name; ?></h4>
            <p><?php //Array with two object, we need to access object 2 from index 0 that has gym info
                echo $data['gym_activity'][1]->gym_address; ?></p>

           <a style = "text-decoration: none;" href = "<?php echo URLROOT; ?>/Activity/addActivity/<?php echo $data['activity_id'];?>"> <button type="button" style="color:black" class="btn btn-outline-warning btn-lg btn-block">Add Activity</button></a>

        </div>
        <div class="col">
            <a href="<?php echo URLROOT; ?>/Activity" style="color:orange;">See all</a>
        </div>
    </div>

    <div class="row">
        <div class="col">


        </div>
        <div class="col-8">
            <table class="table table-bordered mt-4">

                <tbody>
                    <tr>
                        <th scope="row">Activity</th>
                        <td><?php echo $data['gym_activity'][0]->category; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Session</th>
                        <td><?php 
                        foreach ((unserialize($data['gym_activity'][0]->sessions_per_week)) as $session_per_week) {
                            echo $session_per_week . "  ";
                        }
                         ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Price</th>
                        <td><?php echo $data['gym_activity'][0]->credit; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Time</th>
                        <td>9am - 10pm</td>
                    </tr>
                    <tr>
                        <th scope="row">Limit</th>
                        <td><?php echo $data['gym_activity'][0]->max_capacity; ?></td>
                    </tr>
                    <tr>
                        <th scope="row">Instructor</th>
                        <td>None</td>
                    </tr>

                </tbody>
            </table>
        </div>
        <div class="col">

        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>