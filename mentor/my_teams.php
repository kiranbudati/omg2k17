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
                  <?php echo $_SESSION['fullname']; ?> -<?php echo $domain; ?>
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
        <li>
          <a href="my_tasks.php">
            <i class="fa fa-pencil-square-o"></i> <span>My Tasks</span>
          </a>
        </li>
        <li class="active">
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
        My Teams
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Teams</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <?php 
    
              include('../config.php');


              $get_teams = "SELECT * FROM omg2k17_teams WHERE mentor_id = ?";

              $fetch_teams = $con->prepare($get_teams);
              $fetch_teams->bindParam(1,$_SESSION['mentor_email']);
              $fetch_teams->execute();
              $row = $fetch_teams->fetchAll();

              $num = $fetch_teams->rowCount();
              if($num>0){
                foreach ($row as $ft_teams) {


                  echo '<div class="col-md-6">
                        <div class="box box-primary collapsed-box box-solid">
                          <div class="box-header with-border">
                            <h3 class="box-title">'.$ft_teams['team_id'].'</h3>
              
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                              </button>
                            </div>
                            <!-- /.box-tools -->
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">
                      <dl class="dl-horizontal">
                            <dt>Team Name:</dt>
                                <dd>'.$ft_teams['team_name'].'</dd>
                                <dt>Idea Title :</dt>
                                <dd>'.$ft_teams['idea_title'].'</dd>
                                <dt>Idea Domain :</dt>
                                <dd>'.$ft_teams['idea_domain'].'</dd>
                                <dt>Idea Description : </dt>
                                <dd>'.$ft_teams['idea_description'].'</dd>
                                <dt>Mentor Id : </dt>
                                <dd>'.$ft_teams['mentor_id'].'</dd>
                              </dl>
                          </div>
                          <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                      </div>';
                  }
                }
           ?>
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
<script type="text/javascript" src="notifications.js"></script>

</body>
</html>
