<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>

<div class="container-fluid" style="padding-top:20px; margin-bottom: 100px;">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="heading-content">
                <h3><b><span><a href="<?php echo URLROOT; ?>/User"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Buy Credits</span></b></h3>
            </div>
        </div>
    </div>


    <div class="row justify-content-center mt-3">
        <div class="col-sm-12 col-md-6 col-lg-6">

            <?php
            if (!empty($data['error'])) {
                echo '<div class="alert alert-danger" role="alert">
                 ' . $data['error'] . '
                 </div>';
            } else {

                if (!empty($data['credits'])) {

                    foreach ($data['credits'] as $single) {
                        echo '
           
                 <div class="row justify-content-center">
                    <a href="' . URLROOT . '/user/checkout/' . $single->cost . '/' . $single->total_credit . '" style="text-decoration:none; color:black;">
                    <div class="col-12 col-sm-8 col-lg-6 col-xl-5">
                        <div class="background-card">
                            <div class="d-flex justify-content-center">
                                <h4 class=" p-0 m-0"><b>' . $single->name . '</b></h4>
                            </div>

                            <hr>
                            <div class="bonus-row mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.559" height="31.468" viewBox="0 0 27.559 31.468">
                                    <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.26, 28.871)">
                                        <path id="Path_63" data-name="Path 63" d="M26.708,17.391H3.106A3.11,3.11,0,0,1,0,14.286V11.8a.621.621,0,0,1,.621-.621h.621a2.484,2.484,0,1,0,0-4.969H.621A.621.621,0,0,1,0,5.59V3.106A3.11,3.11,0,0,1,3.106,0h23.6a3.11,3.11,0,0,1,3.106,3.106V5.59a.621.621,0,0,1-.621.621h-.621a2.484,2.484,0,0,0,0,4.969h.621a.621.621,0,0,1,.621.621v2.484A3.108,3.108,0,0,1,26.708,17.391ZM1.242,12.422v1.863a1.866,1.866,0,0,0,1.863,1.863h23.6a1.866,1.866,0,0,0,1.863-1.863V12.422h0a3.727,3.727,0,0,1,0-7.453V3.106a1.866,1.866,0,0,0-1.863-1.863H3.106A1.866,1.866,0,0,0,1.242,3.106V4.969a3.727,3.727,0,0,1,0,7.453Z" transform="translate(0 7.448)" fill="#ef8830" />
                                        <path id="Path_64" data-name="Path 64" d="M.621,2.484A.621.621,0,0,1,0,1.863V.621a.621.621,0,1,1,1.242,0V1.863A.621.621,0,0,1,.621,2.484Z" transform="translate(9.938 7.448)" fill="#ef8830" />
                                        <path id="Path_65" data-name="Path 65" d="M.621,8.6A.621.621,0,0,1,0,7.978v-2.1a.621.621,0,1,1,1.242,0v2.1A.62.62,0,0,1,.621,8.6Zm0-5.255A.621.621,0,0,1,0,2.723V.621a.621.621,0,0,1,1.242,0v2.1A.621.621,0,0,1,.621,3.344Z" transform="translate(9.938 11.844)" fill="#ef8830" />
                                        <path id="Path_66" data-name="Path 66" d="M.621,2.484A.621.621,0,0,1,0,1.863V.621a.621.621,0,1,1,1.242,0V1.863A.621.621,0,0,1,.621,2.484Z" transform="translate(9.938 22.354)" fill="#ef8830" />
                                        <path id="Path_67" data-name="Path 67" d="M.621,8.69A.621.621,0,0,1,.4,7.487L20.155.112a1.9,1.9,0,0,1,2.416,1.147l2.24,6.61a.621.621,0,0,1-1.176.4l-2.24-6.61a.635.635,0,0,0-.806-.383L.837,8.65a.6.6,0,0,1-.216.04Z" transform="translate(2.484 0)" fill="#ef8830" />
                                    </g>
                                </svg>

                                </svg>
                                <p class="p-0 m-0 pl-2 pr-2" style="font-size:18px; color:#EF8830;"><b>+10 Bonus</b></p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.559" height="31.468" viewBox="0 0 27.559 31.468">
                                    <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.26, 28.871)">
                                        <path id="Path_63" data-name="Path 63" d="M26.708,17.391H3.106A3.11,3.11,0,0,1,0,14.286V11.8a.621.621,0,0,1,.621-.621h.621a2.484,2.484,0,1,0,0-4.969H.621A.621.621,0,0,1,0,5.59V3.106A3.11,3.11,0,0,1,3.106,0h23.6a3.11,3.11,0,0,1,3.106,3.106V5.59a.621.621,0,0,1-.621.621h-.621a2.484,2.484,0,0,0,0,4.969h.621a.621.621,0,0,1,.621.621v2.484A3.108,3.108,0,0,1,26.708,17.391ZM1.242,12.422v1.863a1.866,1.866,0,0,0,1.863,1.863h23.6a1.866,1.866,0,0,0,1.863-1.863V12.422h0a3.727,3.727,0,0,1,0-7.453V3.106a1.866,1.866,0,0,0-1.863-1.863H3.106A1.866,1.866,0,0,0,1.242,3.106V4.969a3.727,3.727,0,0,1,0,7.453Z" transform="translate(0 7.448)" fill="#ef8830" />
                                        <path id="Path_64" data-name="Path 64" d="M.621,2.484A.621.621,0,0,1,0,1.863V.621a.621.621,0,1,1,1.242,0V1.863A.621.621,0,0,1,.621,2.484Z" transform="translate(9.938 7.448)" fill="#ef8830" />
                                        <path id="Path_65" data-name="Path 65" d="M.621,8.6A.621.621,0,0,1,0,7.978v-2.1a.621.621,0,1,1,1.242,0v2.1A.62.62,0,0,1,.621,8.6Zm0-5.255A.621.621,0,0,1,0,2.723V.621a.621.621,0,0,1,1.242,0v2.1A.621.621,0,0,1,.621,3.344Z" transform="translate(9.938 11.844)" fill="#ef8830" />
                                        <path id="Path_66" data-name="Path 66" d="M.621,2.484A.621.621,0,0,1,0,1.863V.621a.621.621,0,1,1,1.242,0V1.863A.621.621,0,0,1,.621,2.484Z" transform="translate(9.938 22.354)" fill="#ef8830" />
                                        <path id="Path_67" data-name="Path 67" d="M.621,8.69A.621.621,0,0,1,.4,7.487L20.155.112a1.9,1.9,0,0,1,2.416,1.147l2.24,6.61a.621.621,0,0,1-1.176.4l-2.24-6.61a.635.635,0,0,0-.806-.383L.837,8.65a.6.6,0,0,1-.216.04Z" transform="translate(2.484 0)" fill="#ef8830" />
                                    </g>
                                </svg>

                            </div>
                            <div class="overlap-container mt-3">
                                <div class="credits-container">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="43.449" height="49.611" viewBox="0 0 43.449 49.611">
                                        <g id="ticket_1_" data-name="ticket (1)" transform="matrix(0.105, -0.995, 0.995, 0.105, -0.409, 45.518)">
                                            <path id="Path_63" data-name="Path 63" d="M42.107,27.418H4.9a4.9,4.9,0,0,1-4.9-4.9V18.605a.98.98,0,0,1,.979-.979h.979a3.917,3.917,0,1,0,0-7.834H.979A.98.98,0,0,1,0,8.813V4.9A4.9,4.9,0,0,1,4.9,0H42.107A4.9,4.9,0,0,1,47,4.9V8.813a.98.98,0,0,1-.979.979h-.979a3.917,3.917,0,0,0,0,7.834h.979a.98.98,0,0,1,.979.979v3.917A4.9,4.9,0,0,1,42.107,27.418ZM1.958,19.585v2.938A2.941,2.941,0,0,0,4.9,25.46H42.107a2.941,2.941,0,0,0,2.938-2.938V19.585h0a5.875,5.875,0,0,1,0-11.751V4.9a2.941,2.941,0,0,0-2.938-2.938H4.9A2.941,2.941,0,0,0,1.958,4.9V7.834a5.875,5.875,0,0,1,0,11.751Z" transform="translate(0 11.742)" />
                                            <path id="Path_64" data-name="Path 64" d="M.979,3.917A.98.98,0,0,1,0,2.938V.979a.979.979,0,1,1,1.958,0V2.938A.98.98,0,0,1,.979,3.917Z" transform="translate(15.668 11.742)" />
                                            <path id="Path_65" data-name="Path 65" d="M.979,13.556A.98.98,0,0,1,0,12.577V9.265a.979.979,0,1,1,1.958,0v3.314A.978.978,0,0,1,.979,13.556Zm0-8.284A.98.98,0,0,1,0,4.293V.979a.979.979,0,0,1,1.958,0V4.293A.98.98,0,0,1,.979,5.272Z" transform="translate(15.668 18.673)" />
                                            <path id="Path_66" data-name="Path 66" d="M.979,3.917A.98.98,0,0,1,0,2.938V.979a.979.979,0,1,1,1.958,0V2.938A.98.98,0,0,1,.979,3.917Z" transform="translate(15.668 35.243)" />
                                            <path id="Path_67" data-name="Path 67" d="M.979,13.7a.979.979,0,0,1-.343-1.9L31.776.177a2.99,2.99,0,0,1,3.809,1.808l3.531,10.421a.979.979,0,0,1-1.855.629L33.73,2.613a1,1,0,0,0-1.271-.6L1.32,13.638a.944.944,0,0,1-.341.063Z" transform="translate(3.917 0)" />
                                        </g>
                                    </svg>

                                    <h1><b>' . $single->total_credit . '</b></h1>
                                </div>
                                <div class="dollars-container">
                                    <h1><b>$20</b></h1>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 text-center">
                                    <a href="' . URLROOT . '/user/checkout/' . $single->cost . '/' . $single->total_credit . '">
                                        <h4><b>Add to Cart</b></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                 </div>
                ';
                    }
                }
            }

            ?>

        </div>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>


<style>
    .background-card {
        background-color: white;
        border-radius: 18px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 20px;
        margin-right: 0px;
        min-width: 350px;
    }

    .bonus-row {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }

    .overlap-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .credits-container {
        height: 150px;
        width: 150px;
        border-radius: 75px;
        background-color: #EF8830;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        left: 10px;
    }

    .dollars-container {
        height: 150px;
        width: 150px;
        border-radius: 75px;
        background-color: #2BB730;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        top: 25px;
        right: 10px;
    }
</style>