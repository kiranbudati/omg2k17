<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    
    session_start();

    if( !isset($_SESSION['user_email']) ){
        header("location:index.php");
      exit();

        $user_email = $_SESSION['user_email'];
       $user_name = $_SESSION['user_name'];
}
?>
<?php 
  include('profile.php');
?>
<html>
<head>
  <meta charset="utf-8"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>omg - 2k17 || User Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/other/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
  <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>

  <!-- Ionicons -->
  <link rel="stylesheet" href="plugins/other/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- jQuery 2.2.3 -->
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="plugins/select2/select2.full.min.js"></script>

<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript" src="js/hide.js"></script>
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
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
          <li>
            <a href="timeline.php">
              <i class="fa fa-newspaper-o"></i> <span>Time Line</span>
            </a>
          </li>
        <li>
          <a href="my_tasks.php">
            <i class="fa fa-newspaper-o"></i> <span>My Tasks</span>
          </a>
        </li>
        <li>
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
            <li><a href="req_com_stat.php"><i class="fa fa-circle-o"></i>Requested Components Status</a></li>
            <li><a href="return_comp.php"><i class="fa fa-circle-o"></i> Return Components</a></li>
          </ul>
        </li>
        <li class="active">
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
        Home
        <small>Profile</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <input type="hidden" name="user_email" id="user_email" value="<?php echo $_SESSION['user_email'] ?>">
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <!--<img class="profile-user-img img-responsive img-circle" src="dist/img/user4-128x128.jpg" alt="User profile picture">
                -->
                <?php echo $profile_pic ?>
              <h3 class="profile-username text-center"><?php echo $fullname ?></h3>

              <p class="text-muted text-center">Software Engineer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6 invoice">
          <div class="box box-warning">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Personal Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Full Name</dt>
                
                <dd>
                  <font id="full_name1"><?php echo $fullname ?></font>
                  <div class="form-group" id="full_name2" style="display: none">
                    <input type="text" id="fullname" class="form-control" placeholder="Full Name" value="<?php echo $fullname ?>" required="">
                  </div>
                  <a href="#" id="full_name_edit" class="pull-right" style="opacity: 0.7">edit</a>
                  <a href="#" id="full_name_save" onclick="save_fullname();" class="pull-right" style="display:none; opacity: 0.7">save</a>
                  </dd>
                <hr>
                
                <dt>User Name</dt>
                
                <dd>
                  <font id="user_name1"><?php echo $username ?></font>
                  <div class="form-group" id="user_name2" style="display: none">
                    <input type="text" id="username" class="form-control" placeholder="User Name" value="<?php echo $username ?>" required="">
                  </div>
                  <a href="#" id="user_name_edit" class="pull-right" style="opacity: 0.7">edit</a>
                  <a href="#" id="user_name_save" onclick="save_username();" class="pull-right" style="display:none; opacity: 0.7">save</a>
                  </dd>
                
                <hr>

                <dt>Email</dt>

                <dd>
                  <font id="emai1"><?php echo $email ?></font>
                </dd>
                
                <hr>
                
                <dt>Phone</dt>

                <dd>
                  <font id="phone1"><?php echo $phone ?></font>
                  <div class="form-group" id="phone2" style="display: none">
                    <input type="text" id="phone" class="form-control" placeholder="Phone number" value="<?php echo $phone ?>">
                  </div>
                  <a href="#" id="phone_edit" class="pull-right" style="opacity: 0.7">edit</a>
                  <a href="#" id="phone_save" onclick="save_phone();" class="pull-right" style="display:none; opacity: 0.7">save</a>
                </dd>

                
                <hr>                
                
                <dt>Gender</dt>
                
                <dd>
                  <font id="gender1"><?php echo $gender ?></font>
                  <div class="form-group" id="gender2" style="display: none">
                    <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" id="male" value="<?php echo $gender ?>" checked>
                      Male
                    </label>
                    <label>
                      <input type="radio" name="gender" id="female" value="option2">
                      Female
                    </label>
                  </div>
                </div>
                  </div>
                  <a href="#" id="phone_edit" class="pull-right" style="opacity: 0.7">edit</a>
                  <a href="#" id="phone_save" onclick="save_phone();" class="pull-right" style="display:none; opacity: 0.7">save</a>
                </dd>

                <dt>Address</dt>

                <dd>
                  <font id="address1"><?php echo $address ?></font>
                  <div class="form-group" id="address2" style="display: none">
                    <div class="form-group">
                  <textarea class="form-control" id="address" rows="3" placeholder="Enter Address Here..." value="<?php echo $address  ?>"></textarea>
                </div>
                  </div>
                  <a href="#" id="address_edit" class="pull-right" style="opacity: 0.7">edit</a>
                  <a href="#" id="address_save" onclick="save_address();" class="pull-right" style="display:none; opacity: 0.7">save</a>
                </dd>
                <hr>

                <dt>Date of Birth</dt>
                <dd><?php echo $dob ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>College</dt>
                <dd><?php echo $college ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Branch</dt>
                <dd><?php echo $branch ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Semister</dt>
                <dd><?php echo $year ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Last Updated at</dt>
                <dd><?php echo $last_updated ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Team Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Team Id</dt>
                <dd><?php echo $team_id ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Team Name</dt>
                <dd><?php echo $team_name ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Team Role</dt>
                <dd><?php echo $team_role ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Project Name</dt>
                <dd><?php echo $project_name ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>                
                <dt>Project Description</dt>
                <dd><?php echo $project_description ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box box-success">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Professional Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Occupation</dt>
                <dd><?php echo $occupation ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Skills</dt>
                <dd><?php echo $skills ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>Other Projects</dt>
                <dd><?php echo $other_projects ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
                <hr>
                <dt>About Me</dt>
                <dd><?php echo $about_me ?><span class="glyphicon glyphicon-pencil pull-right" style="opacity: 0.5"></span></dd>
              </dl>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Save</button>
              </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  </div>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>
</body>
</html>
