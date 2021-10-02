<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="row mt-3">
                <div class="col-8" style="flex-direction: row;">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/Gym"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Members</span></b></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">

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

    <div class="row justify-content-center mt-3 mt-lg-5" style="background-color:white;">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="gym-member-list">

                <?php foreach ($data['gym_members'] as $single) {
                    echo '            <div class="gym-member">
                                         <div class="gym-member-construct">
                                          <div class="gym-member-name">' . $single->firstname . " " . $single->lastname . '</div>
                                           <div class="gym-member-active">Active</div>
                                              </div>
                                            <div class="gym-member-construct">
                                              <div class="gym-member-attend">Classes attended: 3</div>
                                              <div class="gym-member-date">Joined: 28 Sept 2021</div>
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