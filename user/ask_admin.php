  <?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
      session_start();

      if( !isset($_SESSION['user_email']) ){
          header("location:../index.php");
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
    <title>omg - 2k17 || User Panel</title>
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
                <span class="hidden-xs"><?php echo $_SESSION['user_name']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <?php echo $profile_pic; ?>
                  <p>
                    <?php echo $_SESSION['user_name']; ?> <?php echo $role ?> 
                    <small>Member since <?php echo $created; ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
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
            <?php  echo $profile_pic?>"
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['user_name']; ?></p>
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
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>Questions</span>
            </a>
            <ul class="treeview-menu">
              <li  class="active"><a href="ask_admin.php"><i class="fa fa-question"></i> Ask Admin</a></li>
               <li><a href="ask_mentor.php"><i class="fa fa-question"></i> Ask Mentor</a></li>
              <li><a href="ask_makers.php"><i class="fa fa-question"></i> Ask Makers</a></li>
              <li><a href="my_questions.php"><i class="fa fa-question"></i> My Questions</a></li>
            </ul>
          </li>
          <!--<li class="treeview">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Components</span>
            </a>
            <ul class="treeview-menu">
              <li><a href="list_components.php"><i class="fa fa-circle-o"></i> List components</a></li>
               <li><a href="request_components.php"><i class="fa fa-circle-o"></i> Request Components</a></li>
              <li><a href="req_com_stat.php"><i class="fa fa-circle-o"></i> Requested Components Status</a></li>

            </ul>
          </li>-->
          <li>
            <a href="my_profile.php">
              <i class="fa fa-user"></i> <span>Profile</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
 <input type="hidden" name="user_name" id="user_email1" value="<?php echo $_SESSION['user_email'] ?>">
    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Questions
          <small>Ask Admin</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Questions</a></li>
          <li class="active">Ask Admin</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="box box-info ">
              <div class="box-header with-border">
                <h3 class="box-title">Write Question to Admin</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="user_name" id="user_name" value="<?php echo $_SESSION['user_name']; ?>">
                  <input type="hidden" name="user_email" id="user_email" value="<?php echo $_SESSION['user_email']; ?>">
                  <input type="hidden" name="team_id" id="team_id" value="<?php echo $_SESSION['team_id']; ?>">
                  <label for="question_title">Question title</label>
                  <input type="text" name="question_title" id="question_title" class="form-control" placeholder="Question title..." required="">
                </div>
                <div class="form-group">
                  <label for="question_description">Question Description</label>
                  <textarea class="form-control" rows="5" id="question_description" name="question" placeholder="Write question...." required=""></textarea>
                </div>
              </div>

              <div class="box-footer">
                <button id="post_question" class="btn btn-info pull-right post_question">Post</button>
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
    <script type="text/javascript">
    $(document).ready(function(){
  $(".post_question").click(function(){ 
        var user_name = $("#user_name").val();
        var user_email = $("#user_email").val();
        var team_id = $("#team_id").val();
        var question_title = $("#question_title").val();
        var question_description = $("#question_description").val();
 
      var dataString = 'user_name='+user_name+'&user_email='+user_email+'&team_id='+team_id+'&question_title='+question_title+'&question_description='+question_description;
      
      if(question_title==""||question_description==""){
        swal("Please fill all fields", "All fields are mandatory", "warning");
      }
      else{
        $.ajax({
              type: "POST",
              url: "send/post_ask_admin.php",
              data: dataString,
              success: function() {
                swal("Question Posted to Admin!", "we will get back  to you soon!", "success");
                $("#question_title").val('');
                $("#question_description").val('');
                location.reload();
              }
          });
      }
});
});
</script>
<script type="text/javascript" src="notifications.js"></script>

  </body>
  </html>
