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
  					<form>
  						 <table>
							<tr>
								<td><label for="user_name">User Name</label></td>
								<td><input type="text" id="user_name" name="user_name" required title=""></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td><input type="password" id="password" name="password" required></td>
							</tr>
						</table>
						<p><input type="submit" value="Login"></p>
  					</form>
  				</div>

  				<div class="card-footer">
  					<div class="sign_up_link">
  						<p>Don't have an account?<a href="#">Register</a></p>
  					</div>
  					<div class="forgot_password_link">
  						<a href="#">Forgot your password?</a>
  					</div>

  				</div>



  			</div>
  		</div>

    
<?php require APPROOT . '/views/inc/footer.php'; ?>

