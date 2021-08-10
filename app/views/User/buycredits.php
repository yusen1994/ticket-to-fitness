<?php require APPROOT . '/views/User/dashboardmenu.php'; ?>



<div class="container-fluid" style="padding-top:10px;">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <div class="heading-content">
                <svg xmlns="http://www.w3.org/2000/svg" width="24.906" height="21.36" viewBox="0 0 24.906 21.36">
                    <g id="arrow" transform="translate(0 -31.842)">
                        <g id="Group_87" data-name="Group 87" transform="translate(0 31.842)">
                            <path id="Path_103" data-name="Path 103" d="M23.409,40.773a1.78,1.78,0,0,0-.308-.023H5.53l.383-.178a3.564,3.564,0,0,0,1.007-.713l4.927-4.927a1.844,1.844,0,0,0,.258-2.361,1.782,1.782,0,0,0-2.673-.232l-8.91,8.91a1.782,1.782,0,0,0,0,2.52h0l8.91,8.91a1.782,1.782,0,0,0,2.673-.178,1.844,1.844,0,0,0-.258-2.361L6.929,45.205a3.564,3.564,0,0,0-.891-.65L5.5,44.314H23a1.844,1.844,0,0,0,1.88-1.5A1.782,1.782,0,0,0,23.409,40.773Z" transform="translate(0 -31.842)" />
                        </g>
                    </g>
                </svg>
                <h3><b class="p-3">Buy Credits</b></h3>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <div class="credit-item-container">

            <?php

            if(!empty($data['credits'])){

                foreach($data['credits'] as $single){
                    echo '<a style="text-decoration: none;" href="'.URLROOT.'/user/checkout/'.$single->cost.'/'.$single->total_credit.'" class="credit-item-link">
                    <div class="container rounded p-4 mt-4" style="background-color:white">
                        <div class="row">
                            <div class="col-9">
                                <b style="font-size:20px">'.$single->name.'</b>
                                <div class="mt-4">
                                    <img src="'.URLROOT.'/images/credits_noBG.png"><b>'.$single->total_credit.'</b>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="float-right text-center mt-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37.519" height="37.461" viewBox="0 0 37.519 37.461">
                                        <g id="_16744398191571183082" data-name="16744398191571183082" transform="translate(-2 -1.5)">
                                            <path id="Path_133" data-name="Path 133" d="M14.006,24.344,7.87,5A2.723,2.723,0,0,0,5.2,3H2" fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                            <path id="Path_134" data-name="Path 134" d="M32.547,28.679H9.068A2.676,2.676,0,0,1,6.4,26.01h0a2.867,2.867,0,0,1,2.668-2.668l27.481-4V6H12.537" transform="translate(1.47 1.002)" fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                            <circle id="Ellipse_20" data-name="Ellipse 20" cx="1.566" cy="1.566" r="1.566" transform="translate(12.965 34.328)" fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                            <circle id="Ellipse_21" data-name="Ellipse 21" cx="1.566" cy="1.566" r="1.566" transform="translate(30.195 34.328)" fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" />
                                        </g>
                                    </svg><br><b>Add to cart</b>
                                </div>

                            </div>


                        </div>



                    </div>
                </a>';


                }
            }
                

                ?>

            </div>
        </div>
    </div>





</div>

<style>
    .heading-content {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .credit-item-link {
        margin-top: 20px;
        background-color: white;
        border-width: 1px;
        border-color: #707070;
        border-radius: 24px;
        height: auto;
        text-decoration: none;
        color: black;
    }
</style>