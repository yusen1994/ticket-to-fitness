<?php require APPROOT . '/views/inc/header.php'; ?>

<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="contianer-fluid">
    <div class="login-form">
        <form action="<?php echo URLROOT; ?>/accounts/login<?php if (!empty($data['continue'])) {
                                                                echo '/continue=' . $data['continue'];
                                                            } ?>" method="post">
            <h2 class="text-center"><b>Log in</b></h2>
            <div class="form-group">
                <input type="text" id="username" class="form-control input-style" placeholder="Email" value="<?php if (!empty($data['email'])) {
                                                                                                                    echo $data['email'];
                                                                                                                } ?>" name="email" required title="">
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control input-style" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn login-button btn-block">Log in</button>
            </div>
            <div class="clearfix">
                <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
                <a href="<?php echo URLROOT; ?>/Accounts/resetPassword" class="float-right">Forgot Password?</a>
            </div>
        </form>
        <p class="text-center"><b><a href="<?php echo URLROOT; ?>/accounts/register" style="color:#EF8830;">Create an Account</a></b></p>


        <?php if (!empty($data['loginError'])) {
            echo "<div class='alert alert-danger text-center' role='alert'>";
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
    <?php require APPROOT . '/views/inc/footer.php'; ?>
</div>

<style>
    .login-button {
        border-radius: 12px;
        background-color: #EF8830;
        color: white;
    }

    .input-style {
        border-radius: 12px;
    }
</style>