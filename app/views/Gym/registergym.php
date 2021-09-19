<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!-- IF USER IS LOGGED IN -->
<?php if (!empty($_SESSION['user_id'])) {
    require APPROOT . '/views/User/dashboardmenu.php';
} ?>

<div class="container-fluid mt-2 mb-5">

    <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-lg-4">
            <h3><b>Register a Gym</b></h3>
        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-md-8 col-lg-5 col-xl-4 text-center">
            <div class="background-text-card">
                <p class="p-0 m-0"><b>Start earning money for your classes on Fitch, now!</b></p>
            </div>
        </div>
    </div>


    <form action="<?php echo URLROOT; ?>/Accounts/registerGym" method="post">

        <div class="form-group">
            <div class="row justify-content-center mt-3">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <h4 class="mb-3"><b>Gym Name</b></h4>
                    <input type="text" id="gymname" class="form-control input-style" placeholder="Gym Name" value="<?php if (!empty($data['gym_name'])) {
                                                                                                                        echo $data['gym_name'];
                                                                                                                    } ?>" name="gym_name" required title="">
                    <?php
                    if (!empty($data['gym_name_err'])) {
                        echo "<span>";
                        echo $data['gym_name_err'];
                        echo "</span>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <h4 class="mb-3"><b>Address</b></h4>
                    <input type="text" id="gymaddress" class="form-control input-style" placeholder="Address" value="<?php if (!empty($data['gym_address'])) {
                                                                                                                            echo $data['gym_address'];
                                                                                                                        } ?>" name="gym_address" required title="">
                </div>
            </div>
        </div>

        <div class="form-group" id="lat_area">
            <input type="hidden" name="latitude" id="latitude" class="form-control input-style" placeholder="Latitude">

        </div>

        <div class="form-group" id="long_area">
            <input type="hidden" id="longitude" name="longitude" class="form-control input-style" placeholder="Longitude">

        </div>

        <div class="form-group">
            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <h4 class="mb-3"><b>Upload Logo</b></h4>
                    <div class="register-photo">
                        <img id="img-txz" class="image-upload" src="<?php echo URLROOT; ?>/images/image.png" alt="Image">

                        <input class="upload-button" id="file-txz" type="file" name="photo" enctype="multipart/form-data" class="fileInput" onchange="upload('#file-txz','#img-txz')" value="" />

                    </div>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <h4 class="mb-3"><b>Email</b></h4>
                    <input type="text" id="gymemail" class="form-control input-style" placeholder="Gym Email" value="<?php if (!empty($data['gym_email'])) {
                                                                                                                            echo $data['gym_email'];
                                                                                                                        } ?>" name="gym_email" required title="">
                    <?php
                    if (!empty($data['gym_email_err'])) {
                        echo "<span>";
                        echo $data['gym_email_err'];
                        echo "</span>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <h4 class="mb-3"><b>Phone Number</b></h4>
                    <input type="text" id="phonenumber" class="form-control input-style" placeholder="Phone Number" value="<?php if (!empty($data['phone_number'])) {
                                                                                                                                echo $data['phone_number'];
                                                                                                                            } ?>" name="phone_number" required title="">

                    <?php
                    if (!empty($data['phone_number_err'])) {
                        echo "<span>";
                        echo $data['phone_number_err'];
                        echo "</span>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <h4 class="mb-3"><b>Australian Business Number</b></h4>
                    <input type="text" id="abn" class="form-control input-style" placeholder="ABN" name="abn" required>

                    <?php
                    if (!empty($data['abn_err'])) {
                        echo "<span>";
                        echo $data['abn_err'];
                        echo "</span>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row justify-content-center mt-4">
                <div class="col-sm-12 col-lg-5 col-xl-3">
                    <button type="submit" class="register-done-btn">Register</button>
                </div>
            </div>
        </div>

    </form>

    <div class="row justify-content-center mt-4">
        <div class="col-sm-12 col-lg-4">
            <p>By registering a gym you must first provide required documents to Fitch admin staff confirming the ownership of said business.
                Please allow several business days to complete your request.
            </p>
        </div>
    </div>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
    html {
        font-family: "Poppins", sans-serif;
    }

    .background-text-card {
        background-color: #EF8830;
        color: white;
        border-radius: 18px;
        padding: 15px;
    }

    .register-done-btn {
        width: 100%;
        height: 60px;
        border-radius: 18px;
        border-style: none;
        color: white;
        background-color: #0645AD;
        font-size: 18px;
        font-weight: bold;
    }

    .input-style {
        border-radius: 12px;

    }

    .register-photo {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-direction: column;
        margin-bottom: 5px;
    }

    .image-upload {
        width: 200px;
        height: 200px;
        object-fit: contain;
    }

    #img-txz {
        margin-bottom: 10px;

    }
</style>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyB3D6RYLp7QUyUuw93C-AOyP-_IPya_LXw"></script>

<script src="<?php echo URLROOT; ?>/js/address.js"></script>


<script type="text/javascript">
    var upload = function(c, d) {
        var $c = document.querySelector(c),
            $d = document.querySelector(d);
        file = $c.files[0],
            reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = function(e) {
            $d.setAttribute("src", e.target.result);
        }
    }
</script>