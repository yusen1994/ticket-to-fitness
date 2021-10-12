<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="row mt-5">
                <div class="col-12" style="flex-direction: row;">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/Administrator/dashboard"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Gym Overview</span></b></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col">
            <div class="gym-form">
                <div class="search-input p-1">
                    <button type="submit" style="padding:0; border:none; background:none;">
                        <span class="search-text-icon">
                            <svg id="loupe" xmlns="http://www.w3.org/2000/svg" width="19.261" height="19.261" viewBox="0 0 19.261 19.261">
                                <g id="Group_86" data-name="Group 86">
                                    <path id="Path_100" data-name="Path 100" d="M19.026,17.894l-5.477-5.477a7.639,7.639,0,1,0-1.135,1.135l5.477,5.477a.8.8,0,1,0,1.135-1.135Zm-11.4-4.248a6.019,6.019,0,1,1,6.019-6.019A6.025,6.025,0,0,1,7.624,13.646Z" transform="translate(0 -0.003)" fill="#001e4e" />
                                </g>
                            </svg>
                        </span>
                    </button>
                    <input class="search-input-text ml-1" id="searchField" name="searchField" placeholder="Search...">
                </div>
            </div>

        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 20px; margin-bottom: 100px; padding-left:15px; padding-right:15px; background-color:white;">
        <div class="col gym-body">
            <div class="gym-member-list">

                <?php foreach ($data['gym_info'] as $single) {

                    echo '            <div class="gym-member">
                                         <div class="gym-member-construct">
                                          <div class="gym-member-name">' . $single->gym_name . '</div>
                                          
                                           <div class="gym-member-active">Active</div>
                                              </div>
                                            <div class="gym-member-construct">
                                              <div class="gym-member-attend">' . $single->gym_address . '</div>
                                              
                                              <div class="gym-member-date">' . $single->phone_number . '</div>
                                           </div>      
                                            <div class="gym-line"></div>
                                         </div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<style>
    .search-input {
        display: flex;
        flex-direction: row;
        background-color: white;
        justify-content: center;
        align-items: center;
        height: 37px;
        border-radius: 18px;
        border-width: 1px;
        border-color: black;
        border-style: solid;
    }

    .search-input-text {
        height: 100%;
        width: 90%;
        background-color: transparent;
        border-style: none;
        outline: none;
    }
</style>