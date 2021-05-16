<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<div class="container">
	<div class="row" id ="container-passwordreset">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="Email address" class="form-gitcontrol"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <p class="text-center"><a href="<?php echo URLROOT; ?>/accounts/login">Cancel</a></p>

                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>

                    <?php
                        if(!empty($data['email_err'])){
                            echo "<div class='alert alert-danger' role='alert'>";
                                echo $data['email_err'];
                            echo "</div>";

                        }

                    ?>

                    <?php   
                        if(!empty($data['warning'])){
                            echo "<div class='alert alert-danger' role='alert'>";
                                echo $data['warning'];
                            echo "</div>";

                        }

                    ?>
                  
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>




