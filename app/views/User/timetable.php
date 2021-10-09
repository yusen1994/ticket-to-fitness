<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="container-fluid mt-3">

	<div class="row justify-content-center">
		<div class="col-sm-12 col-md-8 col-xl-6">
			<div class="btn-group btn-group-lg buttons_days_of_week " role="group" aria-label="buttons_days_of_week">
				<a href="<?php echo URLROOT ?>/User/timetable/monday" class="btn btn-light  <?php
																							$url = $_SERVER['REQUEST_URI'];
																							$urlarray = explode("/", $url);
																							$end = $urlarray[count($urlarray) - 1];
																							if (
																								strpos($end, 'monday') !== false ||
																								strpos($end, 'Timetable') !== false
																							) {
																								echo 'active';
																							} ?>">M</a>
				<a href="<?php echo URLROOT ?>/User/timetable/tuesday" class="btn btn-light <?php
																							$url = $_SERVER['REQUEST_URI'];
																							$urlarray = explode("/", $url);
																							$end = $urlarray[count($urlarray) - 1];
																							if (strpos($end, 'tuesday') !== false) {
																								echo 'active';
																							} ?>">T</a>
				<a href="<?php echo URLROOT ?>/User/timetable/wednesday" class="btn btn-light <?php
																								$url = $_SERVER['REQUEST_URI'];
																								$urlarray = explode("/", $url);
																								$end = $urlarray[count($urlarray) - 1];
																								if (strpos($end, 'wednesday') !== false) {
																									echo 'active';
																								} ?>">W</a>
				<a href="<?php echo URLROOT ?>/User/timetable/thursday" class="btn btn-light <?php
																								$url = $_SERVER['REQUEST_URI'];
																								$urlarray = explode("/", $url);
																								$end = $urlarray[count($urlarray) - 1];
																								if (strpos($end, 'thursday') !== false) {
																									echo 'active';
																								} ?>">T</a>
				<a href="<?php echo URLROOT ?>/User/timetable/friday" class="btn btn-light <?php
																							$url = $_SERVER['REQUEST_URI'];
																							$urlarray = explode("/", $url);
																							$end = $urlarray[count($urlarray) - 1];
																							if (strpos($end, 'friday') !== false) {
																								echo 'active';
																							} ?>">F</a>
				<a href="<?php echo URLROOT ?>/User/timetable/saturday" class="btn btn-light <?php
																								$url = $_SERVER['REQUEST_URI'];
																								$urlarray = explode("/", $url);
																								$end = $urlarray[count($urlarray) - 1];
																								if (strpos($end, 'saturday') !== false) {
																									echo 'active';
																								} ?>">S</a>
				<a href="<?php echo URLROOT ?>/User/timetable/sunday" class="btn btn-light <?php
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
		foreach ($data['user_activity'] as $single) {
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
							 <a href="' . URLROOT . '/Activity/activitydetails/' . $single->activity_id . '/' . $single->gym_id . '"style="text-decoration:none!important; color:black;">
								<div class="row">
									<div class="col-4 text-center pl-0">
										<img src="' . URLROOT . '/images/gym_icon.png" class="gym-logo-timetable" />
									</div>
									<div class="col-8 pl-md-0">
										<div class="row">
											<div class="col-12">
												<h4><b>' . $single->gym_name . '</b></h4>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-12">
												<h4><b>' . $single->category . '</b></h4>
											</div>
										</div>
									</div>
								</div>
								<div class="row justify-content-end mt-3">
									<div class="col-sm-12 col-md-8">
										<p>' . $single->activity_name . '</p>
									</div>
									<div class="col-sm-12 col-md-8">
										<p>' . $single->gym_address . '</p>
									</div>
									<div class="col-sm-12 col-md-8">
										<div class="row">
									<div class="col-7 pr-0">
										<p>Capacity: <b>' . $single->max_capacity . '</b></p>
									</div>
								</div>
							</a>
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