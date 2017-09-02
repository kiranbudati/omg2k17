<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();

    if( !isset($_SESSION['admin_email']) ){
        header("location:index.php");
      exit();

        $admin_email = $_SESSION['admin_email'];
       $admin_name = $_SESSION['admin_name'];


}
?>
<?php include('profile.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>omg - 2k17 || Admin Panel</title>

  <!-- jQuery 2.2.3 -->
<script src="../user/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../user/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../user/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../user/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../user/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../user/plugins/morris/morris.css">
  <!-- jvectormap -->
  <!-- Date Picker -->
  <link rel="stylesheet" href="../user/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../user/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../user/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Bootstrap 3.3.6 -->
<script src="../user/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../user/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../user/plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="../user/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../user/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../user/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../user/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../user/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../user/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->

<script src="../user/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="../user/dist/js/demo.js"></script>
<script type="text/javascript" src="get/get_data.js"></script>
<style type="text/css">
  .well {
    min-height: 20px;
    padding: 0px;
    margin-bottom: 20px;
    background-color: #D9D9D9;
    border: 1px solid #D9D9D9;
    border-radius: 0px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
    padding-left: 15px;
    border:0px;
}
.thumbnail .caption {
    padding: 9px;
    color: #333;
    padding-left: 0px;
    padding-right: 0px;
}
.icon-style
{
    margin-right:15px;
    font-size:18px;
    margin-top:20px;
}
p
{
    margin:3px;
}
.well-add-card
{
    margin-bottom:10px;
}
.btn-add-card
{
    margin-top:20px;
}
.thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 6px solid #D9D9D9;
    border-radius: 15px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
    padding-left: 0px;
    padding-right: 0px;
}
.btn
{
    border-radius:0px;
}
.btn-update
{
    margin-left:15px;}
/*Business Card Css */
.business-card {
  border: 1px solid #cccccc;
  background: #f8f8f8;
  padding: 10px;
  border-radius: 4px;
  margin-bottom: 10px;
}
.profile-img {
  height: 120px;
  background: white;
}
.job {
  color: #666666;
  font-size: 17px;
}
.mail {
  font-size: 16px;
 }
</style>
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
              <span class="hidden-xs"><?php echo $_SESSION['admin_name']; ?></span>
            </a>
            <ul class="dropdown-menu">
              
              <!-- User image -->
              <li class="user-header">
                <?php echo $profile_pic; ?>
                <p>
                  <?php echo $_SESSION['admin_name']; ?>
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
          <?php  echo $profile_pic ?>"
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['admin_name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa- fa-bell"></i>
            <span>Announcements</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="workshops.php"><i class="fa fa-wrench"></i>WorkShops</a></li>
            <li><a href="startup_talks.php"><i class="fa fa-microphone"></i>Startup Talks</a></li>
            <li><a href="help_desk.php"><i class="fa fa-desktop"></i>Help Desk</a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>Questions</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin_questions.php"><i class="fa fa-question"></i>Admin Questions</a></li>
              <li><a href="mentor_questions.php"><i class="fa fa-question"></i>Mentor Questions</a></li>
              <li><a href="maker_questions.php"><i class="fa fa-question"></i>Makers Questions</a></li>
              <li><a href="monitor_questions.php"><i class="fa fa-question"></i>Monitor Questions</a></li>
	      <li><a href="monitor_comments.php"><i class="fa fa-question"></i>Monitor Comments</a></li>
            </ul>
          </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Components</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list_components.php"><i class="fa fa-circle-o"></i> List Components</a></li>
            <li><a href="component_requests.php"><i class="fa fa-circle-o"></i>Component Requests</a></li>
          </ul>
        </li>
        <li class="active">
          <a href="allocate_mentors.php">
            <i class="fa fa-users"></i> <span>Allocate Mentors</span>
          </a>
        </li>
        <li>
          <a href="users_profile.php">
            <i class="fa fa-users"></i> <span>Users</span>
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
          <div class="nav-tabs-custom panel panel-primary">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><h4>Allocate Mentors</h4></a></li>
              <li><a href="#tab_2" data-toggle="tab"><h4>Team Details</h4></a></li>
              <li><a href="#tab_3" data-toggle="tab"><h4>Mentor Details</h4></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8" id="allot_mentors">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                            <h3 class="panel-title">Allot Mentors</h3>
                          </div>
                          <div class="panel-body">
                            <div class="form-horizontal">
                              <div class="form-group">
                                <label for="team_id" class="col-lg-2 control-label">Select Team</label>
                                <div class="col-lg-10">
                                  <select class="form-control" id="team_id">
                                    <option selected="true" disabled="disabled">Select Team</option>
                                    <?php 
                                      include('../config.php');
                                      $mentor_id = "";

                                      $fetch_teams = "SELECT * FROM omg2k17_teams WHERE mentor_id = ?";

                                      $fetch_team_id =$con->prepare($fetch_teams);
                                      $fetch_team_id->bindParam(1,$mentor_id);
                                      $fetch_team_id->execute();

                                      $row = $fetch_team_id->fetchAll();

                                      foreach ($row as $team_id) {
                                        echo '
                                        
                                        <option id="team_id" value="'.$team_id['team_id'].'">'.$team_id['team_id'].'</option>';
                                      }

                                    
                                    ?>
                                  </select>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>  
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Available Mentors</h2>
                      </div>
                    </div>
                    <div class="row">
                      <div id="get_men">
                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div id="get_teams">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div id="get_mentors">
                        
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
    <!-- /.content -->
  </div>
</div>

 <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
  </footer>

<!-- ./wrapper -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    </div>
  </div>
</div>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script type="text/javascript">
  $(document).on('click','.allot_mento',function(){

      var mentor_id= this.id;
      var team_id = $('#team_id').val();
      var dataString = 'mentor_id='+mentor_id+"&team_id="+team_id;
      $.ajax({
            type: "POST",
            url: "allot_mentors.php",
            data: dataString,
            success: function(data) {
                
                $('#team_id').val('');
                location.reload();
            }
        });

    }); 
</script>
<script>
    $(document).ready(function() {
        $('#team_id').change(function(){
            var Value = $(this).val();
            if(Value != null){
                jQuery.ajax({     
                    type: 'POST',         
                    url: "get/team_id.php?team_id="+Value,
                    success: function(data){ 
                        $('#get_men').html(data);
                    }
                });
            }
        });
    });
    
</script>
<script type="text/javascript" src="notifications.js"></script>

</body>
</html>
