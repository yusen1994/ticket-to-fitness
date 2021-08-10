<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>


<!-- Content start -->
<div class="content mt-2">
    <div>
        <h3 style="font-weight:bold">Hey, <span style="color: #E46E2E">Lucas!</h3></span>
    </div>
    <div>
        <span style="font-size: 15px;font-weight:bold">Your <span style="color: #E46E2E">weekly</span> stats are in!</span>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div class="row text-center">
                    <div class="col-4">
                        <span class="number">4</span>
                        <hr>
                        <b><span class="desc">classes</span></b>
                    </div>
                    <div class="col-4">
                        <span class="number">2</span>
                        <hr>
                        <b><span class="desc">gyms</span></b>
                    </div>
                    <div class="col-4">
                        <span class="number">3</span>
                        <hr>
                        <b><span class="desc">streak</span></b>
                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>

    <div class="mt-3">
        <span style="font-size: 24px;font-weight:bold">My <span style="color: #E46E2E">Credits</span></span>
        <div class="userdashboard-btn-group" style="float: right;margin-top: -10px">
            <a class="buy-btn" href="<?php echo URLROOT; ?>/User/credits">
                <span>$ Buy</span>
            </a>
        </div>
    </div>

    <div class=" container mt-3">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-8">
                <div class="row text-center">
                    <div class="col-4">
                        <span class="number-medium"><?php echo $data['user_credit']->total_credit; ?></span>
                        <hr>
                        <b><span class="desc">Wallet</span></b>
                    </div>
                    <div class="col-4">
                        <span class="number-medium">2</span>
                        <hr>
                        <b><span class="desc">ThisWeek</span></b>
                    </div>
                    <div class="col-4">
                        <span class="number-medium">3</span>
                        <hr>
                        <b><span class="desc">Available</span></b>
                    </div>
                </div>
            </div>
            <div class="col-2">

            </div>
        </div>
    </div>


    <div class="userdashboard-btn-group mt-3 ">
        <button>
            <a href="<?php echo URLROOT ?>/User/MyActivity" style="text-decoration:none; color:inherit;"><span>My Activities</span></a>
            <span class="iconfont">&#xe60d;</span> </a>
        </button>
        <button>
            <a href="<?php echo URLROOT ?>/Activity" style="text-decoration:none; color:inherit;"><span>ALL Activities</span></a>
            <span class="iconfont">&#xe60d;</span> </a>
        </button>
        <button>
            <a href="<?php echo URLROOT ?>/User/userProfile" style="text-decoration:none; color:inherit;"> <span>My Profile</span></a>
            <span class="iconfont">&#xe60d;</span>
        </button>
        <button>
            <a href="<?php echo URLROOT ?>/User/userProfile" style="text-decoration:none; color:inherit;"> <span>Register</span></a>
            <span class="iconfont">&#xe60d;</span>
        </button>
    </div>
</div>

<!-- Content end -->
</div>


<?php

if (!empty($data['message'])) {
    echo "<div class='alert alert-success' role='alert'>";
    echo $data['message'];
    echo "</div>";
}
?>
<?php require APPROOT . '/views/inc/footer.php'; ?>"

<style>
    .buy-btn {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border: 1px solid orange;
        border-radius: 25px;
        margin: 5px;
        padding: 0 20px 0 20px;
        width: 90%;
        height: 50px;
        font-weight: bold;
        font-size: 16px;
    }
</style>