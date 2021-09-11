<?php require APPROOT . '/views/inc/header.php'; ?>
<!--HTML for homepage goes here, for CSS visit public folder-->
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-4">
            <div class="heading-container">
                <h3><b><span><a href="<?php echo URLROOT; ?>/User/credits"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Checkout</span></b></h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="background-color:white; padding-top:20px;padding-bottom:20px;margin-top:10px;">
        <div class="col-sm-12 col-lg-4">
            <div class="row" style="margin-bottom:20px;">
                <div class="col-8">
                    <span class="text-style">Total Credits</span>
                </div>
                <div class="col-2 text-right p-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21.899" height="25.005" viewBox="0 0 21.899 25.005">
                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.206, 22.942)">
                            <path id="Path_63" data-name="Path 63" d="M21.222,13.819H2.468A2.471,2.471,0,0,1,0,11.351V9.377a.494.494,0,0,1,.494-.494H.987a1.974,1.974,0,1,0,0-3.948H.494A.494.494,0,0,1,0,4.442V2.468A2.471,2.471,0,0,1,2.468,0H21.222A2.471,2.471,0,0,1,23.69,2.468V4.442a.494.494,0,0,1-.494.494H22.7a1.974,1.974,0,0,0,0,3.948H23.2a.494.494,0,0,1,.494.494v1.974A2.47,2.47,0,0,1,21.222,13.819ZM.987,9.871v1.481a1.482,1.482,0,0,0,1.481,1.481H21.222A1.482,1.482,0,0,0,22.7,11.351V9.871h0a2.961,2.961,0,0,1,0-5.923V2.468A1.482,1.482,0,0,0,21.222.987H2.468A1.482,1.482,0,0,0,.987,2.468V3.948a2.961,2.961,0,0,1,0,5.923Z" transform="translate(0 5.918)" />
                            <path id="Path_64" data-name="Path 64" d="M.494,1.974A.494.494,0,0,1,0,1.481V.494a.494.494,0,1,1,.987,0v.987A.494.494,0,0,1,.494,1.974Z" transform="translate(7.897 5.918)" />
                            <path id="Path_65" data-name="Path 65" d="M.494,6.833A.494.494,0,0,1,0,6.339V4.67a.494.494,0,1,1,.987,0V6.34A.493.493,0,0,1,.494,6.833Zm0-4.175A.494.494,0,0,1,0,2.164V.494a.494.494,0,0,1,.987,0v1.67A.494.494,0,0,1,.494,2.657Z" transform="translate(7.897 9.411)" />
                            <path id="Path_66" data-name="Path 66" d="M.494,1.974A.494.494,0,0,1,0,1.481V.494a.494.494,0,1,1,.987,0v.987A.494.494,0,0,1,.494,1.974Z" transform="translate(7.897 17.763)" />
                            <path id="Path_67" data-name="Path 67" d="M.494,6.905A.493.493,0,0,1,.321,5.95L16.015.089A1.507,1.507,0,0,1,17.935,1l1.78,5.252a.494.494,0,0,1-.935.317L17,1.317a.5.5,0,0,0-.641-.3L.665,6.874a.476.476,0,0,1-.172.032Z" transform="translate(1.974 0)" />
                        </g>
                    </svg>
                </div>
                <div class="col-2 text-sm-center text-lg-left">
                    <span class="text-style-bold"><?php echo $data['total_credit']; ?></span>
                </div>
            </div>
            <div class="row" style="margin-bottom:10px;">
                <div class="col-8">
                    <span class="text-style">Purchase Amount</span>
                </div>
                <div class="col-2 text-right p-0">
                    <b>$</b>
                </div>
                <div class="col-2 text-sm-center text-lg-left">
                    <span class="text-style-bold"><?php echo $data['total_credit']; ?></span>
                </div>
            </div>
            <div class="row" style="margin-bottom:20px;">
                <div class="col-12">
                    <div class="line-separater"></div>
                </div>
            </div>

            <div class="row" style="margin-bottom:10px;">
                <div class="col-8">
                    <span class="text-style-bold">Total</span>
                </div>
                <div class="col-2 text-right p-0">
                    <b>$</b>
                </div>
                <div class="col-2 text-sm-center text-lg-left">
                    <span class="text-style-bold"><?php echo $data['cost']; ?></span>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-end justify-content-lg-center">
        <div class="col-6 col-lg-4">
            <div class="row justify-content-end" style="margin-top:20px; margin-bottom:200px;">
                <div class="col-sm-6 col-lg-3 text-center">
                    <a class="checkout-confirm-btn" style="max:width:50px !important;" href=" <?php echo URLROOT; ?>/user/confirmPurchase/<?php echo $data['cost']; ?>/<?php echo $data['total_credit']; ?>">
                        <!--Later need to redirect to payment page -->
                        Confirm
                    </a>
                </div>
            </div>
        </div>
    </div>



</div>



<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
    .heading-container {
        margin-top: 20px;

    }

    .checkout-container {
        height: 200px;
        margin-top: 10px;
        margin-bottom: 20px;
        margin-left: 15px;
        margin-right: 15px;
        padding-left: 15px;
        padding-right: 15px;
        background-color: #ffffff;
        border-radius: 28px;
    }

    .text-style {
        font-size: 18px;
    }

    .text-style-bold {
        font-size: 18px;
        font-weight: bold;
    }

    .line-separater {
        margin-top: 20px;
        height: 1px;
        background-color: #D7D7D7;
    }

    .confirm-text {
        font-size: 12px;
    }

    .confirm-text-bold {
        font-size: 12px;
        font-weight: bold;
    }

    .checkout-back-btn {
        display: block;
        margin: auto;
        border-width: 1px;
        border-style: solid;
        border-radius: 24px;
        border-color: #EF8830;
        background-color: white;
        color: black;
        height: 46px;
        width: 100%;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        line-height: 42px;
    }

    .checkout-confirm-btn {
        display: block;
        margin: auto;
        border-width: 1px;
        border-radius: 24px;
        border-color: white;
        background-color: #2BB730;
        color: white;
        height: 46px;
        width: 100%;
        font-weight: bold;
        text-align: center;
        text-decoration: none;
        line-height: 42px;
    }
</style>