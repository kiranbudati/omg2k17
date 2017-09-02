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
            <li class="active"><a href="maker_questions.php"><i class="fa fa-question"></i>Maker Questions</a></li>
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
        Questions
        <small>Admin Questions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Questions</a></li>
        <li class="active">Admin Questions</li>
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

                $question_to = "Maker"; 
                
                $fect_q = "SELECT * FROM omg2k17_questions WHERE question_to = ? ORDER BY post_time DESC LIMIT 1";
                $ftech_all = $con->prepare($fect_q);
                $ftech_all->bindParam(1,$question_to);
                $ftech_all->execute();

                $rowq = $ftech_all->fetchAll();
                $numq = $ftech_all->rowCount();
                if($numq>0){
                    foreach ($rowq as $ft_lastq) {
                      
                      $myques = $ft_lastq['question_title'];
                      echo '
                    <div class="box-header with-border">
                      
                      <!-- /.user-block -->
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                      <hr/>
                      <div class="user-block">
                        '.$profile_pic.'
                        <span class="username" style="word-break: break-all"><a href="#">'.$ft_lastq['question_title'].'</a></span>
                        <span class="description" style="word-break: break-all">by &nbsp; <a>'.$ft_lastq['author_name'].'</a> &nbsp; at &nbsp;<a> '.$ft_lastq['post_time'].'</a></span>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <p style="word-break: break-all">'.$ft_lastq['question_description'].'</p>
                    </div>
                    <div class="box-footer">
                        '.$profile_pic_sm.'
                       
                        <div class="img-push">
                          <input type="hidden" id="com_admin_name" value="'.$_SESSION['admin_name'].'">
                          <input type="hidden" id="com_admin_email" value="'.$_SESSION['admin_email'].'">
                          <input type="hidden" id="question_id" value="'.$ft_lastq['id'].'">
                          <input type="hidden" id="question_title" value="'.$ft_lastq['question_title'].'">
                          <input type="hidden" id="person_type" value="Admin">
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

                      echo '
                    <div class="box-header with-border">
                      
                      <!-- /.user-block -->
                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                      </div>
                      <hr/>
                      <div class="user-block">
                        '.$profile_pic.'
                        <span class="username" style="word-break: break-all"><a href="#">'.$ft_lastqa['question_title'].'</a></span>
                        <span class="description">by &nbsp;<a>'.$ft_lastqa['author_name'].'</a>&nbsp; at &nbsp;<a>'.$ft_lastqa['post_time'].'</a> </span>
                      </div>
                      <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <p style="word-break: break-all">'.$ft_lastqa['question_description'].'</p>
                    </div>
                    <div class="box-footer">
                        '.$profile_pic_sm.'
                        <div class="img-push">
                        <input type="hidden" id="com_admin_name" value="'.$_SESSION['admin_name'].'">
                          <input type="hidden" id="com_admin_email" value="'.$_SESSION['admin_email'].'">
                          <input type="hidden" id="question_id" value="'.$ft_lastqa['id'].'">
                          <input type="hidden" id="question_title" value="'.$ft_lastqa['question_title'].'">
                          <input type="hidden" id="person_type" value="Admin">

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
             </div>
          </div>
          <div class="col-md-4">
                        <span class="list-group-item active disabled">Questions</span>
            <ul class="list-group" style="height: 500px;overflow-y: scroll;">
              <?php
   
                include('../config.php');

                $question_to = "Maker";

                $get_my_admin_questions = "SELECT * FROM omg2k17_questions WHERE question_to = ? ";

                $fetch_ques = $con->prepare($get_my_admin_questions);
                $fetch_ques->bindParam(1,$question_to);

                $fetch_ques->execute();
                $row = $fetch_ques->fetchAll();
                $num = $fetch_ques->rowCount();
                if($num>0){
                  foreach ($row as $ft_qu) {

                    echo '  <li style="word-break: break-all" class="list-group-item"><a href="maker_questions.php?question='.$ft_qu['id'].'">'.$ft_qu['question_title'].'</a></li>';
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

      function get_comments(){
        var question_id = $("#question_id").val();
        var dataString = 'question_id='+question_id;

          $.ajax({
                
                type: "GET",
                url: "get/get_admin_comments.php",
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

          var admin_name = $('#com_admin_name').val();
          var admin_email = $('#com_admin_email').val();
          var question_id = $('#question_id').val();
          var question_title = $('#question_title').val();
          var person_type = $('#person_type').val();
          var comment = $('#post_comment').val();

          var dataString ='com_admin_name='+admin_name+'&com_admin_email='+admin_email+'&question_id='+question_id+'&question_title='+question_title+'&person_type='+person_type+'&post_comment='+comment;

          if(admin_name==""|| admin_email==""||question_id==""||question_title==""||person_type==""||comment==""){
            alert("Fields empty");
          }
          else{
            $.ajax({
                
                type: "POST",
                url: "send/send_admin_comment.php",
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

</body>
</html>
