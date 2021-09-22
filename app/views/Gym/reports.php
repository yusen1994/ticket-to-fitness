<?php require APPROOT . '/views/Gym/dashboardmenu.php'; ?>


<div class="container-fluid"><span class="profile-heading"><i class="fas fa-arrow-left"></i> Reports</span>

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
    <div id="chartdiv"></div>




</div>