<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>

<div class="container-fluid mt-3">

	<div class="row justify-content-center">
		<div class="col-sm-12 col-md-8 col-xl-6">
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
	</div>


	<?php
	if (!empty($data['success'])) {
		echo '
		<div class="alert alert-success" role="alert">' . $data['success'] . '
				</div>';
	}
	if (empty($data['error'])) {
		foreach ($data['gym_activity'] as $single) {

			echo '
					<div class="row justify-content-center mt-3">
						<div class="col-sm-12 col-md-8 col-xl-4 align-self-center" style="flex-direction=row;">
							<svg xmlns="http://www.w3.org/2000/svg" width="5" height="12" viewBox="0 0 5 12">
								<rect id="Rectangle_101" data-name="Rectangle 101" width="5" height="12" fill="#ef8830"/>
							</svg>
							<b>' . $single->time . '</b>
						</div>
					</div>
					<div class="row justify-content-center mt-3" style="background-color: white; padding:15px;">
						<div class="col-sm-12 col-md-8 col-md-8 col-xl-4">
							<div class="row">
								<div class="col-12 pl-md-0">
									<h4><b>' . $single->category . '</b></h4>
								</div>
							</div>
									<div class="row mt-3">
										<div class="col-sm-12 col-md-8">
											<p>' . $single->activity_name . '</p>
										</div>
										<div class="col-sm-12 col-md-8">
											<div class="row">
										<div class="col-7 pr-0">
											<p>Capacity: <b>' . $single->max_capacity . '</b></p>
										</div>
										<div class="col-5 text-right">
											<div class="row">
												<div class="col-12">
													<span style="color: #EF8830;">
														<svg xmlns="http://www.w3.org/2000/svg" width="32.11" height="36.664" viewBox="0 0 32.11 36.664">
															<g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.303, 33.639)">
																<path id="Path_63" data-name="Path 63" d="M31.118,20.263H3.618A3.623,3.623,0,0,1,0,16.645V13.75a.724.724,0,0,1,.724-.724h.724a2.895,2.895,0,0,0,0-5.789H.724A.724.724,0,0,1,0,6.513V3.618A3.623,3.623,0,0,1,3.618,0h27.5a3.623,3.623,0,0,1,3.618,3.618V6.513a.724.724,0,0,1-.724.724h-.724a2.895,2.895,0,0,0,0,5.789h.724a.724.724,0,0,1,.724.724v2.895A3.621,3.621,0,0,1,31.118,20.263ZM1.447,14.473v2.171a2.174,2.174,0,0,0,2.171,2.171h27.5a2.174,2.174,0,0,0,2.171-2.171V14.473h0a4.342,4.342,0,0,1,0-8.684V3.618a2.174,2.174,0,0,0-2.171-2.171H3.618A2.174,2.174,0,0,0,1.447,3.618V5.789a4.342,4.342,0,1,1,0,8.684Z" transform="translate(0 8.677)" fill="#ef8830"/>
																<path id="Path_64" data-name="Path 64" d="M.724,2.895A.724.724,0,0,1,0,2.171V.724a.724.724,0,1,1,1.447,0V2.171A.724.724,0,0,1,.724,2.895Z" transform="translate(11.579 8.677)" fill="#ef8830"/>
																<path id="Path_65" data-name="Path 65" d="M.724,10.019A.724.724,0,0,1,0,9.295V6.847a.724.724,0,1,1,1.447,0V9.3A.723.723,0,0,1,.724,10.019Zm0-6.122A.724.724,0,0,1,0,3.173V.724a.724.724,0,0,1,1.447,0V3.173A.724.724,0,0,1,.724,3.9Z" transform="translate(11.579 13.8)" fill="#ef8830"/>
																<path id="Path_66" data-name="Path 66" d="M.724,2.895A.724.724,0,0,1,0,2.171V.724a.724.724,0,1,1,1.447,0V2.171A.724.724,0,0,1,.724,2.895Z" transform="translate(11.579 26.046)" fill="#ef8830"/>
																<path id="Path_67" data-name="Path 67" d="M.724,10.125a.723.723,0,0,1-.253-1.4L23.483.131A2.21,2.21,0,0,1,26.3,1.467l2.61,7.7a.724.724,0,0,1-1.371.465l-2.61-7.7a.74.74,0,0,0-.939-.446L.975,10.079a.7.7,0,0,1-.252.046Z" transform="translate(2.895 0)" fill="#ef8830"/>
															</g>
														</svg>
														<b>' . $single->credit . '</b>
													</span>
												</div>
											</div>
											
											<div class="row justify-content-end">
												<div class="col-12 text-right">
													<span style="color: #2BB730;">
														<b>$ dollar value</b>
													</span>
												</div>
											</div>

											
										</div>
									</div>
										</div>
									</div>
								</div>
							
						
					</div>';
		}
	} else {
		echo '
		<div class="row justify-content-center mt-3">
			<div class="col-sm-12 col-md-8 col-xl-4 align-self-center">
				<div class="alert alert-danger mt-3" role="alert">
					' . $data['error'] . '
				</div>
			</div>
		</div>';
	} ?>

</div>



<style>
	.gym-logo-timetable {
		min-width: 100px;
		width: 70%;
		height: auto;
	}
</style>