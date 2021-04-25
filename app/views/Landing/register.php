<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for Registeration and Login goes here, for CSS visit public folder-->
<!--If you would like to create different page for login and register create a folder called accounts instead and create two new
files, one for login and registeration-->
<!--Small Change -->
  
<div class="container card-test">
  			<div class="card">
  				<div class="card-header">
  					<h4> Register </h4>

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
								<td><label for="first_name">Frist Name</label></td>
								<td><input type="text" id="first_name" name="first_name" required title=""></td>
							</tr>
							<tr>
								<td><label for="last_name">Last Name</label></td>
								<td><input type="text" id="last_name" name="last_name" required title=""></td>
							</tr>
							<tr>
								<td><label for="email">Email</label></td>
								<td><input type="email" id="email" name="email" required title=""></td>
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td><input type="password" id="password" name="password" required></td>
							</tr>
							<tr>
								<td><label for="confirm_password">Confirm password</label></td>
								<td><input type="confirm_password" id="confirm_password" name="password" required></td>
							</tr>
						</table>
						<p><input type="submit" value="Register"></p>
  					</form>
  				</div>




  			</div>
  		</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
