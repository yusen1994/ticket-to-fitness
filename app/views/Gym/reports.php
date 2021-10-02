<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<div class="container-fluid">

    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
            <div class="row mt-3">
                <div class="col-8" style="flex-direction: row;">
                    <h3><b><span><a href="<?php echo URLROOT; ?>/Gym"><i style="color:black;" class="fas fa-arrow-left"></i></a></span><span class="pl-2" style="color:black;">Reports</span></b></h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Styles -->
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>

    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

    <!-- Chart code -->
    <script>
        am4core.ready(function() {

            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            var chart = am4core.create("chartdiv", am4charts.XYChart);

            var data = [];
            var value = 50;

            <?php
            foreach ($data['gym_earnings'] as $single) {
                echo "var date = '$single->Date';";
                echo "value = '$single->Credits';";
                echo "console.log(date);";
            ?>
                data.push({
                    date: date,
                    value: value
                });

            <?php } ?>



            chart.data = data;

            // Create axes
            var dateAxis = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis.renderer.minGridDistance = 60;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());

            // Create series
            var series = chart.series.push(new am4charts.LineSeries());
            series.dataFields.valueY = "value";
            series.dataFields.dateX = "date";
            series.tooltipText = "{value}"

            series.tooltip.pointerOrientation = "vertical";

            chart.cursor = new am4charts.XYCursor();
            chart.cursor.snapToSeries = series;
            chart.cursor.xAxis = dateAxis;

            //chart.scrollbarY = new am4core.Scrollbar();
            chart.scrollbarX = new am4core.Scrollbar();

        }); // end am4core.ready()
    </script>

    <!-- HTML -->
    <div class="row justify-content-center">
        <div class="col-sm-12 col-lg-6">
            <div id="chartdiv"></div>
        </div>
    </div>





</div>