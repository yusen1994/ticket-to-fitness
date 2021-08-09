<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="login-form">
    <form action="<?php echo URLROOT; ?>/accounts/login" method="post">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
		<input type="text" id="username" class="form-control" placeholder="Username" value = "<?php if(!empty($data['username'])) {echo $data['username']; } ?>" name="username" required title="">
        </div>
        <div class="form-group">
		<input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="<?php echo URLROOT; ?>/Accounts/resetPassword" class="float-right">Forgot Password?</a>
        </div>        
    </form>
    <p class="text-center"><a href="<?php echo URLROOT; ?>/accounts/register">Create an Account</a></p>


					<?php if (!empty($data['loginError'])){
						echo "<div class='alert alert-danger text-center' role='alert'>";
						echo $data['loginError']; 
						echo "</div>";
					}
					?>
					<?php if (!empty($data['message'])){
						echo "<div class='alert alert-success' role='alert'>";
						echo $data['message']; 
						echo "</div>";
					}
					?>
					
		

					</div>

	
    
<?php require APPROOT . '/views/inc/footer.php'; ?>

