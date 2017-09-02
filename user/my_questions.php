  <?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);
      session_start();

      if( !isset($_SESSION['user_email']) ){
          header("location:../index.php");
        exit();

          $user_email = $_SESSION['user_email'];
         $user_name = $_SESSION['user_name'];
        
        

  }
  ?>
  <?php 

      $profile_pic ='<img src="user.png" class="user-image img-circle" alt="profile pic" />';

        $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';

        $profile_pic_chat = '<img src="user.png" class="direct-chat-img" alt="profile pic" />';      
      
      include('../config.php');

      $query = "SELECT * FROM omg2k17_users WHERE email = ?";

      $stmt = $con->prepare($query);
      $stmt->bindParam(1,$_SESSION['user_email']);
      $stmt->execute();
      $row=$stmt->fetchAll();

      foreach ($row as $user) {
       
        $created = $user['created'];

      }
       
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
              <li><a href="ask_admin.php"><i class="fa fa-question"></i> Ask Admin</a></li>
               <li><a href="ask_mentor.php"><i class="fa fa-question"></i> Ask Mentor</a></li>
              <li><a href="ask_makers.php"><i class="fa fa-question"></i> Ask Makers</a></li>
              <li class="active"><a href="my_questions.php"><i class="fa fa-question"></i> My Questions</a></li>
            </ul>
          </li>
          <!--
          <li class="treeview">
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

    <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Questions
          <small>My Questions</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Questions</a></li>
          <li class="active">My Questions</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-8">
          <div class="box box-widget">
            <?php

              if(!isset($_GET['question'])){

                include '../config.php';
                
                $fect_q = "SELECT * FROM omg2k17_questions WHERE author_email = ? ORDER BY post_time DESC LIMIT 1";
                $ftech_all = $con->prepare($fect_q);
                $ftech_all->bindParam(1,$_SESSION['user_email']);
                $ftech_all->execute();

                $rowq = $ftech_all->fetchAll();
                $numq = $ftech_all->rowCount();
                if($numq>0){
                    foreach ($rowq as $ft_lastq) {
                      
                      $myques = $ft_lastq['question_title'];

                      if($ft_lastq['question_to']=="Mentor"){
                      $que_t = '<span class="label label-warning">Mentor</span>';
                    }
                    else if($ft_lastq['question_to']=="Admin"){
                      $que_t = '<span class="label label-danger">Admin</span>';
                    }
                    else{
                      $que_t = '<span class="label label-success">Maker</span>';
                    }

                      echo '
                    <div class="box-header with-border">
                      
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                      <hr/>
                      <!-- /.box-tools -->
                      <div class="user-block">
                        '.$profile_pic.'
                        <span class="username" style="word-break: break-all"><a href="#" >'.$ft_lastq['question_title'].'</a></span>
                        <span class="description">Asked to &nbsp;: &nbsp; '.$que_t.' &nbsp; at &nbsp;&nbsp;: '.$ft_lastq['post_time'].'</span>
                      </div>
                      <!-- /.user-block -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="word-break: break-all">
                      <p>'.$ft_lastq['question_description'].'</p>
                    </div>
                    <div class="box-footer">
                        '.$profile_pic_sm.'
                       
                        <div class="img-push">
                          <input type="hidden" id="com_user_name" value="'.$_SESSION['user_name'].'">
                          <input type="hidden" id="com_user_email" value="'.$_SESSION['user_email'].'">
                          <input type="hidden" id="question_id" value="'.$ft_lastq['id'].'">
                          <input type="hidden" id="question_title" value="'.$ft_lastq['question_title'].'">
                          <input type="hidden" id="person_type" value="Maker">
                          <input type="text" id="post_comment" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                    </div>';
                }
                  echo '<div id="get_comment"></div>';
                }
                else{
                    echo '<div class="well well-lg">No questions posted yet</div>';
                }
              }
              else{
                  include '../config.php';
                
                $fect_qe = "SELECT * FROM omg2k17_questions WHERE id = ?";
                $ftech_alla = $con->prepare($fect_qe);
                $ftech_alla->bindParam(1,$_GET['question']);
                $ftech_alla->execute();

                $rowqa = $ftech_alla->fetchAll();
                $numqa = $ftech_alla->rowCount();
                if($numqa>0){
                    foreach ($rowqa as $ft_lastqa) {

                      if($ft_lastqa['question_to']=="Mentor"){
                      $que_toa = '<span class="label label-warning">Mentor</span>';
                    }
                    else if($ft_lastqa['question_to']=="Admin"){
                      $que_toa = '<span class="label label-danger">Admin</span>';
                    }
                    else{
                      $que_toa = '<span class="label label-success">Maker</span>';
                    }

                      echo '
                    <div class="box-header with-border">
                      <!-- /.user-block -->
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                      <hr/>
                      <!-- /.box-tools -->
                      <div class="user-block">
                        '.$profile_pic.'
                        <span class="username"><a href="#" style="word-break: break-all">'.$ft_lastqa['question_title'].'</a></span>
                        <span class="description">Asked to &nbsp;: &nbsp;'.$que_toa.'&nbsp; at &nbsp;: &nbsp; '.$ft_lastqa['post_time'].' </span>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="word-break: break-all">
                      <p>'.$ft_lastqa['question_description'].'</p>
                    </div>
                    <div class="box-footer">
                        '.$profile_pic_sm.'
                        <div class="img-push">
                        <input type="hidden" id="com_user_name" value="'.$username.'">
                          <input type="hidden" id="com_user_email" value="'.$_SESSION['user_email'].'">
                          <input type="hidden" id="question_id" value="'.$ft_lastqa['id'].'">
                          <input type="hidden" id="question_title" value="'.$ft_lastqa['question_title'].'">
                          <input type="hidden" id="person_type" value="Maker">

                          <input type="text" id="post_comment" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                    </div>';
                }
                        echo '<div id="get_comment"></div>';

                }
                else{

                }
              }

             ?>
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
                        $fetch_not->bindParam(3,$_SESSION['user_email']);
                        $fetch_not->execute();
                  }

                ?>

             </div>
          </div>
          <div class="col-md-4">
            <span class="list-group-item active">Questions</span>
            <ul class="list-group" style="height: 500px; overflow-y: scroll;">
              <?php
   
                include('../config.php');

                $question_to = "Admin";

                $get_my_admin_questions = "SELECT * FROM omg2k17_questions WHERE author_email = ? ";

                $fetch_ques = $con->prepare($get_my_admin_questions);
                $fetch_ques->bindParam(1,$_SESSION['user_email']);

                $fetch_ques->execute();
                $row = $fetch_ques->fetchAll();
                $num = $fetch_ques->rowCount();
                if($num>0){
                  foreach ($row as $ft_qu) {

                    if($ft_qu['question_to']=="Mentor"){
                      $que_to = '<span class="label label-warning 
                              pull-right">Mentor</span>';
                    }
                    else if($ft_qu['question_to']=="Admin"){
                      $que_to = '<span class="label label-danger pull-right">Admin</span>';
                    }
                    else{
                      $que_to = '<span class="label label-success pull-right">Maker</span>';
                    }

                    echo '  <li class="list-group-item"><a href="my_questions.php?question='.$ft_qu['id'].'"  style="word-break: break-all">'.$ft_qu['question_title'].'</a>'.$que_to.'</li>';
                  }
                }
                else{
                  echo "No Questions Asked yet!";
                }
                ?>
              
              </li>
            </ul>
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

      function get_comments(){
        var question_id = $("#question_id").val();
        var dataString = 'question_id='+question_id;

          $.ajax({
                
                type: "GET",
                url: "get/get_comments.php",
                data: dataString,
                cache: false,
                success: function(data){
                  $("#get_comment").html(data);
                }
              });
      }


      get_comments();

        setInterval(function(){
          get_comments();              
        },3000);
        

        function submitComment(){

          var user_name = $('#com_user_name').val();
          var user_email = $('#com_user_email').val();
          var question_id = $('#question_id').val();
          var question_title = $('#question_title').val();
          var person_type = $('#person_type').val();
          var comment = $('#post_comment').val();

          var dataString ='com_user_name='+user_name+'&com_user_email='+user_email+'&question_id='+question_id+'&question_title='+question_title+'&person_type='+person_type+'&post_comment='+comment;

          if(user_name==""|| user_email==""||question_id==""||question_title==""||person_type==""||comment==""){
            alert("Fields empty");
          }
          else{
            $.ajax({
                
                type: "POST",
                url: "send/send_comment.php",
                data: dataString,
                cache: false,
                success: function(data){
                                     $("#post_comment").val('');
                }
              });
          }
        }

        $('#post_comment').keypress(function(e) {
        if (e.which == '13') {
         submitComment();
       }
   });
});
    
  </script>
    <script type="text/javascript" src="notifications.js"></script>
     <input type="hidden" name="user_name" id="user_email1" value="<?php echo $_SESSION['user_email'] ?>">

  </body>
  </html>
