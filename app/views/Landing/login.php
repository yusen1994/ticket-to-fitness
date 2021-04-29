<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for Registeration and Login goes here, for CSS visit public folder-->
<!--If you would like to create different page for login and register create a folder called accounts instead and create two new
files, one for login and registeration-->
<!--Small Change -->

  		<div class="container card-test">
  			<div class="card">
  				<div class="card-header">
  					<h4> Login </h4>

  					<div class="icon">
  						<!-- later -->
  					</div>

  				</div>
  				<div class= "card-body">
  					<form method = "POST" action="<?php echo URLROOT; ?>/accounts/login">
  						 <table>
							<tr>
								<td><label for="username">User Name</label></td>
								<td><input type="text" id="username" value = "<?php if(!empty($data['username'])) {echo $data['username']; } ?>" name="username" required title=""></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td><input type="password" id="password" name="password" value = "<?php if(!empty($data['password'])) {echo $data['password']; } ?>" required></td>
							</tr>
						</table>
						<p><input type="submit" value="Login" name = "login"></p>
  					</form>
  				</div>

  				<div class="card-footer">
  					<div class="sign_up_link">
  						<p>Don't have an account?<a href="<?php echo URLROOT; ?>/accounts/register">Register</a></p>
  					</div>
  					<div class="forgot_password_link">
  						<a href="#">Forgot your password?</a>
  					</div>

					<div class = "login_error">
					<?php if (!empty($data['loginError'])){
						echo "<div class='alert alert-warning' role='alert'>";
						echo $data['loginError']; 
						echo "</div>";
					}
					?>
					
						

					
					</div>  

  				</div>



  			</div>
  		</div>

    
<?php require APPROOT . '/views/inc/footer.php'; ?>

