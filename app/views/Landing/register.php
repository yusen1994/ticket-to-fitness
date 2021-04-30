<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for Registeration and Login goes here, for CSS visit public folder-->
<!--If you would like to create different page for login and register create a folder called accounts instead and create two new
files, one for login and registeration-->
<!--Small Change -->
<div class = "container-fluid" id = "container-register">
            <div class="jumbotron" style="background-color:#ef8830;" >
               <form method = "POST" action="<?php echo URLROOT; ?>/accounts/register">
                    <table>
                        <tr>
                            
							<td id="username_slide">
							
                                <div class="input-group">
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_prev"><i class="fas fa-arrow-circle-left" style="color:white;"></i></button>
                                <input class= "form-control form-control-lg" type="text" id="username" value = "<?php if(!empty($data['username'])) {echo $data['username']; } ?>"  name="username" placeholder="username"> 
								<?php 
									if(!empty($data['username_err'])){
										echo "<span>";
										echo $data['username_err'];
										echo "</span>";
									}
								?>
                                    <button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_next"><i class="fas fa-arrow-circle-right" style="color:white;"></i></button>
                                 </div>
                            </td> 

                            <td id="firstname_slide" class="input_hide">
                                <div class="input-group">
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_prev1"><i class="fas fa-arrow-circle-left" style="color:white;"></i></button>

                                <input class= "form-control form-control-lg" type="text"  value = "<?php if(!empty($data['firstname'])) {echo $data['firstname']; } ?>" id="firstname" placeholder="firstname" name="firstname"> 
                                <?php 
									if(!empty($data['firstname_err'])){
										echo "<span>";
										echo $data['firstname_err'];
										echo "</span>";
									}
								?>    
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_next1"><i class="fas fa-arrow-circle-right" style="color:white;"></i></button>
                                 </div>
                            </td> 
                            
                             <td id="lastname_slide" class="input_hide">
                                <div class="input-group">
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_prev2"><i class="fas fa-arrow-circle-left" style="color:white;" ></i></button>

                                <input class= "form-control form-control-lg" type="text"  value = "<?php if(!empty($data['lastname'])) {echo $data['lastname']; } ?>" id="lastname" placeholder="lastname" name="lastname"> 
								<?php 
									if(!empty($data['lastname_err'])){
										echo "<span>";
										echo $data['lastname_err'];
										echo "</span>";
									}
								?>    
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_next2"><i class="fas fa-arrow-circle-right" style="color:white;"></i></button>
                                 </div>
                            </td> 
                            
                            <td id="email_slide" class="input_hide">
                                <div class="input-group">
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_prev3"><i class="fas fa-arrow-circle-left" style="color:white;" ></i></button>

                                <input class= "form-control form-control-lg" type="email"  value = "<?php if(!empty($data['email'])) {echo $data['email']; } ?>" id="email"  placeholder="email" name="email"> 
								<?php 
									if(!empty($data['email_err'])){
										echo "<span>";
										echo $data['email_err'];
										echo "</span>";
									}
								?>  
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_next3"><i class="fas fa-arrow-circle-right" style="color:white;"></i></button>
                                 </div>
                            </td> 
                            
                            <td id="password_slide" class="input_hide">
                                <div class="input-group">
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_prev4"><i class="fas fa-arrow-circle-left" style="color:white;"></i></button>

                                <input class= "form-control form-control-lg" type="password"  value = "<?php if(!empty($data['password'])) {echo $data['password']; } ?>" id="password" placeholder="password" name="password"> 
                                <?php 
									if(!empty($data['password_err'])){
										echo "<span>";
										echo $data['password_err'];
										echo "</span>";
									}
								?>   
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_next4"><i class="fas fa-arrow-circle-right" style="color:white;"></i></button>
                                 </div>
                            </td> 

							<td id="cpassword_slide" class="input_hide">
                                <div class="input-group">
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_prev5"><i class="fas fa-arrow-circle-left" style="color:white;" ></i></button>

                                <input class= "form-control form-control-lg" type="password"  value = "<?php if(!empty($data['cpassword'])) {echo $data['cpassword']; } ?>" id="cpassword" placeholder="confirm password" name="cpassword"> 
                                <?php 
									if(!empty($data['cpassword_err'])){
										echo "<span>";
										echo $data['cpassword_err'];
										echo "</span>";
									}
								?>	    
								<button type ="button" class="btn btn-outline-secondary btn-lg" id = "btn_next5"><i class="fas fa-arrow-circle-right" style="color:white;"></i></button>
                                 </div>
								<div class="d-flex justify-content-center ">	
								 <button type="submit" class="btn btn-secondary">Submit</button>
								</div>	
                            </td> 
                            

                             
                           
                        </tr>
                    </table>
                </form>
				<a href="<?php echo URLROOT; ?>" class="btn btn-lg btn-outline-light mx-1">Back</a> 

                
            </div>
            
           
        </div> 
        
  


<?php require APPROOT . '/views/inc/footer.php'; ?>
