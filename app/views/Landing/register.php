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
								<td><label for="username">User Name</label></td>
								<td><input type="text" id="username" name="username" value = "<?php if(!empty($data['username'])) {echo $data['username']; } ?> " required title=""></td>
								<?php 
									if(!empty($data['username_err'])){
										echo "<span>"
										echo $data['username_err'];
										echo "</span>"
									}
								?>
							</tr>
							<tr>
								<td><label for="firstname">Frist Name</label></td>
								<td><input type="text" id="firstname" name="firstname" value = "<?php if(!empty($data['firstname'])) {echo $data['firstname']; } ?> "  required title=""></td>
								<?php 
									if(!empty($data['firstname_err'])){
										echo "<span>"
										echo $data['firstname_err'];
										echo "</span>"
									}
								?>
							</tr>
							<tr>
								<td><label for="lastname">Last Name</label></td>
								<td><input type="text" id="lastname" name="lastname" value = "<?php if(!empty($data['lastname'])) {echo $data['lastname']; } ?> "  required title=""></td>
								<?php 
									if(!empty($data['lastname_err'])){
										echo "<span>"
										echo $data['lastname_err'];
										echo "</span>"
									}
								?>
							</tr>
							<tr>
								<td><label for="email">Email</label></td>
								<td><input type="email" id="email" name="email" value = "<?php if(!empty($data['email'])) {echo $data['email']; } ?> "  required title=""></td>
								<?php 
									if(!empty($data['email_err'])){
										echo "<span>"
										echo $data['email_err'];
										echo "</span>"
									}
								?>	
							</tr>
							<tr>
								<td><label for="password">Password</label></td>
								<td><input type="password" id="password" name="password" value = "<?php if(!empty($data['password'])) {echo $data['password']; } ?> "  required></td>
								<?php 
									if(!empty($data['password_err'])){
										echo "<span>"
										echo $data['password_err'];
										echo "</span>"
									}
								?>
							</tr>
							<tr>
								<td><label for="cpassword">Confirm password</label></td>
								<td><input type="password" id="cpassword" name="cpassword" value = "<?php if(!empty($data['cpassword'])) {echo $data['cpassword']; } ?> "  required></td>
								<?php 
									if(!empty($data['cpassword_err'])){
										echo "<span>"
										echo $data['cpassword_err'];
										echo "</span>"
									}
								?>	
							</tr>
						</table>
						<p><input type="submit" name = "submit" value="Register"></p>
  					</form>
  				</div>
			</div>
  		</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
