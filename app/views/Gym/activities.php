<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<h4><b>Upcoming <span style="color:orange;">Activities</span></b></h4>
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-block rounded-pill" style="background-color:orange;"><i class="fas fa-list"></i> View all</button>

            </div>

            <div class="col">
                <button type="submit" class="btn btn-block rounded-pill" data-toggle="modal" data-target="#addActivityModal" style="background-color:orange;"><i class="fas fa-plus"></i> Add activity</button>
            </div>


        </div>


    </div>

    <?php
    $count = 1;
    foreach ($data['gym_activity'] as $activity) {

        echo '<div class="card mt-4 " style="width: auto;">';
        echo '<div class = "container">';
        echo '<div class="row">';
        echo '<div class="col-8">';

        echo '<img class="rounded mx-auto d-block" style="width:30%;"  src="' . URLROOT . '/images/HIT.jpg" alt="">';
        echo '<div class="card-body rounded-pill">';
        echo '<h4 class="card-title">' . $activity->activity_name . '</h4>';
        echo '<h6 class="card-subtitle mb-2 text-muted">Category: ' . $activity->category . '</h6>';
        echo '<p class="card-text">Session Per Week: ';
        foreach ((unserialize($activity->sessions_per_week)) as $session_per_week) {
            echo $session_per_week . "  ";
        }
        echo '</p>';
        echo '<p class="card-text">' . $activity->description . '</p>';
        echo '<p class="card-text">Max Capacity: ' . $activity->max_capacity . '</p>';

        echo '<p class="card-text"><span style="color:red";>Calendar Coming Soon</span></p>';
        echo '<hr>';
        echo '<h4><b>$' . $activity->credit . '</b></h4>';
        echo '<a href="#" class="card-link">More Details</a>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-4">';
        echo '<form method = "post" action = "' . URLROOT . '/Gym/editActivity/delete">';
        echo '<button type="button" class="btn btn-primary mt-5 mr-1 " data-toggle="modal" data-target="#editActivityModal' . $count . '">Edit</button>';
        echo '<input type = "hidden" value = "' . $activity->id . '" name = "activity_id"> ';

        echo '<button type="submit" class="btn btn-danger mt-5 mr-1">Delete</button>';
        echo '</form>';
        echo '<form method = "post" action = "' . URLROOT . '/Gym/editActivity/activate">';
        echo '<input type = "hidden" value = "' . $activity->id . '" name = "activity_id"> ';

        if ($activity->status == 0) {
            echo '<input type = "hidden" id = "status" value = "true" name = "status"> ';

            echo '<button type="submit" id = "activateBtn" class="btn btn-primary mt-5 mr-1" >Activate</button>';
        } else {
            echo '<input type = "hidden" id = "status" value = "false" name = "status"> ';

            echo '<button type="submit" id = "activateBtn" class="btn btn-danger mt-5 mr-1" >Deactivate</button>';
        }

        echo '</form>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';


        echo '<!--Modal Edit Activity -->

        <div class="modal fade" id="editActivityModal' . $count . '" tabindex="-1" role="dialog" aria-labelledby="editActivityModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:orange;">
                        <h5 class="modal-title" id="editActivityModalLabel">Add Activity</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                        <form method="POST" action="' . URLROOT . '/Gym/editActivity/edit">
                        <input type = "hidden" value = "' . $activity->id . '" name = "activity_id"> 
                            <div class="form-group">
                                <input type="text" class="form-control" id="activityName" name="activity_name" value = "' . $activity->activity_name . '" placeholder="Name of activity" required>
                             
                            </div>
        
                            <div class="form-group">
        
                                <select id="category" class="form-control" name="category" required>
                                    <option value=" ' . $activity->category . '"></option>
                                    <option value="cycling">Cycling</option>
                                    <option value="swimming">Swimming</option>
                                    <option value="yoga">Yoga</option>
                                    <option value="weights">Weights</option>
                                    <option value="fight">Martial Arts</option>
                                    <option value="cardio">Cardio</option>


                                </select>
        
                            </div>
        
                            <div class="form-group">
                            <label>Choose Days</label> <br>
    
                            <div class="weekDays-selector2">
      <input type="checkbox" id="edit-weekday-mon" class="weekday" name="sessions_per_week[]" value = "Monday" />
      <label for="edit-weekday-mon">M</label>
      <input type="checkbox" id="edit-weekday-tue" class="weekday" name="sessions_per_week[]" value = "Tuesday" />
      <label for="edit-weekday-tue">T</label>
      <input type="checkbox" id="edit-weekday-wed" class="weekday" name="sessions_per_week[]" value = "Wednesday" />
      <label for="edit-weekday-wed">W</label>
      <input type="checkbox" id="edit-weekday-thu" class="weekday" name="sessions_per_week[]" value = "Thursday"/>
      <label for="edit-weekday-thu">T</label>
      <input type="checkbox" id="edit-weekday-fri" class="weekday" name="sessions_per_week[]" value = "Friday" />
      <label for="edit-weekday-fri">F</label>
      <input type="checkbox" id="edit-weekday-sat" class="weekday"  name="sessions_per_week[]" value = "Saturday"/>
      <label for="edit-weekday-sat">S</label>
      <input type="checkbox" id="edit-weekday-sun" class="weekday"  name="sessions_per_week[]" value = "Sunday"/>
      <label for="edit-weekday-sun">S</label>
    </div>
                      
                        </div>
                            <div class="form-group">
                                <input type="text" class="form-control" value = "' . $activity->max_capacity . '" id="maxCapacity" name="max_capacity" placeholder="Max capacity" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="credit" value = "' . $activity->credit . '" name="credit" placeholder="Credit" required>
                            </div>
        
                            <div class="form-group">
                                <input type="text" class="form-control" value = "' . $activity->description . '" id="description" name="description" placeholder="Description" required>
                            </div>
        
                            <button type="submit" class="btn btn-success btn-block" class="btn btn-primary">Update</button>
                        </form>
        
        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
                    </div>
                </div>
            </div>
        </div>
        ';
        $count++;
    }
    ?>



</div>

<!-- Modal Add Activity -->

<div class="modal fade " id="addActivityModal" tabindex="-1" role="dialog" aria-labelledby="addActivityModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color:orange;">
                <h5 class="modal-title" id="addActivityModalLabel">Add Activity</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form method="POST" action="<?php echo URLROOT; ?>/Gym/addActivity">
                    <div class="form-group">
                        <input type="text" class="form-control" id="activityName" name="activity_name" placeholder="Name of activity" required>

                        <?php


                        if (!empty($data['activity_name_err'])) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $data['activity_name_err'];
                            echo '</div>';
                        }


                        ?>

                    </div>

                    <div class="form-group">

                        <select id="category" class="form-control" name="category" required>
                            <option value="N/A">Category</option>
                            <option value="cycling">Cycling</option>
                            <option value="swimming">Swimming</option>
                            <option value="yoga">Yoga</option>
                            <option value="weights">Weights</option>
                            <option value="fight">Martial Arts</option>
                            <option value="cardio">Cardio</option>
                        </select>

                        <?php
                        if (!empty($data['category_err'])) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $data['category_err'];
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <label>Choose Days</label> <br>

                        <div class="weekDays-selector">
                            <input type="checkbox" id="add-weekday-mon" onclick="mondayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Monday" />
                            <label for="add-weekday-mon">M</label>
                            <input type="checkbox" id="add-weekday-tue" onclick="tuesdayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Tuesday" />
                            <label for="add-weekday-tue">T</label>
                            <input type="checkbox" id="add-weekday-wed"  onclick="wednesdayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Wednesday" />
                            <label for="add-weekday-wed">W</label>
                            <input type="checkbox" id="add-weekday-thu" onclick="thursdayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Thursday" />
                            <label for="add-weekday-thu">T</label>
                            <input type="checkbox" id="add-weekday-fri"  onclick="fridayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Friday" />
                            <label for="add-weekday-fri">F</label>
                            <input type="checkbox" id="add-weekday-sat"  onclick="saturdayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Saturday" />
                            <label for="add-weekday-sat">S</label>
                            <input type="checkbox" id="add-weekday-sun"  onclick="sundayshowTimePicker();" class="weekday" name="sessions_per_week[]" value="Sunday" />
                            <label for="add-weekday-sun">S</label>
                        </div>

                        <div class="monday_time_wrapper" id="monday_time_wrapper" style="display:none;">

                            <input type="text" class="monday_timepicker_start" name="monday_starttimeArray[]" /> to
                            <input type="text" class="monday_timepicker_end" name="monday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 monday_addmore_Time">Add More</button>

                        </div>


                        <div class="tuesday_time_wrapper" id="tuesday_time_wrapper" style="display:none;">

                            <input type="text" class="tuesday_timepicker_start" name="tuesday_starttimeArray[]" /> to
                            <input type="text" class="tuesday_timepicker_end" name="tuesday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 tuesday_addmore_Time">Add More</button>

                        </div>


                        <div class="wednesday_time_wrapper" id="wednesday_time_wrapper" style="display:none;">

                            <input type="text" class="wednesday_timepicker_start" name="wednesday_starttimeArray[]" /> to
                            <input type="text" class="wednesday_timepicker_end" name="wednesday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 wednesday_addmore_Time">Add More</button>

                        </div>

                        
                        <div class="thursday_time_wrapper" id="thursday_time_wrapper" style="display:none;">

                            <input type="text" class="thursday_timepicker_start" name="thursday_starttimeArray[]" /> to
                            <input type="text" class="thursday_timepicker_end" name="thursday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 thursday_addmore_Time">Add More</button>

                        </div>

                        
                        <div class="friday_time_wrapper" id="friday_time_wrapper" style="display:none;">

                            <input type="text" class="friday_timepicker_start" name="friday_starttimeArray[]" /> to
                            <input type="text" class="friday_timepicker_end" name="friday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 friday_addmore_Time">Add More</button>

                        </div>

                        
                        <div class="saturday_time_wrapper" id="saturday_time_wrapper" style="display:none;">

                            <input type="text" class="saturday_timepicker_start" name="saturday_starttimeArray[]" /> to
                            <input type="text" class="saturday_timepicker_end" name="saturday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 saturday_addmore_Time">Add More</button>

                        </div>

                        
                        <div class="sunday_time_wrapper" id="sunday_time_wrapper" style="display:none;">

                            <input type="text" class="sunday_timepicker_start" name="sunday_starttimeArray[]" /> to
                            <input type="text" class="sunday_timepicker_end" name="sunday_endtimeArray[]" />
                            <button type="button" class="btn btn-primary mt-2 sunday_addmore_Time">Add More</button>

                        </div>


                    </div>



                    <div class="form-group">
                        <input type="text" class="form-control" id="maxCapacity" name="max_capacity" placeholder="Max capacity" required>
                        <?php
                        if (!empty($data['max_capacity_err'])) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $data['max_capacity_err'];
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="credit" name="credit" placeholder="Credit" required>
                        <?php
                        if (!empty($data['credit_err'])) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $data['credit_err'];
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required>
                        <?php
                        if (!empty($data['description_err'])) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $data['description'];
                            echo '</div>';
                        }
                        ?>
                    </div>

                    <button type="submit" id="closeAddActivityModal" class="btn btn-success btn-block" class="btn btn-primary">Done</button>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>


<nav class="navbar fixed-bottom navbar-expand-sm visible-xs-block " id="desktopHide" style="background-color:orange;">
    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">

            <i class="fas fa-home"></i>
        </span>
    </div>

    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">
            <i class="fas fa-map-marked-alt"></i>
        </span>
    </div>
    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">

            <i class="fas fa-calendar-alt "></i>

        </span>
    </div>


    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">
            <i class="fas fa-user"></i>
        </span>
    </div>

    <div class="btn-group" role="group" aria-label="Third group">
        <span style="font-size: 2em;">
            <i class="fas fa-cogs"></i>
        </span>
    </div>

</nav>
<?php require APPROOT . '/views/inc/footer.php'; ?>