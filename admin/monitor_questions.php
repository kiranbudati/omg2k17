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
<script type="text/javascript" src="../user/css/sweetalert/jquery.sweet-alert.custom.js"></script>
<script type="text/javascript" src="../user/css/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="../user/css/sweetalert/sweetalert.css">
-
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
          <li class="treeview active">
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
              <li class="active"><a href="monitor_questions.php"><i class="fa fa-question"></i>Monitor Questions</a></li>
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
          Questions
          <small>Monitor Questions</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i>Questions</a></li>
          <li class="active">Monitor Questions</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content">
       <div class="row">
         <div class="col-md-12">
         <div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>

                <h3 class="box-title">Questions</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <ul class="todo-list">
                  <?php

                  date_default_timezone_set("Asia/Kolkata");

                  function get_timeago( $ptime )
                  {
                      $estimate_time = time() - $ptime;

                      if( $estimate_time < 1 )
                      {
                          return 'less than 1 second ago';
                      }

                      $condition = array( 
                                  12 * 30 * 24 * 60 * 60  =>  'year',
                                  30 * 24 * 60 * 60       =>  'month',
                                  24 * 60 * 60            =>  'day',
                                  60 * 60                 =>  'hour',
                                  60                      =>  'minute',
                                  1                       =>  'second'
                      );

                      foreach( $condition as $secs => $str )
                      {
                          $d = $estimate_time / $secs;

                          if( $d >= 1 )
                          {
                              $r = round( $d );
                              return ' ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
                          }
                      }
                  }

                  include('../config.php');

                  $get_my_admin_questions = "SELECT * FROM omg2k17_questions ORDER BY post_time ASC";

                  $fetch_ques = $con->prepare($get_my_admin_questions);
                  $fetch_ques->bindParam(1,$question_to);

                  $fetch_ques->execute();
                  $row = $fetch_ques->fetchAll();
                  $num = $fetch_ques->rowCount();
                  if($num>0){
                    foreach ($row as $ft_qu) {
                    $post_time=get_timeago(strtotime($ft_qu['post_time']));

                      if($ft_qu['question_to']=="Mentor"){
                          $que_t = '<span class="label label-warning">Mentor</span>';
                        }
                        else if($ft_qu['question_to']=="Admin"){
                          $que_t = '<span class="label label-danger">Admin</span>';
                        }
                        else{
                          $que_t = '<span class="label label-success">Maker</span>';
                        }
                      echo '<li>
                            <a>Question Id</a>
                            <span class="label label-primary">'.$ft_qu['id'].'</span>
                            <span class="text" style="word-break: break-all">'.$ft_qu['question_title'].'
                            </span>
                            <small><a>'.$post_time.'</a>Question to '.$que_t.' by <a>'.$ft_qu['author_email'].'</a></small>
                            <div class="tools">
                              <i class="fa fa-trash-o delete" id= "'.$ft_qu['id'].'"></i>
                            </div>
                          </li>';
                    }
                  }
                  else{
                    echo "No Questions Asked yet!";
                  }
                  ?>
                  
                </ul>
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

  <!-- ./wrapper -->


  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
 <script type="text/javascript">
    $(document).ready(function(){
      $(".delete").click(function(){ 
        var delete_id= this.id;  
         var deleteString = 'delete_id='+delete_id;
          $.ajax({
                type: "POST",
                url: "delete/delete_question.php",
                data: deleteString,
                success: function(data) {
                  if(data=='deleted'){
                    swal("Question Deleted", "", "success");
                      location.reload();  //Refresh page
                  }
                }
            });

      });
    });

</script>
<script type="text/javascript" src="notifications.js"></script>

  </body>
  </html>
