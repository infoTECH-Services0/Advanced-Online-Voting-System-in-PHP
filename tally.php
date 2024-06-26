<?php include 'includes/session.php'; ?>
<?php include 'includes/slugify.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <b>RESULTS</b>
            </h1>
            <ol class="breadcrumb">
                <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">results</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xs-12">
                    <h3> Votes Tally </h3>
                </div>
            </div>

            <?php
            $sql = "SELECT * FROM positions ORDER BY priority ASC";
            $query = $conn->query($sql);
            $inc = 2;
            while($row = $query->fetch_assoc()){
                $inc = ($inc == 2) ? 1 : $inc+1;
                if($inc == 1) echo "<div class='row'>";
                echo "

            <div class='col-sm-6'>
              <div class='box box-solid' style='box-shadow: 0 0 4px black; border-radius: 4%'>  <!----------styling the box for tallies----------->
                <div class='box-header with-border'>
                  <h4 class='box-title'><b>".$row['description']."</b></h4>
                </div>
                <div class='box-body'>
                  <div class='chart'>
                    <canvas id='".slugify($row['description'])."' style='height:200px'></canvas>
                  </div>
                </div>
              </div>
            </div>
          ";
                if($inc == 2) echo "</div>";
            }
            if($inc == 1) echo "<div class='col-sm-6'></div></div>";
            ?>

        </section>
        <!-- right col -->
    </div>


    <?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'admin/includes/scripts.php'; ?>
<?php
$sql = "SELECT * FROM positions ORDER BY priority ASC";
$query = $conn->query($sql);
while($row = $query->fetch_assoc()){
    $sql = "SELECT * FROM candidates WHERE position_id = '".$row['id']."'";
    $cquery = $conn->query($sql);
    $carray = array();
    $varray = array();
    while($crow = $cquery->fetch_assoc()){
        array_push($carray, $crow['lastname']);
        $sql = "SELECT * FROM votes WHERE candidate_id = '".$crow['id']."'";
        $vquery = $conn->query($sql);
        array_push($varray, $vquery->num_rows);
    }
    $carray = json_encode($carray);
    $varray = json_encode($varray);
    ?>
    <script>
        $(function(){
            var rowid = '<?php echo $row['id']; ?>';
            var description = '<?php echo slugify($row['description']); ?>';
            var barChartCanvas = $('#'+description).get(0).getContext('2d')
            var barChart = new Chart(barChartCanvas)
            var barChartData = {
                labels  : <?php echo $carray; ?>,
                datasets: [
                    {
                        label               : 'Votes',
                        fillColor           : 'maroon',  //bar color
                        strokeColor         : '#240000', //bar outline
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : <?php echo $varray; ?>
                    }
                ]
            }
            var barChartOptions                  = {
                //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
                scaleBeginAtZero        : true,
                //Boolean - Whether grid lines are shown across the chart
                scaleShowGridLines      : true,
                //String - Colour of the grid lines
                scaleGridLineColor      : 'rgba(0,0,0,.05)',
                //Number - Width of the grid lines
                scaleGridLineWidth      : 1,
                //Boolean - Whether to show horizontal lines (except X axis)
                scaleShowHorizontalLines: true,
                //Boolean - Whether to show vertical lines (except Y axis)
                scaleShowVerticalLines  : true,
                //Boolean - If there is a stroke on each bar
                barShowStroke           : true,
                //Number - Pixel width of the bar stroke
                barStrokeWidth          : 2,
                //Number - Spacing between each of the X value sets
                barValueSpacing         : 5,
                //Number - Spacing between data sets within X values
                barDatasetSpacing       : 1,
                //String - A legend template
                legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
                //Boolean - whether to make the chart responsive
                responsive              : true,
                maintainAspectRatio     : true
            }

            barChartOptions.datasetFill = false
            var myChart = barChart.HorizontalBar(barChartData, barChartOptions)
            //document.getElementById('legend_'+rowid).innerHTML = myChart.generateLegend();
        });
    </script>
    <?php
}
?>
</body>
</html>
