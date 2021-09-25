<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="login-form">
	<form action="<?php echo URLROOT; ?>/accounts/register" method="post" enctype="multipart/form-data">
		<h2 class="text-center"><b>Register</b></h2>

		<div class="form-group">
			<input type="text" id="firstname" class="form-control input-style" placeholder="Firstname" value="<?php if (!empty($data['firstname'])) {
																													echo $data['firstname'];
																												} ?>" name="firstname" required title="">
			<?php
			if (!empty($data['firstname_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['firstname_err'];
				echo "</b></span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="text" id="lastname" class="form-control input-style" placeholder="Lastname" value="<?php if (!empty($data['lastname'])) {
																												echo $data['lastname'];
																											} ?>" name="lastname" required title="">
			<?php
			if (!empty($data['lastname_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['lastname_err'];
				echo "</b></span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="text" id="email" class="form-control input-style" placeholder="Email" value="<?php if (!empty($data['email'])) {
																											echo $data['email'];
																										} ?>" name="email" required title="">

			<?php
			if (!empty($data['email_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['email_err'];
				echo "</b></span>";
			}
			?>
		</div>

		<div class="form-group">
			<input type="date" id="dob" class="form-control input-style" name="dob" value="<?php if (!empty($data['dob'])) {
																								echo $data['dob'];
																							} ?>" required title="">

			<?php
			if (!empty($data['sob_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['dob_err'];
				echo "</b></span>";
			}
			?>
		</div>

		<div class=" form-group">
			<select id="gender" class="form-control input-style" name="gender" required>
				<option value="select">Gender</option>
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>
			<?php
			if (!empty($data['gender_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['gender_err'];
				echo "</b></span>";
			}
			?>
		</div>

		<hr>
		<br>

		<div class="form-group">

			<div class="register-photo">
				<img id="img-txz" class="image-upload" src="<?php echo URLROOT; ?>/images/image.png" alt="Image">

				<input class="upload-button" id="file-txz" type="file" name="photo" enctype="multipart/form-data" class="fileInput" onchange="upload('#file-txz','#img-txz')" value="" />

			</div>

		</div>


		<hr>
		<br>

		<div class="form-group">
			<input type="password" id="password" class="form-control input-style" placeholder="Password" name="password" required>

			<?php
			if (!empty($data['password_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['password_err'];
				echo "</b></span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="password" id="cpassword" class="form-control input-style" placeholder="Confirm Password" name="cpassword" required>

			<?php
			if (!empty($data['cpassword_err'])) {
				echo "<span style='color:red;'><b>";
				echo $data['cpassword_err'];
				echo "</b></span>";
			}
			?>
		</div>
		<div class="form-group">
			<button type="submit" class="btn register-button btn-block">Register</button>
		</div>

	</form>

	<p class="text-center mt-4"><a href="<?php echo URLROOT; ?>/accounts/login">Back</a></p>



	<?php if (!empty($data['loginError'])) {
		echo "<div class='alert alert-warning' role='alert'>";
		echo $data['loginError'];
		echo "</div>";
	}
	?>
	<?php if (!empty($data['message'])) {
		echo "<div class='alert alert-success' role='alert'>";
		echo $data['message'];
		echo "</div>";
	}
	?>



</div>

<script type="text/javascript">
	var upload = function(c, d) {
		var $c = document.querySelector(c),
			$d = document.querySelector(d);
		file = $c.files[0],
			reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = function(e) {
			$d.setAttribute("src", e.target.result);
		}
	}
</script>

<style>
	.register-button {
		border-radius: 12px;
		background-color: #EF8830;
		color: white;
	}

	.input-style {
		border-radius: 12px;
	}

	.line-separator {
		height: 1px;
		background-color: white;
		margin-bottom: 15px;
	}

	.register-photo {
		display: flex;
		align-items: center;
		justify-content: flex-start;
		flex-direction: column;
		margin-bottom: 5px;
	}

	.image-upload {
		width: 200px;
		height: 200px;
		object-fit: contain;
	}

	#img-txz {
		margin-bottom: 10px;

	}
</style>