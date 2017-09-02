<?php
  


  ini_set('display_errors',1);
  error_reporting(E_ALL);
  session_start();

        if(!isset($_SESSION['mentor_email']) ){
        header("location:index.php");
      exit();
}

?>
<?php 

    $profile_pic ='<img src="user.png" class="user-image img-circle" alt="profile pic" />';

      $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';

      $profile_pic_chat = '<img src="user.png" class="direct-chat-img" alt="profile pic" />';      
     
?>
<?php include('profile.php');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>omg - 2k17 || Mentor Panel</title>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
    <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
          <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
      <script src="plugins/chartjs/Chart.min.js"></script>
      <script src="dist/js/demo.js"></script>
      <script src="dist/js/pages/dashboard2.js"></script>


  <!-- Ionicons -->
  <link rel="stylesheet" href="plugins/other/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>omg</b>-2k17</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>omg</b>-2k17</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning" id="notifications_count"></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notifications</li>
              <li>
                <ul class="menu" id="notifications">
                </ul>
            </ul>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo $profile_pic ?>
              <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php echo $profile_pic; ?>
                <p>
                  <?php echo $_SESSION['fullname']; ?> -<?php echo $domain ?>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php  echo $profile_pic?>"
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fullname']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <hr/>
            <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="active">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
            <a href="timeline.php">
              <i class="fa fa-calendar-times-o"></i> <span>Time Line</span>
            </a>
          </li>
        <li>
          <a href="my_tasks.php">
            <i class="fa fa-pencil-square-o"></i> <span>My Tasks</span>
          </a>
        </li>
        <li>
          <a href="my_teams.php">
            <i class="fa fa-user"></i> <span>My Teams</span>
          </a>
        </li>

        <li>
          <a href="questions.php">
            <i class="fa fa-newspaper-o"></i> <span>Questions</span>
          </a>
        </li>
        <li>
          <a href="my_profile.php">
            <i class="fa fa-user"></i> <span>Profile</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    
          
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Monthly Recap Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Questions/Comments Fight: June 5 2017 - July 5 2017</strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Time for Incubation</strong>
                  </p>

                  <div class="progress-group">
                    <span class="progress-text">Time to Ideate</span>
                    <span class="progress-number" >Days Left: <b id="mad1"></b></span>

                    <div class="progress sm" id="mad8">

                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Time to Build</span>
                    <span class="progress-number">Days Left: <b id="mad2"></b></span>

                    <div class="progress sm" id="mad7">

                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Time to Pitch</span>
                    <span class="progress-number">Days Left: <b id="mad3"></b></span>

                    <div class="progress sm" id="mad6">
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Time to Win</span>
                    <span class="progress-number">Days Left: <b id="mad4"></b></span>

                    <div class="progress sm" id="mad5">
                      
                    </div>
                  </div>
                  <!-- /.progress-group -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span id="mad13"> </span>
                    <h5 class="description-header" id="mad9"></h5>
                    <span class="description-text">TOTAL TASKS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span id="mad14"></span>
                    <h5 class="description-header" id="mad10"></h5>
                    <span class="description-text">TOTAL QUESTIONS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block border-right">
                    <span id="mad15"></span>
                    <h5 class="description-header" id="mad11"></h5>
                    <span class="description-text">TOTAL COMMENTS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-3 col-xs-6">
                  <div class="description-block">
                    <span id="mad16"></span>
                    <h5 class="description-header" id="mad12"></h5>
                    <span class="description-text">TOTAL MAKERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
      <div class="col-md-12">
      <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Domains Opted in ORL Makers Garage 2K17</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
      <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="250"></canvas>
                  </div>
                  <!-- ./chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <ul class="chart-legend clearfix">
                    <li><i class="fa fa-circle-o text-red"></i> IoT</li>
                    <li><i class="fa fa-circle-o text-green"></i> Robotics</li>
                    <li><i class="fa fa-circle-o text-yellow"></i> Embedded Systems</li>
                    <li><i class="fa fa-circle-o text-aqua"></i> Virtual Reality / Augmented Reality</li>
                    <li><i class="fa fa-circle-o text-light-blue"></i> Cloud</li>
                    <li><i class="fa fa-circle-o text-gray"></i> Others</li>
                  </ul>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            </div>
 	</div>
 	</div>
 	
 	<div class="row">
 	      <div class="col-md-4">

            <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Task Analytics for ALL Tasks</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
            </div>
            
            <!-- /.box-body -->
           
            <!-- BAR CHART -->
            <div class="col-md-4">

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Task Analytics for My Tasks</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart1" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
            </div>
            <!-- /.box-body -->
           
                  <div class="col-md-4">

            <!-- BAR CHART -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Task Analytics for my Team Tasks</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart2" style="height:230px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
            
            </div>
            </div>
            <!-- /.box-body -->
            </div>
            </div> <!-- /.row -->
          </div>
            
            
    </section>
    <!-- /.content -->
  </div>
</div>

 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
  </footer>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/other/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="plugins/other/moment.min.js"></script>
<script src="plugins/fullcalendar/fullcalendar.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script>
$(document).ready(function (){

  function mad_tasks2(){

  		$.ajax({
  			url:"/omg2k17/mentor/dist/mad2.php",
  			method:"GET",
  				success:function(data){
  					var res=data.split("$");
  					var madobj = JSON.parse(res[4]);
  					var m1=parseInt(madobj[0][0]);
  					var m2=parseInt(madobj[0][1]);
  					var m3=parseInt(madobj[0][2]);
  					var m4=parseInt(madobj[0][3]);
  					$("#mad13").html(res[0]);
  					$("#mad14").html(res[1]);
  					$("#mad15").html(res[2]);
  					$("#mad16").html(res[3]);
  					$("#mad9").html(m1);
  					$("#mad10").html(m2);
  					$("#mad11").html(m3);
  					$("#mad12").html(m4);
  					
  					
  					
  			}
  		});
	
  	}
  
  mad_tasks2();
  setInterval(function(){
		mad_tasks2();
	},300000);
});
</script>   

<script>
$(document).ready(function (){

  function mad_tasks1(){

  		$.ajax({
  			url:"/omg2k17/mentor/dist/mad1.php",
  			method:"GET",
  				success:function(data){
  					var res = data.split("$");
					var madobj = JSON.parse(res[4]);
  					var m1=parseInt(madobj[0][0]);
  					var m2=parseInt(madobj[0][1]);
  					var m3=parseInt(madobj[0][2]);
  					var m4=parseInt(madobj[0][3]);
  					var m5=res[0];
  					var m6=res[1];
  					var m7=res[2];
  					var m8=res[3];
  					$("#mad1").html(m1);
  					$("#mad2").html(m2);
  					$("#mad3").html(m3);
  					$("#mad4").html(m4);
  					$("#mad8").html(m5);
  					$("#mad7").html(m6);
  					$("#mad6").html(m7);
  					$("#mad5").html(m8);
  					
  			}
  		});
	
  	}
  
  mad_tasks1();
  setInterval(function(){
		mad_tasks1();
	},300000);
});
</script>   

<script>
 $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    var mt1_a=0;
    var madobj=0;
    var mt1_s=0;
    var mt1_c=0;
    var mt2_a=0;
    var madobj1=0;
    var mt2_s=0;
    var mt2_c=0;
    var mt3_a=0;
    var mt3_s=0;
    var mt3_c=0;
    function my_mentor_tasks1(){

  		$.ajax({
  			async: false,
  			url:"/omg2k17/mentor/dist/mad4.php",
  			method:"GET",
  				success:function(data){
					var madobj = JSON.parse(data);
  					mt1_a=parseInt(madobj[0][0]);
  					mt1_s=parseInt(madobj[0][1]);
  					mt1_c=parseInt(madobj[0][2]);
  					
  					
  			}
  		});
	
  	}
  
  my_mentor_tasks1();
  setInterval(function(){
		my_mentor_tasks1();
	},3000);
   
    function my_mentor_tasks2(){

  		$.ajax({
  			async: false,
  			url:"/omg2k17/mentor/dist/mad5.php",
  			method:"GET",
  				success:function(data){
					var madobj1 = JSON.parse(data);
  					mt2_a=parseInt(madobj1[0][0]);
  					mt2_s=parseInt(madobj1[0][1]);
  					mt2_c=parseInt(madobj1[0][2]);
  					
  					
  			}
  		});
	
  	}
  
  my_mentor_tasks2();
  setInterval(function(){
		my_mentor_tasks2();
	},3000);
   
function my_mentor_tasks3(){

  		$.ajax({
  			async: false,
  			url:"/omg2k17/mentor/dist/mad6.php",
  			method:"GET",
  				success:function(data){
					var madobj2 = JSON.parse(data);
  					mt3_a=parseInt(madobj2[0][0]);
  					mt3_s=parseInt(madobj2[0][1]);
  					mt3_c=parseInt(madobj2[0][2]);
  					
  					
  			}
  		});
	
  	}
  
  my_mentor_tasks3();
  setInterval(function(){
		my_mentor_tasks3();
	},3000);


    var areaChartData = {
      labels: ["OMG2K17"],
      datasets: [
        {
          label: "Tasks Added",
          fillColor: "#ff851b",
          strokeColor: "#ff851b",
          pointColor: "#ff851b",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [mt2_a]
        },
        {
          label: "Tasks Started",
          fillColor: "#f56954",
          strokeColor: "#f56954",
          pointColor: "#f56954",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [mt2_s]
        },
        {
          label: "Tasks Completed",
          fillColor: "#00a65a",
          strokeColor: "#00a65a",
          pointColor: "#00a65a",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [mt2_c]
        }
      ]
    };
    
    var areaChartData1 = {
      labels: ["OMG2K17"],
      datasets: [
        {
          label: "Tasks Added",
          fillColor: "#ff851b",
          strokeColor: "#ff851b",
          pointColor: "#ff851b",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [mt1_a]
        },
        {
          label: "Tasks Started",
          fillColor: "#f56954",
          strokeColor: "#f56954",
          pointColor: "#f56954",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [mt1_s]
        },
        {
          label: "Tasks Completed",
          fillColor: "#00a65a",
          strokeColor: "#00a65a",
          pointColor: "#00a65a",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [mt1_c]
        }
      ]
    };

    var areaChartData2 = {
      labels: ["OMG2K17"],
      datasets: [
        {
          label: "Tasks Added",
          fillColor: "#ff851b",
          strokeColor: "#ff851b",
          pointColor: "#ff851b",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [mt3_a]
        },
        {
          label: "Tasks Started",
          fillColor: "#f56954",
          strokeColor: "#f56954",
          pointColor: "#f56954",
          pointStrokeColor: "#c1c7d1",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(220,220,220,1)",
          data: [mt3_s]
        },
        {
          label: "Tasks Completed",
          fillColor: "#00a65a",
          strokeColor: "#00a65a",
          pointColor: "#00a65a",
          pointStrokeColor: "rgba(60,141,188,1)",
          pointHighlightFill: "#fff",
          pointHighlightStroke: "rgba(60,141,188,1)",
          data: [mt3_c]
        }
      ]
    };
    
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    
    
    //barChartData.datasets[1].fillColor = "#00a65a";
    //barChartData.datasets[1].strokeColor = "#00a65a";
    //barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
    
    
    var barChartCanvas1 = $("#barChart1").get(0).getContext("2d");
    var barChart1 = new Chart(barChartCanvas1);
    var barChartData1 = areaChartData1;
    
    //barChartData.datasets[1].fillColor = "#00a65a";
    //barChartData.datasets[1].strokeColor = "#00a65a";
    //barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions1 = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions1.datasetFill = false;
    barChart1.Bar(barChartData1, barChartOptions1);

    var barChartCanvas2 = $("#barChart2").get(0).getContext("2d");
    var barChart2 = new Chart(barChartCanvas2);
    var barChartData1 = areaChartData2;
    
    //barChartData.datasets[1].fillColor = "#00a65a";
    //barChartData.datasets[1].strokeColor = "#00a65a";
    //barChartData.datasets[1].pointColor = "#00a65a";
    var barChartOptions2 = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions2.datasetFill = false;
    barChart2.Bar(barChartData1, barChartOptions2);
  });
</script>
<script src="plugins/chartjs/Chart.min.js"></script>
<script type="text/javascript" src="notifications.js"></script>
            
</body>
</html>
