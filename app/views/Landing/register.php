<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="login-form">
	<form action="<?php echo URLROOT; ?>/accounts/register" method="post">
		<h2 class="text-center">Register</h2>
		<div class="form-group">

			<input type="text" id="username" class="form-control input-style" placeholder="Username" value="<?php if (!empty($data['username'])) {
																												echo $data['username'];
																											} ?>" name="username" required title="">
			<?php
			if (!empty($data['username_err'])) {
				echo "<span>";
				echo $data['username_err'];
				echo "</span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="text" id="firstname" class="form-control input-style" placeholder="Firstname" value="<?php if (!empty($data['firstname'])) {
																													echo $data['firstname'];
																												} ?>" name="firstname" required title="">
			<?php
			if (!empty($data['firstname_err'])) {
				echo "<span>";
				echo $data['firstname_err'];
				echo "</span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="text" id="lastname" class="form-control input-style" placeholder="Lastname" value="<?php if (!empty($data['lastname'])) {
																												echo $data['lastname'];
																											} ?>" name="lastname" required title="">
			<?php
			if (!empty($data['lastname_err'])) {
				echo "<span>";
				echo $data['lastname_err'];
				echo "</span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="text" id="email" class="form-control input-style" placeholder="Email" value="<?php if (!empty($data['email'])) {
																											echo $data['email'];
																										} ?>" name="email" required title="">

			<?php
			if (!empty($data['email_err'])) {
				echo "<span>";
				echo $data['email_err'];
				echo "</span>";
			}
			?>
		</div>
		<div class="line-separator">

		</div>
		<div class="form-group">
			<input type="password" id="password" class="form-control input-style" placeholder="Password" name="password" required>

			<?php
			if (!empty($data['password_err'])) {
				echo "<span>";
				echo $data['password_err'];
				echo "</span>";
			}
			?>
		</div>
		<div class="form-group">
			<input type="password" id="cpassword" class="form-control input-style" placeholder="Confirm Password" name="cpassword" required>

			<?php
			if (!empty($data['cpassword_err'])) {
				echo "<span>";
				echo $data['cpassword_err'];
				echo "</span>";
			}
			?>
		</div>
		<div class="form-group">
			<button type="submit" class="btn register-button btn-block">Register</button>
		</div>

	</form>

	<p class="text-center"><a href="<?php echo URLROOT; ?>/accounts/login">Back</a></p>



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
</style>

<?php require APPROOT . '/views/inc/footer.php'; ?>