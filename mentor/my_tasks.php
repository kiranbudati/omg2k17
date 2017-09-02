<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
      if( !isset($_SESSION['mentor_email']) ){
        header("location:index.php");
      exit();     
      

}
?>
<?php include('profile.php') ?>
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="plugins/other/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link href="css/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <script type="text/javascript" src="get/get_tasks.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
  $(".getDetails").click(function(){ 
      var id= this.id;
      	
      var dataString = 'id='+id;
      
      $.ajax({
            type: "POST",
            url: "get/get_task_by_id.php",
            data: dataString,
            success: function(data) {

                $('.modal-content').html(data);
            }
        });
});

	$(".accept").click(function(){ 
      		var id= this.id;
		var dataString = 'id='+id;
		
		$.ajax({
	            type: "POST",
	            url: "send/response.php",
	            data: dataString,
	            success: function(data) {
           location.reload();

	               
            }
        });
	});
	
	$(".submitTask").click(function(){ 
      		var id= this.id;
		var dataString = 'id='+id;
		
		$.ajax({
	            type: "POST",
	            url: "send/submitTask.php",
	            data: dataString,
	            success: function(data) {
	                          location.reload(); 

            }
        });
	});
});
  </script>
<style type="text/css">
  
  #myModal{
    word-break: break-all;
  }
  @media screen and (min-width: 968px) {
  
  #myModal .modal-dialog  {
    width:1200px;}

}
</style>

 </head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
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
                  <?php echo $_SESSION['fullname']; ?> <br><?php  echo $domain ?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="my_profile.php" class="btn btn-default btn-flat">Profile</a>
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
          <?php  echo $profile_pic ?>"
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fullname']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <hr/>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
          <li>
            <a href="timeline.php">
              <i class="fa fa-calendar-times-o"></i> <span>Time Line</span>
            </a>
          </li>
        <li class="active">
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
  <input type="hidden" name="mentor_email" id="mentor_email" value="<?php echo $_SESSION['mentor_email']?>">
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>My Tasks</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Tasks</li>
      </ol>
    </section>
<?php 

                  if(!isset($_GET['notification'])){ 

                  }
                  else{
                    include('../config.php');
      
                        $seen = "0";
                        
                        $get_notifications = "UPDATE omg2k17_notifications SET seen = ? WHERE id = ? AND to_author = ?";

                        $fetch_not=$con->prepare($get_notifications);
                        $fetch_not->bindParam(1,$seen);
                        $fetch_not->bindParam(2,$_GET['notification']);
                        $fetch_not->bindParam(3,$_SESSION['mentor_email']);
                        $fetch_not->execute();
                  }

                ?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom panel panel-primary">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><h4>Tasks Creted by me</h4></a></li>
              <li><a href="#tab_2" data-toggle="tab"><h4>Team Tasks</h4></a></li>
              <li><a href="#tab_4" data-toggle="tab"><h4>Create Tasks</h4></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                
                <div class="row">
                  <div class="col-md-12">
                   
                      	<div class="box box-primary">
		              <div class="box-header">
		                <h3 class="box-title">Tasks Creted by me</h3>
		              </div>
		              <!-- /.box-header -->
		              <div class="box-body" id="components1">
		                <table id="example1" class="table table-bordered table-striped">
		                  <thead>
		                  <tr class="info">
                        <th>Team Id</th>
		                    <th>Task Id</th>
		                    <th>Task Title</th>
		                    <th>Task Start Date</th>
		                    <th>Task End date</th>
		                    <th>Task Status</th>

		                    <th>Details</th>
		                  </tr>
		                  </thead>
		                  <tbody id="my_tasks">
		                  <?php 
		                  
                  				include('../config.php');
                  			
                  			
                  				$query = "SELECT * FROM omg2k17_tasks WHERE task_by = ? ORDER BY id DESC";
                  			
                  				$fet_data =$con->prepare($query);
                  				$fet_data->bindParam(1,$_SESSION['mentor_email']);

                  				$fet_data->execute();
                  			
                  				$row =$fet_data->fetchAll();
                  			
                  				$num = $fet_data->rowCount();
                  			
                  				if($num>0){
                  					foreach ($row as $men_tas) {
                  						
                  						echo '
                  			                  <tr id= "'.$men_tas['id'].'" class="comms">
                                              <td>'.$men_tas['id'].'</td>
                  			                   		<td>'.$men_tas['id'].'</td>
                  			                      <td>'.$men_tas['task_title'].'</td>
                  			                      <td>'.$men_tas['task_start_date'].'</td>
                  			                      <td>'.$men_tas['task_end_date'].'</td>
                  						                <td>'.$men_tas['status'].'</td>
                                              <td  id="'.$men_tas['id'].'"><span class="btn btn-primary getDetails" data-toggle="modal" data-target="#myModal"  id="'.$men_tas['id'].'" >View Details</span></td>
                  			                   </tr>
                  			                                              ';
                  					
                  					}
                  				}
                  				else{
                  					echo 'Nothing to show';
                  				}
                  			
                  			?>
		                  </tbody>
		                  <tfoot>
		                  <tr class="info">
                        <th>Team Id</th>
		                    <th>Task Id</th>
		                    <th>Tasl Title</th>
		                    <th>Task Start Date</th>
		                    <th>Task End Date</th>
		                     <th>Task Status</th>

		                    <th>Details</th>
		                  </tr>
		                  </tfoot>
		                </table>
		              </div>

		              <!-- /.box-body -->
		            </div>
                      </div>
                    
                </div>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
                  <div class="col-md-8">
                    <div class="box box-default">
                      <div id="team_tasks">
                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <div class="row">
                  <div class="col-md-8">
                    <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Create Task</h3>
                      </div>
                      <div class="box-body">
                        
                        <div class="form-group">
                          <label for="TaskName">Task Name</label>
                          <input type="text" class="form-control" id="TaskName" placeholder="Task Name">
                        </div>
                        
                        <div class="form-group">
                          <label for="TaskDescription">Task Description</label>
                          <textarea class="form-control" id="TaskDescription" placeholder="Task Description"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="StartDate">Start Date</label>
                          <input type = "text" class="form-control" id = "datepicker-1" placeholder="Select Start Date">
                        </div>

                        <div class="form-group">
                          <label for="EndDate">End Date</label>
                          <input type = "text" class="form-control" id = "datepicker-2" placeholder="Select End Date">
                        </div>
                        
                        <input type="hidden" name="task_by" id="task_by" value="<?php echo $_SESSION['mentor_email'] ?>">

                        <input type="hidden" name="fullname" id="fullname" value="<?php echo $fullname ?>">

                        
                        <div class="form-group">
                        <label>Select Team</label>
  	                <select class="form-control" id="task_to">
                          <?php 
                            include('../config.php');

                            $select_team = "SELECT * FROM omg2k17_teams WHERE  mentor_id = ?";
                            $fetch_team = $con->prepare($select_team);
                            $fetch_team->bindParam(1,$_SESSION['mentor_email']);
                            $fetch_team->execute();
                            $row = $fetch_team->fetchAll();
                            foreach ($row as $team_mem) {
                              echo '
                              	<option value="'.$team_mem['team_id'].'">'.$team_mem['team_id'].'</option>
                                    
                                   ';
                            }
                          ?>
                         </select> 
                      </div>

                      </div>
                      <!-- /.box-body -->

                      <div class="box-footer">
                        <button type="button" id="add_task" class="btn btn-primary">Add Task</button>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4">
                     <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Recently Added Tasks</h3>
                        </div>
                        <div class="box-body" style="height: 400px;overflow-y: scroll;">
                          <ul class="products-list" id="get_tasks">
                            
                          </ul>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
  </footer>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>
<!-- ./wrapper -->

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
<script src="css/sweetalert/jquery.sweet-alert.custom.js"></script>
<script src="css/sweetalert/sweetalert.min.js"></script>
 <script>
  $(function() {
    $( "#datepicker-1" ).datepicker({    
      dateFormat: "yy-mm-dd",
      minDate: 0  
    });
      $( "#datepicker-2" ).datepicker({    
        dateFormat: "yy-mm-dd",
        minDate: 1
    });
      });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){    
      $("#add_task").click(function(){
        var task_title = $("#TaskName").val();
        var task_description = $("#TaskDescription").val();
        var task_start_date = $("#datepicker-1").val();
        var task_end_date = $("#datepicker-2").val();
        var task_to = $("#task_to").val();
        var team_id = $("#task_to").val();
        var task_by = $("#task_by").val();
        var fullname= $("#fullname").val();
	 var dataString = 'task_title='+task_title+'&task_description='+task_description+'&task_start_date='+task_start_date+'&task_end_date='+task_end_date+'&task_to='+task_to+'&task_by='+task_by+'&fullname='+fullname+'&team_id='+team_id;

	
	if(task_title==""||task_description==""||task_start_date==""||task_end_date==""||task_to==""){
		                      swal("Please fill all the fields","all fileds mandetory", "warning");
	}
	else{
                $.ajax({
                type: "POST",
                url: "tasks.php",
                data: dataString,
                cache: false,
                success: function(data){
                    if(data=="success"){
                      $("#TaskName").val('');
		      $("#TaskDescription").val('');
		      $("#datepicker-1").val('');
		      $("#datepicker-2").val('');
		      $("#task_to").val('');
        
                      swal("Success","Task Add to "+task_to, "success");
                    }
                    else{
                        swal("Oops! Something went wrong!!", "Please try again!", "warning");
                      }

                }
              });  
              }
      });
    });
  </script>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script type="text/javascript" src="notifications.js"></script>
</body>
</html>
