<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


	<div class="container-fluid gym_timetable">
		<div class="days_of_the_week">
				<div class="row">
					<div class="btn-group btn-group-lg buttons_days_of_week " role="group" aria-label="buttons_days_of_week">
						<a href = "<?php echo URLROOT?>/Gym/timetable/monday" class="btn btn-light active">Monday</a>
						<a href = "<?php echo URLROOT?>/Gym/timetable/tuesday" class="btn btn-light active">Tuesday</a>
						<a href = "<?php echo URLROOT?>/Gym/timetable/wednesday" class="btn btn-light active">Wednesday</a>
						<a href = "<?php echo URLROOT?>/Gym/timetable/thursday" class="btn btn-light active">Thursday</a>
						<a href = "<?php echo URLROOT?>/Gym/timetable/friday" class="btn btn-light active">Friday</a>
						<a href = "<?php echo URLROOT?>/Gym/timetable/saturday" class="btn btn-light active">Saturday</a>
						<a href = "<?php echo URLROOT?>/Gym/timetable/sunday" class="btn btn-light active">Sunday</a>


					</div>
				</div>
				<br>
				<br>

				<?php foreach($data['gym_activity'] as $single){

					echo '<div class="container">
					<div class="row">
						<div class="col-lg">
							<div class="card activity_card">
								<div class="card-body">
									<div class="container">
										<div class="row">
											<div class="col-sm-4">
											<h4 class="card-title mb-3" style="color:orange"> <b>'.$single->time.'</b> </h4>

												<img src="'.URLROOT.'/images/gym_icon.png" width="100%" height="100%"  />

											</div>
											<div class="col-sm-8">
												<h4 class="card-title"> <b>'.$single->activity_name.'</b> </h4>
												<hr>
												<div class="container activity_gym_info">
													<div class="row">
														<div class="col-lg-6">
															<p> <span><img src="'.URLROOT.'/images/weights.png" width="10%" style="background-color: #EF8830; border-radius: 20px;"></span>'.$single->category.'</p><br> 
															<p> <span><img src="'.URLROOT.'/images/frequency_org.png" width="10%"></span> ';
															 foreach ((unserialize($single->sessions_per_week)) as $session_per_week) {
																echo $session_per_week . "  ";
															} echo ' </p>
														</div>
														<div class="col-lg-6">
															<p> <span><img src="'.URLROOT.'/images/location.png" width="10%"></span>'.$data['gym_address'].'</p><br>
															<p> <span><img src="'.URLROOT.'/images/group.png" width="10%"></span>'.$single->max_capacity.'</p>
														</div>
													</div>
												</div>
											</div>

                                            
										</div>

                                        
									</div>
									<br>
									<div class="mt-3 btn-group btn-group-lg activities_inside_card" role="group" aria-label="buttons_activities">
										<button type="button" class="btn" style="color: #EF8830;"> <b>Edit</b></button>
										<button type="button" class="btn"  style="color: blue;"><b>Deactive</b></button>
										<button type="button" class="btn"  style="color: red;"><b>Delete</b></button>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>';


				} ?>

				

                
		</div>
		<br>
		<br>

	</div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>