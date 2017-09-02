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
  include('../config.php');
  
    if(isset($_POST['request_kit'])){

      $kit_insert = "INSERT INTO omg2k17_kit(user_name,user_email,comp_type,comp_name,num_comp,team_id)SELECT user_name,user_email,comp_type,comp_name,num_comp,team_id FROM omg2k17_temp_kit WHERE user_email= ? ";

      $kit_in = $con->prepare($kit_insert);
      $kit_in->bindParam(1,$_SESSION['user_email']);
      if($kit_in->execute()){

       $result = $kit_in->rowCount();
        
          $del_temp_req = "DELETE FROM omg2k17_temp_kit WHERE user_email= ? ";
            $del_kit = $con->prepare($del_temp_req);
            $del_kit->bindParam(1,$_SESSION['user_email']);
             $del_kit->execute();

          echo '<script>swal("Request sent to Admin", "Admin will respond you in shortly", "success");</script>';
      }
      
    }
    else{
     
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
<?php include('profile.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>omg - 2k17 || User Panel</title>

  <!-- jQuery 2.2.3 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script src="dist/js/demo.js"></script>
  <script>
    $(document).ready(function() {
        $('#comp_type').change(function(){
            var Value = $(this).val();
            if(Value != null){
                jQuery.ajax({     
                    type: 'POST',         
                    url: "comp_name.php?comp_type="+Value,
                    success: function(data){ 
                        $('#comp_name').html(data);
                    }
                });
            }
        })
    })
    
</script>

<script>
    $(document).ready(function() {
        $('#comp_name').change(function(){
            var cname = $(this).val();
           if(cname != null){
                jQuery.ajax({     
                    type: 'POST',         
                    url: "aval_comp.php?comp_name="+cname,
                    success: function(data){ 
                        $('#aval_comp').html(data);
                        
                    }
                });
            }
        })
    })
    
</script>
<!-- jQuery UI 1.11.4 -->
<script src="js/jquery-ui.js"></script>
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
 
  <!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
  <link href="css/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="plugins/ionslider/ion.rangeSlider.css">
  <!-- ion slider Nice -->
  <link rel="stylesheet" href="plugins/ionslider/ion.rangeSlider.skinNice.css">
  <!-- bootstrap slider -->
  <link rel="stylesheet" href="plugins/bootstrap-slider/slider.css">
  <script src="plugins/ionslider/ion.rangeSlider.min.js"></script>
<!-- Bootstrap slider -->
<script src="plugins/bootstrap-slider/bootstrap-slider.js"></script>
//<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.css">
//<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css">
//<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.js"></script>
//<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>


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
                  <?php echo $_SESSION['user_name']; ?> - <?php echo $role ?>
                  <small>Member since <?php echo $created; ?></small>
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
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Questions</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="ask_admin.php"><i class="fa fa-question"></i> Ask Admin</a></li>
             <li><a href="ask_mentor.php"><i class="fa fa-question"></i> Ask Mentor</a></li>
            <li><a href="ask_makers.php"><i class="fa fa-question"></i> Ask Makers</a></li>
            <li><a href="my_questions.php"><i class="fa fa-question"></i> My Questions</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-edit"></i> 
            <span>Components</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list_components.php"><i class="fa fa-circle-o"></i> List Components</a></li>
            <li class="active"><a href="request_components.php"><i class="fa fa-circle-o"></i> Request Components</a></li>
            <li><a href="req_com_stat.php"><i class="fa fa-circle-o"></i> Requested Components Status</a></li>

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
        Components
        <small>Request Components</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Components</a></li>
        <li class="active">Request Components</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Components to kit</h3>
            </div>
              <input type="hidden" name="user_name" id="user_name" value="<?php echo $_SESSION['user_name'] ?>">

              <input type="hidden" name="user_email" id="user_email" value="<?php echo $_SESSION['user_email'] ?>">
              <input type="hidden" name="team_id" id="team_id" value="<?php echo $_SESSION['team_id'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="comptype">Component Type</label>
                  <select name="comp_type" class="form-control" id="comp_type" required="">
                      <option disabled selected value>Select Type of component</option>
                      <?php 

                        include('../config.php');

                          $comp_type = "SELECT DISTINCT comp_type FROM omg2k17_components";
                          $fet_type = $con->prepare($comp_type);
                          $fet_type->execute();

                          $row = $fet_type->fetchAll();

                          foreach ($row as $c_type):
                            echo '<option id="comp_type" value="'.$c_type['comp_type'].'">'.$c_type['comp_type'].'</option>';
                          endforeach;
                      ?>
                      </select>
                  </select>
                </div>
                <div class="form-group">
                  <label for="compname">Component Name</label>
                  <select id="comp_name" name="comp_name" class="form-control" required="">
                      <option disabled selected value>Select Type First</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="compname">Number of Components</label>
                  <span id="aval_comp" name="aval_comp" value="Available">Select Component Name</span>
                </div>
                
              </div>
              <div class="box-footer">
                <button onclick="add_comp_kit();" class="btn btn-primary pull-right">Add to kit</button>
              </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">List of Components</h3>
            </div>
            <div class="panel-body" style="height: 280px;overflow: scroll;">
              <ul class="list-group">
              <?php 
                include('../config.php');

                  $fetch_comp = "SELECT comp_name,aval_comp,num_comp FROM `omg2k17_components` ORDER BY `comp_id` DESC";

                  $stmt = $con->prepare($fetch_comp);
                  $stmt->execute();
                  $row=$stmt->fetchAll();
                  foreach ($row as $comp): 

                    echo '<li class="list-group-item">
                      <a href="#">'.$comp['comp_name'].' 
                      <span class="pull-right badge bg-green">'.$comp['aval_comp'].'</span> 
                      </a>
                    </li>';

                  endforeach;
                ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Kit</h3>
            </div>
            <!-- /.box-header -->
            <form name="req_kit" method="POST">
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Type of the Component</th> 
                  <th>Name of the Component</th>
                  <th>Number of Components</th>
                  <th>Delee Component</th>
                </tr>
            <?php 

              include('../config.php');

                $kit = "SELECT * FROM omg2k17_temp_kit WHERE user_email = ? ";

                $f_kit = $con->prepare($kit);

                $f_kit->bindParam(1,$_SESSION['user_email']);
                $f_kit->execute();

                $num = $f_kit->rowCount();

                  if($num>0){
                    $row = $f_kit->fetchAll();

                    foreach ($row as $kit_d):
                      echo ' 
                                <tr class="active">
                                  <td>'.$kit_d['comp_type'].'</td>
                                  <td>'.$kit_d['comp_name'].'</td>
                                  <td>'.$kit_d['num_comp'].'</td>
                                  <td><span id="'.$kit_d['id'].'" class="btn btn-danger delete_cmp">Delete</span></td>
                                </tr>'
                             ;  
                    endforeach;
                  }
                  else{
                    echo 'No Components Added yet';
                  }
            ?>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="submit" id="req_kit" name="request_kit" class="btn btn-primary  pull-right">Request Kit</button>
            </div>
          </div>
          </form>
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
<input type="hidden" name="user_name" id="user_email1" value="<?php echo $_SESSION['user_email'] ?>">

<script type="text/javascript" src="notifications.js"></script>
    <script src="css/sweetalert/jquery.sweet-alert.custom.js"></script>
    <script src="css/sweetalert/sweetalert.min.js"></script>

<script type="text/javascript">
  function add_comp_kit(){
        
        var user_name = $('#user_name').val();
        var user_email = $('#user_email').val();
        var comp_type = $('#comp_type').val();
        var comp_name = $('#comp_name').val();
        var num_comp = $('#num_comp').val();
        var team_id = $('#team_id').val();
        
        var dataString = 'user_name='+user_name+'&user_email='+user_email+'&comp_type='+comp_type+'&comp_name='+comp_name+'&num_comp='+num_comp+'&team_id='+team_id;
               	 $("#req_kit").prop('disabled', true);

        if(comp_type==null||comp_name==null||num_comp==undefined){
          swal("Please fill all fileds", "all fields are mandatory", "warning");
                         	 $("#req_kit").prop('disabled', false);

        }
        else{
          $.ajax({

              type:'POST',
              url:'add_to_kit.php',
              data:dataString,
              success: function() {
                  $('#comp_type').val(''); 
                  $('#comp_name').val(''); 
                  $('#num_comp').val('');
                  swal("Add to kit", "Add more components to kit or request kit", "success");
               	 $("#req_kit").prop('disabled', false);

                  location.reload();

              }
          });
        }
  }
</script>

<script>
  $(function () {
      $("#range_2").ionRangeSlider();

  });
</script>
 <script type="text/javascript">
    $(document).ready(function(){
      $(".delete_cmp").click(function(){ 
        var delete_id= this.id;  
        var deleteString = 'delete_id='+delete_id;

        $.ajax({
                type: "POST",
                url: "delete/delete_temp_component.php",
                data: deleteString,
                success: function(data) {
                  if(data=='deleted'){
                    swal("Component Deleted", "", "success");
                      location.reload();  //Refresh page
                  }
                }
            });

      });
    });

</script>
</body>
</html>
