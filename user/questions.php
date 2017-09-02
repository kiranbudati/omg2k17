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
  function getQuestions(){
    
    include('../config.php');

    $query = "SELECT * FROM omg2k17_questions ORDER BY date desc";

    $stmt = $con->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll();
 
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
<?php 

  include('../config.php');

  if(isset($_POST['comment'])){

    $com_auth_name = $_POST['com_auth_name'];
    $com_auth_email = $_POST['com_auth_email'];
    $comment = $_POST['comment'];
    $cm_question = $_POST['ques_title'];
    $cm_id=$_POST['ques_id'];

    $quert = "INSERT INTO omg2k17_comments(ques_id,com_auth_name,com_auth_email,question_title,comment) VALUES(?,?,?,?,?)";

    $com = $con->prepare($quert);
    $com->bindParam(1,$cm_id);
    $com->bindParam(2,$com_auth_name);
    $com->bindParam(3,$com_auth_email);
    $com->bindParam(4,$cm_question);
    $com->bindParam(5,$comment);

      $com->execute();
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>omg - 2k17 || User Panel</title>

  <!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
   <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <script type="text/javascript">
    $(document).ready(function(){
      $("#submit").click(function(){
      var user_name = $("#user_name").val();
      var user_email = $("#user_email").val();
      var x = document.getElementById("snackbar")
        x.className = "show";

        var user_profile_pic = $("#user_profile_pic").val();
      var question_title = $("#question_title").val();
      var question = $("#question").val();
      // Returns successful data submission message when the entered information is stored in database.
      var dataString = 'user_name='+ user_name +'&user_profile_pic'+user_profile_pic+ '&user_email='+ user_email + '&question_title='+ question_title + '&question='+ question;
      if(user_name==''||user_email==''||question_title==''||question=='')
      {
      alert("Please Fill All Fields");
      }
      else
      {
      // AJAX Code To Submit Form.
      $.ajax({
      type: "POST",
      url: "post_submit.php",
      data: dataString,
      cache: false,
      success: function(result){
        document.question.reset();
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 6000);
      }
      });
      }
      return false;
      });
    });
  </script>

  <style>
    #snackbar {
        visibility: hidden;
        min-width: 250px;
        margin-left: -125px;
        background-color: #333;
        color: #fff;
        text-align: center;
        border-radius: 2px;
        padding: 16px;
        position: fixed;
        z-index: 1;
        left: 50%;
        bottom: 30px;
        font-size: 17px;
    }

    #snackbar.show {
        visibility: visible;
        -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
        animation: fadein 0.5s, fadeout 0.5s 2.5s;
    }

    @-webkit-keyframes fadein {
        from {bottom: 0; opacity: 0;} 
        to {bottom: 30px; opacity: 1;}
    }

    @keyframes fadein {
        from {bottom: 0; opacity: 0;}
        to {bottom: 30px; opacity: 1;}
    }

    @-webkit-keyframes fadeout {
        from {bottom: 30px; opacity: 1;} 
        to {bottom: 0; opacity: 0;}
    }

    @keyframes fadeout {
        from {bottom: 30px; opacity: 1;}
        to {bottom: 0; opacity: 0;}
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
          <!-- User Account: style can be found in dropdown.less -->
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
                  <?php echo $_SESSION['user_name']; ?> - Web Developer
                  <small>Member since <?php echo $created; ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
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
        <li class="active">
          <a href="questions.php">
            <i class="fa fa-newspaper-o"></i> <span>Questions</span>
          </a>
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
            <li><a href="list_components.php"><i class="fa fa-circle-o"></i> List components</a></li>
            <li><a href="request_components.php"><i class="fa fa-circle-o"></i> Request Components</a></li>
            <li><a href="req_com_stat.php"><i class="fa fa-circle-o"></i> Requested Components Status</a></li>
            <li><a href="return_comp.php"><i class="fa fa-circle-o"></i> Return Components</a></li>
          </ul>
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
        Have a Question ? <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> Ask Here..!</button>
      </h1>
    </section>
    <!-- Main content -->
    <section class="content">
      
    <!-- Question start-->
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div id="snackbar">Question Posted successfully....</div>

          <!-- Horizontal Form -->
          <div class="box box-info ">
            <div class="box-header with-border">
              <h3 class="box-title">Write Question</h3>
            </div>

            <!-- /.box-header -->
            <!-- form start -->
            <form class="form" name="question">
              <div class="box-body">
              <input type="hidden" id="user_name" name="user_name" value="<?php echo $_SESSION['user_name'];?>">
              <input type="hidden" id="user_profile_pic" name="user_profile_pic" value="<?php $user_pic ?>">
              <input type="hidden" id="user_email" name="user_email" value="<?php echo $_SESSION['user_email']; ?>">
                <div class="form-group">
                  <label>Question title</label>
                  <input type="text" name="question_title" id="question_title" class="form-control" placeholder="Question title..." required="">
                </div>
                
                <div class="form-group">
                  <textarea class="form-control" rows="3" id="question" name="question" placeholder="Write question...." required=""></textarea>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" id="submit" name="submit" class="btn btn-info pull-right">Post</button>

              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
          <!-- /.box -->
      </div>
      <!-- Question end-->

      <!-- Post start-->
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <?php 
              $ques = getQuestions();
          foreach($ques as $det) 
                {
                        $id=$det['id'];
                        $auth_email = $det['author_email'];
                        $auth_pic = '<img src="data:image/jpeg;base64,'.base64_encode($det['auth_profile_pic']) .'" class="img-circle" alt="profile pic" />';
                        $question = $det['question'];
                        $question_title = $det['question_title'];
                        $auth_name = $det['author_name'];
                        $post_date = $det['date'];


                        $datetime1=new DateTime("now");
                        $datetime2=date_create($post_date);
                        $diff=date_diff($datetime1, $datetime2);
                        $timemsg='';
                        if($diff->y > 0){
                            $timemsg = $diff->y .' year'. ($diff->y > 1?"'s":'');

                        }
                        else if($diff->m > 0){
                         $timemsg = $diff->m . ' month'. ($diff->m > 1?"'s":'');
                        }
                        else if($diff->d > 0){
                         $timemsg = $diff->d .' day'. ($diff->d > 1?"'s":'');
                        }
                        else if($diff->h > 0){
                         $timemsg = $diff->h .' hour'.($diff->h > 1 ? "'s":'');
                        }
                        else if($diff->i > 0){
                         $timemsg = $diff->i .' minute'. ($diff->i > 1?"'s":'');
                        }
                        else if($diff->s > 0){
                         $timemsg = $diff->s .' second'. ($diff->s > 1?"'s":'');
                        }

                    $timemsg = $timemsg.' ago';

                  ?>
          <!-- Box Comment -->

          <div class="box box-widget">

            <div class="box-header with-border">
              <div class="user-block">
                <?php echo $auth_pic; ?>
                <span class="username"><a href="#"><?php echo $question_title; ?></a></span>
                <span class="description">
                   <h5> Posted by <i class="fa fa-user text-info"> &nbsp;<?php echo $auth_name;?></i>

                   <i class="fa  fa-clock-o text-info"> <?php echo $timemsg; ?></i></h5>
                </span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">

                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
              <!-- post text -->
              <!-- Attachment -->
              <div class="attachment-block clearfix" style="word-wrap: break-word">
                <?php echo $question; ?>
                <!-- /.attachment-pushed -->
              </div>
              <!-- /.attachment-block -->

              
                  <?php 
                    include('../config.php');
                    $num_com = "SELECT COUNT(*) FROM omg2k17_comments WHERE question_title = ?";
                    $n_c = $con->prepare($num_com);
                    $n_c->bindParam(1,$question_title);
                    $n_c->execute();

                    $number_of_comments = $n_c->fetchColumn();

                    echo '<span class="pull-right text-muted"> 
                            <i class="btn btn-info" data-toggle="collapse" data-target="#demo">
                              '.$number_of_comments.' Comments                            
                            </i>
                          </span>


                    ';  
                  ?>
            
            </div>
            <!-- /.box-body -->
            <?php 
              
              include('../config.php');

              $comme = "SELECT * FROM omg2k17_comments";
              $fet_com = $con->prepare($comme);
              $fet_com->execute();
              
              $comm = $fet_com->fetchAll();

              foreach ($comm as $co) {
                $comment_author = $co['com_auth_name'];
                $comment_commenet = $co['comment'];
                $com_date = $co['date'];

                echo '<div class="collapse box-footer box-comments" id="demo">
                  
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                          <span class="username">
                            '.$comment_author.'
                            <span class="text-muted pull-right">'.$com_date.'</span>
                          </span><!-- /.username -->
                      '.$comment_commenet.'
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                  
                </div>';
              }
            ?>
            <!-- /.box-footer -->
            <div class="box-footer">
              <form class="form" name="comnt" method="post">
                <?php echo $profile_pic_sm; ?>
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                    <input type="hidden" name="com_auth_name" id="com_auth_name" value="<?php echo $_SESSION['user_name'] ?>">
                    <input type="hidden" name="com_auth_email" id="com_auth_email" value="<?php echo $_SESSION['user_email'] ?>">
                    <input type="hidden" name="ques_title" id="ques_title" value="<?php echo $question_title ?>">
                    <input type="hidden" name="ques_id" id="ques_id" value="<?php echo $id ?>">
                    <input type="text" class="form-control input-sm" id="comt" name="comment" placeholder="Press enter to post comment">
                  </form>
                </div>
              </form>
            </div>
            <!-- /.box-footer -->
          </div>
          <?php
        }
        ?>
          <!-- /.box -->
        </div>
      </div>
      <!-- Post End -->
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
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
