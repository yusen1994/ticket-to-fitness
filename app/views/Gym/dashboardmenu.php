<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container-fluid p-2">
    <!-- Nav start -->
    <div class="row justify-content-center" style="background-color: white;">
        <div class="col-sm-1 col-lg-6">
            <div class="row" style="padding:0px; height:90px;">
                <div class=" col-4 text-center <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];

                                                if (strpos($end, 'Gym') !== false || strpos($end, 'gym') !== false) {
                                                    echo 'gymdashboard-menu-active';
                                                } ?>" style="padding:0px !important; height:auto;">
                    <a href="<?php echo URLROOT ?>/gym" class="menu-clickable" onclick="menuActive('home')">
                        <div class="menu-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="42.949" height="69.823" viewBox="0 0 42.949 69.823">
                                <g id="dashboard" transform="translate(0)">
                                    <path id="Path_15" data-name="Path 15" d="M15.73,13.6H2.976A2.979,2.979,0,0,1,0,10.628V2.976A2.979,2.979,0,0,1,2.976,0H15.73a2.979,2.979,0,0,1,2.976,2.976v7.652A2.979,2.979,0,0,1,15.73,13.6ZM2.976,2.551a.425.425,0,0,0-.425.425v7.652a.425.425,0,0,0,.425.425H15.73a.426.426,0,0,0,.425-.425V2.976a.425.425,0,0,0-.425-.425Zm0,0" transform="translate(0 0)" />
                                    <path id="Path_16" data-name="Path 16" d="M15.73,237.14H2.976A2.979,2.979,0,0,1,0,234.164V216.308a2.979,2.979,0,0,1,2.976-2.976H15.73a2.979,2.979,0,0,1,2.976,2.976v17.856A2.979,2.979,0,0,1,15.73,237.14ZM2.976,215.883a.425.425,0,0,0-.425.425v17.856a.425.425,0,0,0,.425.425H15.73a.425.425,0,0,0,.425-.425V216.308a.426.426,0,0,0-.425-.425Zm0,0" transform="translate(0 -194.191)" />
                                    <path id="Path_17" data-name="Path 17" d="M293.062,354.937H280.308a2.979,2.979,0,0,1-2.976-2.976v-7.652a2.979,2.979,0,0,1,2.976-2.976h12.754a2.979,2.979,0,0,1,2.976,2.976v7.652A2.979,2.979,0,0,1,293.062,354.937Zm-12.754-11.054a.425.425,0,0,0-.425.425v7.652a.425.425,0,0,0,.425.425h12.754a.425.425,0,0,0,.425-.425v-7.652a.425.425,0,0,0-.425-.425Zm0,0" transform="translate(-253.089 -311.988)" />
                                    <path id="Path_18" data-name="Path 18" d="M293.062,23.808H280.308a2.979,2.979,0,0,1-2.976-2.976V2.976A2.979,2.979,0,0,1,280.308,0h12.754a2.979,2.979,0,0,1,2.976,2.976V20.832A2.979,2.979,0,0,1,293.062,23.808ZM280.308,2.551a.425.425,0,0,0-.425.425V20.832a.425.425,0,0,0,.425.425h12.754a.425.425,0,0,0,.425-.425V2.976a.425.425,0,0,0-.425-.425Zm0,0" transform="translate(-253.089 0)" />
                                </g>
                                <text id="Home" transform="translate(39.975 65.823)" font-size="12" font-family="Poppins-Bold, Poppins" font-weight="700" letter-spacing="0.008em">
                                    <tspan x="-36.786" y="0">Home</tspan>
                                </text>
                            </svg>
                        </div>

                    </a>
                </div>
                <div class=" col-4 text-center <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $urlarray = explode("/", $url);
                                                $end = $urlarray[count($urlarray) - 1];

                                                if (strpos($end, 'Timetable') !== false) {
                                                    echo 'gymdashboard-menu-active';
                                                } ?>" style="padding:0px !important; height:auto;">
                    <a href="<?php echo URLROOT ?>/gym/Timetable" class="menu-clickable" onclick="menuActive('timetable')">
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
                <div class="col-3 text-center gymdashboard-menu-social p-4" style="padding:0px !important; height:auto;" id="gymdashboard-menu-social">
                    <a href="#" class="menu-clickable" onclick="menuActive('social')">
                        <div class="menu-content">
                            <svg xmlns="http://www.w3.org/2000/svg" width="107" height="68.519" viewBox="0 0 107 68.519">
                                <g id="gym" transform="translate(31.275)">
                                    <g id="Group_28" data-name="Group 28" transform="translate(0 26.066)">
                                        <g id="Group_27" data-name="Group 27">
                                            <path id="Path_38" data-name="Path 38" d="M39.664,288.389c-14.331,0-22.224,6.578-22.224,18.522a1.715,1.715,0,0,0,1.741,1.689H60.147a1.715,1.715,0,0,0,1.741-1.689C61.888,294.967,54,288.389,39.664,288.389ZM20.985,305.222c.685-8.931,6.96-13.455,18.679-13.455s17.995,4.525,18.68,13.455Z" transform="translate(-17.44 -288.389)" />
                                        </g>
                                    </g>
                                    <g id="Group_30" data-name="Group 30" transform="translate(11.021 0)">
                                        <g id="Group_29" data-name="Group 29">
                                            <path id="Path_39" data-name="Path 39" d="M143.252,0a11.069,11.069,0,0,0-11.2,11.428c0,6.706,5.026,12.16,11.2,12.16s11.2-5.455,11.2-12.16A11.069,11.069,0,0,0,143.252,0Zm0,20.211c-4.315,0-7.825-3.94-7.825-8.782a7.68,7.68,0,0,1,7.825-8.051,7.766,7.766,0,0,1,7.825,8.051C151.078,16.271,147.567,20.211,143.252,20.211Z" transform="translate(-132.049)" />
                                        </g>
                                    </g>
                                </g>
                                <text id="Gym_Information" data-name="Gym Information" transform="translate(107 64.519)" font-size="12" font-family="Poppins-Bold, Poppins" font-weight="700" letter-spacing="0.008em">
                                    <tspan x="-106.968" y="0">Gym Information</tspan>
                                </text>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function menuActive(menu) {
        switch (menu) {
            case "home":
                document.focus(document.getElementById("gymdashboard-menu-home"));
                //             document.getElementById("gymdashboard-menu-home").style.backgroundColor = "#ef8830";
                //             document.getElementById("gymdashboard-menu-map").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-timetable").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-social").style.backgroundColor = "#ffffff";
                break;
                //         case "map":
                //             document.getElementById("gymdashboard-menu-home").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-map").style.backgroundColor = "#ef8830";
                //             document.getElementById("gymdashboard-menu-timetable").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-social").style.backgroundColor = "#ffffff";
                //             break;
            case "timetable":
                //             document.getElementById("gymdashboard-menu-home").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-map").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-timetable").style.backgroundColor = "#ef8830";
                //             document.getElementById("gymdashboard-menu-social").style.backgroundColor = "#ffffff";
                break;
                //         case "social":
                //             document.getElementById("gymdashboard-menu-home").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-map").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-timetable").style.backgroundColor = "#ffffff";
                //             document.getElementById("gymdashboard-menu-social").style.backgroundColor = "#ef8830";
                //             break;
        }
    }
</script>

<style>
    .gymdashboard-menu-active {
        background-color: #ef8830;
    }

    .gymdashboard-menu-home {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gymdashboard-menu-map {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gymdashboard-menu-timetable {
        background-color: white;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gymdashboard-menu-social {
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