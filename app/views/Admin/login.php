<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="login-form">
    <form action="<?php echo URLROOT; ?>/Administrator/login" method="post">
        <h2 class="text-center">Admin Login</h2>       
        <div class="form-group">
		<input type="text" id="username" class="form-control" placeholder="Username" value = "<?php if(!empty($data['username'])) {echo $data['username']; } ?>" name="username" required title="">
        </div>
        <div class="form-group">
		<input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        
    </form>
   


					<?php if (!empty($data['login_err'])){
						echo "<div class='alert alert-warning' role='alert'>";
						echo $data['login_err']; 
						echo "</div>";
					}
					?>
			
					
					
		

					</div>

	
    
<?php require APPROOT . '/views/inc/footer.php'; ?>

