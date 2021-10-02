<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>


<!-- Nav start -->
<div class="container-fluid" style="margin-top:5px;">

    <div class="row justify-content-center" style="background-color:white;">
        <div class=" col-sm-12 col-lg-6">
            <div class="row" style="background-color:white; padding:0px; height:100px;">

                <div class=" col-4 text-center <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                $urlcheckout = $urlarray[count($urlarray) - 3];
                                                $urltimetable = $urlarray[count($urlarray) - 2];

                                                if (
                                                    strpos($end, 'User') !== false ||
                                                    strpos($end, 'activity') !== false ||
                                                    strpos($end, 'credits') !== false ||
                                                    strpos($end, 'userProfile') !== false ||
                                                    strpos($urlcheckout, 'checkout') !== false
                                                ) {
                                                    echo 'userdashboard-menu-active';
                                                } ?>" style="padding:0px !important; height:auto;">
                    <a href="<?php echo URLROOT ?>/User" class="menu-clickable">
                        <div class="menu-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42.949" height="70.019" viewBox="0 0 42.949 70.019">
                                <g id="dashboard" transform="translate(0)">
                                    <path id="Path_15" data-name="Path 15" d="M15.73,13.6H2.976A2.979,2.979,0,0,1,0,10.628V2.976A2.979,2.979,0,0,1,2.976,0H15.73a2.979,2.979,0,0,1,2.976,2.976v7.652A2.979,2.979,0,0,1,15.73,13.6ZM2.976,2.551a.425.425,0,0,0-.425.425v7.652a.425.425,0,0,0,.425.425H15.73a.426.426,0,0,0,.425-.425V2.976a.425.425,0,0,0-.425-.425Zm0,0" transform="translate(0 0)" />
                                    <path id="Path_16" data-name="Path 16" d="M15.73,237.14H2.976A2.979,2.979,0,0,1,0,234.164V216.308a2.979,2.979,0,0,1,2.976-2.976H15.73a2.979,2.979,0,0,1,2.976,2.976v17.856A2.979,2.979,0,0,1,15.73,237.14ZM2.976,215.883a.425.425,0,0,0-.425.425v17.856a.425.425,0,0,0,.425.425H15.73a.425.425,0,0,0,.425-.425V216.308a.426.426,0,0,0-.425-.425Zm0,0" transform="translate(0 -194.191)" />
                                    <path id="Path_17" data-name="Path 17" d="M293.062,354.937H280.308a2.979,2.979,0,0,1-2.976-2.976v-7.652a2.979,2.979,0,0,1,2.976-2.976h12.754a2.979,2.979,0,0,1,2.976,2.976v7.652A2.979,2.979,0,0,1,293.062,354.937Zm-12.754-11.054a.425.425,0,0,0-.425.425v7.652a.425.425,0,0,0,.425.425h12.754a.425.425,0,0,0,.425-.425v-7.652a.425.425,0,0,0-.425-.425Zm0,0" transform="translate(-253.089 -311.988)" />
                                    <path id="Path_18" data-name="Path 18" d="M293.062,23.808H280.308a2.979,2.979,0,0,1-2.976-2.976V2.976A2.979,2.979,0,0,1,280.308,0h12.754a2.979,2.979,0,0,1,2.976,2.976V20.832A2.979,2.979,0,0,1,293.062,23.808ZM280.308,2.551a.425.425,0,0,0-.425.425V20.832a.425.425,0,0,0,.425.425h12.754a.425.425,0,0,0,.425-.425V2.976a.425.425,0,0,0-.425-.425Zm0,0" transform="translate(-253.089 0)" />
                                </g>
                                <text id="Home" transform="translate(39.975 66.019)" font-size="12" font-family="Poppins-Bold, Poppins" font-weight="700" letter-spacing="0.008em">
                                    <tspan x="-36.786" y="0">Home</tspan>
                                </text>
                            </svg>
                        </div>
                    </a>
                </div>

                <div class="col-4 text-center  <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                $urlconfirm = $urlarray[count($urlarray) - 2];
                                                if (
                                                    strpos($end, 'MyActivity') !== false ||
                                                    strpos($urlconfirm, 'confirmActivity') !== false
                                                ) {
                                                    echo 'userdashboard-menu-active';
                                                } ?>" style="padding:0px !important; height:auto;">
                    <a href="<?php echo URLROOT ?>/User/MyActivity" class="menu-clickable">
                        <div class="menu-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90.049" height="71.7" viewBox="0 0 90.049 71.7">
                                <text id="My_Activities" data-name="My Activities" transform="translate(85.025 67.7)" font-size="12" font-family="Poppins-Bold, Poppins" font-weight="700" letter-spacing="0.008em">
                                    <tspan x="-80.292" y="0">My Activities</tspan>
                                </text>
                                <g id="Page-1">
                                    <g id="icon-18-weights" transform="translate(0)">
                                        <path id="weights" d="M69.7,31.011,26.346,31.5V42.663a5,5,0,1,1-10.005,0V40.732a5.007,5.007,0,0,1-6.67-4.724V31.5H3v-4.6H9.67V22.679a5.012,5.012,0,0,1,6.67-4.726h0V16.024a5,5,0,1,1,10.005,0V26.891L69.7,26.87V16.024a5,5,0,1,1,10.005,0v1.931a5.007,5.007,0,0,1,6.67,4.724V26.87h6.67V31.5h-6.67v4.513a5.012,5.012,0,0,1-6.67,4.726v1.928a5,5,0,1,1-10.005,0V31.011ZM81.376,21.005a1.647,1.647,0,0,0-1.668,1.66V36.021a1.681,1.681,0,0,0,1.668,1.66,1.647,1.647,0,0,0,1.668-1.66V22.665a1.681,1.681,0,0,0-1.668-1.66Zm-66.7,0a1.647,1.647,0,0,0-1.668,1.66V36.021a1.681,1.681,0,0,0,1.668,1.66,1.647,1.647,0,0,0,1.668-1.66V22.665a1.681,1.681,0,0,0-1.668-1.66Zm60.033-6.67a1.672,1.672,0,0,0-1.668,1.7V42.652a1.7,1.7,0,0,0,1.668,1.7,1.672,1.672,0,0,0,1.668-1.7V16.035a1.7,1.7,0,0,0-1.668-1.7Zm-53.362,0a1.672,1.672,0,0,0-1.668,1.7V42.652a1.7,1.7,0,0,0,1.668,1.7,1.672,1.672,0,0,0,1.668-1.7V16.035a1.7,1.7,0,0,0-1.668-1.7Z" transform="translate(-3 -11)" fill-rule="evenodd" />
                                    </g>
                                </g>
                            </svg>



                        </div>
                    </a>
                </div>

                <div class="col-4 text-center <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];
                                                if (strpos($end, 'Timetable') !== false || strpos($urltimetable, 'timetable') !== false) {
                                                    echo 'userdashboard-menu-active';
                                                } ?>" style="padding:0px !important; height:auto;">

                    <a href="<?php echo URLROOT ?>/User/Timetable" class="menu-clickable">
                        <div class="menu-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="70.019" viewBox="0 0 64 70.019">
                                <g id="calendar" transform="translate(7.361 0)">
                                    <g id="Group_55" data-name="Group 55" transform="translate(0 0)">
                                        <g id="Group_54" data-name="Group 54">
                                            <path id="Path_68" data-name="Path 68" d="M43.5,3.85h-2.31V0h-3.85V3.85H11.935V0H8.085V3.85H5.775A5.781,5.781,0,0,0,0,9.625V43.5a5.781,5.781,0,0,0,5.775,5.775H43.5A5.781,5.781,0,0,0,49.278,43.5V9.625A5.781,5.781,0,0,0,43.5,3.85ZM45.428,43.5A1.927,1.927,0,0,1,43.5,45.428H5.775A1.927,1.927,0,0,1,3.85,43.5V18.094H45.428Zm0-29.259H3.85V9.625A1.927,1.927,0,0,1,5.775,7.7h2.31v3.85h3.85V7.7H37.343v3.85h3.85V7.7H43.5a1.927,1.927,0,0,1,1.925,1.925Z" />
                                        </g>
                                    </g>
                                    <g id="Group_57" data-name="Group 57" transform="translate(8.273 21.364)">
                                        <g id="Group_56" data-name="Group 56" transform="translate(0 0)">
                                            <rect id="Rectangle_8" data-name="Rectangle 8" width="3.052" height="5.341" transform="translate(0)" />
                                        </g>
                                    </g>
                                    <g id="Group_59" data-name="Group 59" transform="translate(15.14 21.364)">
                                        <g id="Group_58" data-name="Group 58" transform="translate(0 0)">
                                            <rect id="Rectangle_9" data-name="Rectangle 9" width="4.578" height="5.341" />
                                        </g>
                                    </g>
                                    <g id="Group_61" data-name="Group 61" transform="translate(22.007 21.364)">
                                        <g id="Group_60" data-name="Group 60" transform="translate(0 0)">
                                            <rect id="Rectangle_10" data-name="Rectangle 10" width="4.578" height="5.341" />
                                        </g>
                                    </g>
                                    <g id="Group_63" data-name="Group 63" transform="translate(30.399 21.364)">
                                        <g id="Group_62" data-name="Group 62" transform="translate(0 0)">
                                            <rect id="Rectangle_11" data-name="Rectangle 11" width="3.052" height="5.341" />
                                        </g>
                                    </g>
                                    <g id="Group_65" data-name="Group 65" transform="translate(38.029 21.364)">
                                        <g id="Group_64" data-name="Group 64" transform="translate(0 0)">
                                            <rect id="Rectangle_12" data-name="Rectangle 12" width="3.815" height="5.341" />
                                        </g>
                                    </g>
                                    <g id="Group_67" data-name="Group 67" transform="translate(8.273 29.756)">
                                        <g id="Group_66" data-name="Group 66" transform="translate(0 0)">
                                            <rect id="Rectangle_13" data-name="Rectangle 13" width="3.052" height="3.815" transform="translate(0)" />
                                        </g>
                                    </g>
                                    <g id="Group_69" data-name="Group 69" transform="translate(15.14 29.756)">
                                        <g id="Group_68" data-name="Group 68" transform="translate(0 0)">
                                            <rect id="Rectangle_14" data-name="Rectangle 14" width="4.578" height="3.815" />
                                        </g>
                                    </g>
                                    <g id="Group_71" data-name="Group 71" transform="translate(22.007 29.756)">
                                        <g id="Group_70" data-name="Group 70" transform="translate(0 0)">
                                            <rect id="Rectangle_15" data-name="Rectangle 15" width="4.578" height="3.815" />
                                        </g>
                                    </g>
                                    <g id="Group_73" data-name="Group 73" transform="translate(30.399 29.756)">
                                        <g id="Group_72" data-name="Group 72" transform="translate(0 0)">
                                            <rect id="Rectangle_16" data-name="Rectangle 16" width="3.052" height="3.815" />
                                        </g>
                                    </g>
                                    <g id="Group_75" data-name="Group 75" transform="translate(8.273 38.149)">
                                        <g id="Group_74" data-name="Group 74" transform="translate(0 0)">
                                            <rect id="Rectangle_17" data-name="Rectangle 17" width="3.052" height="3.815" transform="translate(0)" />
                                        </g>
                                    </g>
                                    <g id="Group_77" data-name="Group 77" transform="translate(15.14 38.149)">
                                        <g id="Group_76" data-name="Group 76" transform="translate(0 0)">
                                            <rect id="Rectangle_18" data-name="Rectangle 18" width="4.578" height="3.815" />
                                        </g>
                                    </g>
                                    <g id="Group_79" data-name="Group 79" transform="translate(22.007 38.149)">
                                        <g id="Group_78" data-name="Group 78" transform="translate(0 0)">
                                            <rect id="Rectangle_19" data-name="Rectangle 19" width="4.578" height="3.815" />
                                        </g>
                                    </g>
                                    <g id="Group_81" data-name="Group 81" transform="translate(30.399 38.149)">
                                        <g id="Group_80" data-name="Group 80" transform="translate(0 0)">
                                            <rect id="Rectangle_20" data-name="Rectangle 20" width="3.052" height="3.815" />
                                        </g>
                                    </g>
                                    <g id="Group_83" data-name="Group 83" transform="translate(38.029 29.756)">
                                        <g id="Group_82" data-name="Group 82" transform="translate(0 0)">
                                            <rect id="Rectangle_21" data-name="Rectangle 21" width="3.815" height="3.815" />
                                        </g>
                                    </g>
                                </g>
                                <text id="Timetable" transform="translate(64 66.019)" font-size="12" font-family="Poppins-Bold, Poppins" font-weight="700" letter-spacing="0.008em">
                                    <tspan x="-63.552" y="0">Timetable</tspan>
                                </text>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .userdashboard-menu-active {
        background-color: #EF8830;
    }

    .userdashboard-menu-home {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .userdashboard-menu-map {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .userdashboard-menu-timetable {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .userdashboard-menu-social {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .menu-clickable {
        width: 100%;
        height: 100%;
        display: flex;
        text-decoration: none;
        color: inherit;
        justify-content: center;
        align-items: center;

    }

    .menu-content {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width: 100%;
        height: 100%;
    }

    .menu-icon-text {
        padding: 0px;
        margin: 0px;
    }
</style>