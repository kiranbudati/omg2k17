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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
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
            <i class="fa fa-edit"></i> <span>Components</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list_components.php"><i class="fa fa-circle-o"></i> List Components</a></li>
            <li><a href="request_components.php"><i class="fa fa-circle-o"></i> Request Components</a></li>
            <li class="active"><a href="req_com_stat.php"><i class="fa fa-circle-o"></i> Requested Components Status</a></li>

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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Components
        <small>Requested Components Status</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Components</a></li>
        <li class="active">Requested Components Status</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Your Requested Components Status</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr class="info"> 
                  <th>Component Type</th>
                  <th>Component Name</th>
                  <th>Number of Components</th>
                  <th>Requested by</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  include('../config.php');

                  $your_comp = "SELECT * FROM omg2k17_kit WHERE user_email= ? OR team_id = ?";

                  $yo_co = $con->prepare($your_comp);
                  $yo_co->bindParam(1,$_SESSION['user_email']);
                  $yo_co->bindParam(2,$_SESSION['team_id']);
                  $yo_co->execute();
                  $row = $yo_co->fetchAll();

                  foreach ($row as $yost):
                    $status = "";
                        if($yost['status']=='Waiting'){

                          $status = '<div class="bg-orange-active color-palette" align="center"><span>Waiting</span></div>';
                        }
                        elseif($yost['status']=='Alloted'){
                          $status = '<div class="bg-green-active color-palette" align="center"><span>Alloted</span></div>';
                        }
                        else{
                         $status = '<div class="bg-red-active color-palette" align="center"><span>Rejected</span></div>'; 
                        }

                    echo '<tr>
                            <td>'.$yost['comp_type'].'</td>
                            <td>'.$yost['comp_name'].'</td>
                            <td>'.$yost['num_comp'].'</td>
				<td>'.$yost['user_name'].'</td>
                            <td>'.$status.'</td>
                          </tr>';
                  endforeach; 
                ?>
                </tbody>
                <tfoot>
                <tr class="info">
                  <th>Component Type</th>
                  <th>Component Name</th>
                  <th>Number of Components</th>
                  <th>Requested by</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
</div>

    <!-- /.content -->
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
  </footer>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<input type="hidden" name="user_name" id="user_email1" value="<?php echo $_SESSION['user_email'] ?>">

<script type="text/javascript" src="notifications.js"></script>
</body>
</html>
