<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>

<div class="container-fluid mt-3">

	<div class="btn-group btn-group-lg buttons_days_of_week " role="group" aria-label="buttons_days_of_week">
		<a href="<?php echo URLROOT ?>/Gym/timetable/monday" class="btn btn-light  <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'monday') !== false) {
                                                    echo 'active';
                                                } ?>">M</a>
		<a href="<?php echo URLROOT ?>/Gym/timetable/tuesday" class="btn btn-light <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'tuesday') !== false) {
                                                    echo 'active';
                                                } ?>">T</a>
		<a href="<?php echo URLROOT ?>/Gym/timetable/wednesday" class="btn btn-light <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'wednesday') !== false) {
                                                    echo 'active';
                                                } ?>">W</a>
		<a href="<?php echo URLROOT ?>/Gym/timetable/thursday" class="btn btn-light <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'thursday') !== false) {
                                                    echo 'active';
                                                } ?>">T</a>
		<a href="<?php echo URLROOT ?>/Gym/timetable/friday" class="btn btn-light <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'friday') !== false) {
                                                    echo 'active';
                                                } ?>">F</a>
		<a href="<?php echo URLROOT ?>/Gym/timetable/saturday" class="btn btn-light <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'saturday') !== false) {
                                                    echo 'active';
                                                } ?>">S</a>
		<a href="<?php echo URLROOT ?>/Gym/timetable/sunday" class="btn btn-light <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'sundayx') !== false) {
                                                    echo 'active';
                                                } ?>">S</a>

	</div>

</div>

<br>
<br>

		
		<?php 
		if (empty($data['error'])) {
		foreach ($data['gym_activity'] as $single) {

			echo '<div class="container">
					<div class="row">
						<div class="col-lg">
							<div class="card activity_card">
								<div class="card-body">
									<div class="container">
										<div class="row">
											<div class="col-sm-4">
											<h4 class="card-title mb-3" style="color:#E46E2E"> <b>' . $single->time . '</b> </h4>

												<img src="' . URLROOT . '/images/gym_icon.png" width="100%" height="100%"  />

											</div>
											<div class="col-sm-8">
												<h4 class="card-title"> <b>' . $single->activity_name . '</b> </h4>
												<hr>
												<div class="container activity_gym_info">
													<div class="row">
														<div class="col-lg-6">
															<p> <span><img src="' . URLROOT . '/images/weights.png" width="10%" style="background-color: #EF8830; border-radius: 20px;"></span>' . $single->category . '</p><br> 
															<p> <span><img src="' . URLROOT . '/images/frequency_org.png" width="10%"></span> ';
			foreach ((unserialize($single->sessions_per_week)) as $session_per_week) {
				echo $session_per_week . "  ";
			}
			echo ' </p>
														</div>
														<div class="col-lg-6">
															<p> <span><img src="' . URLROOT . '/images/location.png" width="10%"></span>' . $data['gym_address'] . '</p><br>
															<p> <span><img src="' . URLROOT . '/images/group.png" width="10%"></span>' . $single->max_capacity . '</p>
														</div>
													</div>
												</div>
											</div>

                                            
										</div>

                                        
									</div>
									<br>
									
								</div>
							</div>
						</div>

					</div>
				</div>';
		} }else{
			
			echo '<div class="alert alert-danger" role="alert">
			'.$data['error'].'
		</div>';
		
			
		}?>




	</div>
	<br>
	<br>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>