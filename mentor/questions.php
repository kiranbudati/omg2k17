<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();

    if( !isset($_SESSION['mentor_email']) ){
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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">      <link href = "extra/jquery-ui.css"
           rel = "stylesheet">
            <script src = "extra/jquery-1.10.2.js"></script>
        <script src = "extra/jquery-ui.js"></script>
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
              <span class="hidden-xs"><?php echo $_SESSION['fullname']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <?php echo $profile_pic; ?>
                <p>
                  <?php echo $_SESSION['fullname']; ?> - <?php echo $domain ?>

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
        <li>
          <a href="my_teams.php">
            <i class="fa fa-user"></i> <span>My Teams</span>
          </a>
        </li>
        <li class="active">
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
      <div class="row">
          <div class="col-md-8">
          <div class="box box-widget">
            <?php
               include '../config.php';
                
              if(!isset($_GET['question'])){

                $fect_q = "SELECT * FROM omg2k17_questions ORDER BY post_time DESC LIMIT 1";
                $ftech_all = $con->prepare($fect_q);
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
                        <span class="username"><a href="#" style="word-break: break-all">'.$ft_lastq['question_title'].'</a></span>
                        <span class="description" >by &nbsp;: &nbsp; <span class="label label-info">'.$ft_lastq['author_name'].'</span> &nbsp; at &nbsp;&nbsp;: '.$ft_lastq['post_time'].'</span>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <p style="word-break: break-all">'.$ft_lastq['question_description'].'</p>
                    </div>
                    <div class="box-footer">
                        '.$profile_pic_sm.'
                       
                        <div class="img-push">
                          <input type="hidden" id="com_mentor_name" value="'.$_SESSION['fullname'].'">
                          <input type="hidden" id="com_mentor_email" value="'.$_SESSION['mentor_email'].'">
                          <input type="hidden" id="question_id" value="'.$ft_lastq['id'].'">
                          <input type="hidden" id="question_title" value="'.$ft_lastq['question_title'].'">
                          <input type="hidden" id="person_type" value="Mentor">
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
                      <!-- /.box-tools -->
                      <div class="user-block">
                        '.$profile_pic.'
                        <span class="username"><a href="#" style="word-break: break-all">'.$ft_lastqa['question_title'].'</a></span>
                        <span class="description">by &nbsp;: &nbsp;<span class="label label-info">'.$ft_lastqa['author_name'].'</span>&nbsp; at &nbsp;: &nbsp; '.$ft_lastqa['post_time'].' </span>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <p  style="word-break: break-all">'.$ft_lastqa['question_description'].'</p>
                    </div>
                    <div class="box-footer">
                        '.$profile_pic_sm.'
                        <div class="img-push">
                        <input type="hidden" id="com_mentor_name" value="'.$_SESSION['fullname'].'">
                          <input type="hidden" id="com_mentor_email" value="'.$_SESSION['mentor_email'].'">
                          <input type="hidden" id="question_id" value="'.$ft_lastqa['id'].'">
                          <input type="hidden" id="question_title" value="'.$ft_lastqa['question_title'].'">
                          <input type="hidden" id="person_type" value="Mentor">

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
            <span class="list-group-item active">Questions</span>
            <ul class="list-group" style="height: 500px; overflow-y: scroll;">
              <?php
   
                include('../config.php');

              $pers = "Mentor";
                $get_my_admin_questions = "SELECT * FROM omg2k17_questions WHERE  question_to = ?";

                $fetch_ques = $con->prepare($get_my_admin_questions);
               $fetch_ques->bindParam(1,$pers);
                $fetch_ques->execute();
                $row = $fetch_ques->fetchAll();
                $num = $fetch_ques->rowCount();
                if($num>0){
                  foreach ($row as $ft_qu) {

                    echo '  <li class="list-group-item" style="word-break: break-all"><a href="questions.php?question='.$ft_qu['id'].'">'.$ft_qu['question_title'].'</a><span class="label label-success pull-right">'.$ft_qu['team_id'].'</span></li>';
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

<!-- ./wrapper -->


<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
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
                url: "get/get_mentor_comments.php",
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

          var mentor_name = $('#com_mentor_name').val();
          var mentor_email = $('#com_mentor_email').val();
          var question_id = $('#question_id').val();
          var question_title = $('#question_title').val();
          var person_type = $('#person_type').val();
          var comment = $('#post_comment').val();

          var dataString ='com_mentor_name='+mentor_name+'&com_mentor_email='+mentor_email+'&question_id='+question_id+'&question_title='+question_title+'&person_type='+person_type+'&post_comment='+comment;

          if(mentor_name==""|| mentor_email==""||question_id==""||question_title==""||person_type==""||comment==""){
            alert("Fields empty");
          }
          else{
            $.ajax({
                
                type: "POST",
                url: "send/send_mentor_comment.php",
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
