  <?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
      session_start();

      if( !isset($_SESSION['admin_email']) ){
          header("location:index.php");
        exit();

        
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
    <link rel="stylesheet" href="../user/plugins/timepicker/bootstrap-timepicker.min.css">

<script type="text/javascript" src="../user/css/sweetalert/jquery.sweet-alert.custom.js"></script>
<script type="text/javascript" src="../user/css/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../user/css/sweetalert/sweetalert.css">
<script src="../user/plugins/timepicker/bootstrap-timepicker.min.js"></script>

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
                    <small>Member since <?php echo $created; ?></small>
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
          <li class="treeview active">
            <a href="#">
              <i class="fa fa- fa-bell"></i>
              <span>Announcements</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="workshops.php"><i class="fa fa-wrench"></i>WorkShops</a></li>
              <li><a href="startup_talks.php"><i class="fa fa-microphone"></i>Startup Talks</a></li>
              <li class="active"><a href="help_desk.php"><i class="fa fa-desktop"></i>Help Desk</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-newspaper-o"></i> <span>Questions</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="admin_questions.php"><i class="fa fa-question"></i> Admin questions</a></li>
              <li><a href="mentor_questions.php"><i class="fa fa-question"></i>Mentor Questions</a></li>
              <li><a href="maker_questions.php"><i class="fa fa-question"></i>Maker Questions</a></li>
              <li><a href="monitor_questions.php"><i class="fa fa-question"></i>Monitor Questions</a></li>
              <li><a href="monitor_comments.php"><i class="fa fa-question"></i>Monitor Comments</a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Components</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="list_components.php"><i class="fa fa-circle-o"></i> List Components</a></li>
              <li><a href="component_requests.php"><i class="fa fa-circle-o"></i>Component Requests</a></li>
            </ul>
          </li>
          <li>
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
          Announcements
          <small>Help Desk</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Announcements</a></li>
          <li class="active">Help Desk</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
       <div class="row">
         
         <div class="col-md-8">
           <div class="box box-info ">
              <div class="box-header with-border">
                <h3 class="box-title">Post new Help Desk announcement</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="help_desk">Talk title</label>
                  <input type="text" name="help_desk" id="help_desk" class="form-control" placeholder="Talk title..." required="">
                </div>

                <div class="form-group">
                  <label for="venue">Event venue</label>
                  <input type="text" name="venue" id="venue" class="form-control" placeholder="Event Venue" required="">
                </div>
             </div>

              <div class="box-footer">
                <button id="post_question" class="btn btn-info pull-right post_workshop">Post</button>
              </div>
          </div>
         </div>

         <div class="col-md-4">
           
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

  <!-- ./wrapper -->


  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>

<script type="text/javascript" src="notifications.js"></script>
<script type="text/javascript">
  
  $(function () { 
       $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

    $(".timepicker").timepicker({
      showInputs: false
    });
});
</script>
 <script type="text/javascript">
    $(document).ready(function(){
    $(".post_workshop").click(function(){ 

        var help_desk = $("#help_desk").val();
      
        var venue = $("#venue").val();

        if(help_desk==""||venue==""){
                  swal("Please fill all fields", "All fields are mandatory", "warning");
        }        
        else{
          var dataString ='help_desk='+help_desk+'&venue='+venue;

          $.ajax({
                type: "POST",
                url: "send/add_help_desk.php",
                data: dataString,
                success: function(data) {
                  swal("announcement posted", " ", "success");
                  location.reload();
                }
            });
        }

});
});

</script>
<
  </body>
  </html>
