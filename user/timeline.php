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
   <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <link rel="stylesheet" type="text/css" href="css/timeline.css">


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
          <li  class="active">
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
        OMG - 2k17
        <small>Time Line</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>OMG - 2k17</a></li>
        <li class="active">Time Line</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <input type="hidden" name="user_name" id="user_email1" value="<?php echo $_SESSION['user_email'] ?>">
    <div class="row">
        <div class="col-md-12">
            <div class="bootstrap snippet">
            <section id="news" class="white-bg padding-top-bottom">
                <div class="bootstrap snippet">
                    <div class="timeline">
                        <div class="date-title">
                            <span>June 2017</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>5</p>
                                        <small>Mon</small>
                                    </div>
                                    <h2 class="news-title">Day 1: Knowing Yourself</h2><Br/>
                                    <p><b>Day Highlights:</b><br/>
                                    1. Registrations <Br/>
                                    2. Previous MAKERS sharing their experiences about ORL. <br/>
                                    3. Talking about M.A.D.,and followed by a detailed demo on 'How to use MAD?'. <Br/>
                                    4. Ideas discussion with off-site mentor allocations.</p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>6</p>
                                        <small>Tues</small>
                                     </div>
                                    <h2 class="news-title">Day 2: Preparing a Pitch Deck</h2>
                                    <p><b>Day Highlights: </b><br/>
                                    1. A 3 Hour Workshop on <br/>
                                    'How to prepare a pitch deck?', by<br/>
                                    <b>Mrs. Archana Rao</b><br/>
                                    Convener<br/>
                                    ORL Makers Garage 2K17<br/><br/>
                                    2. Ideas discussion with off-site mentors. </p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>7</p>
                                        <small>Wed</small>
                                    </div>
                                    <h2 class="news-title">Day 3: How to Build a Business Model Canvas</h2>
                                    <p><b>Day Highlights: </b><br/>
                                    1. A 3 Hour Workshop on <br/>
                                    'How to prepare a Business Model Canvas?', by <br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Chief Strategy Officer & Founder<br/>
                                    ORL Industries <br/><br/>
                                    2. Ideas discussion with off-site mentors.</p>

                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>8</p>
                                        <small>Thu</small>
                                    </div>
                                    <h2 class="news-title">Day 4: Ideathon</h2>
                                    <p><b>Day Highlights: </b><br/>
                                    1. Ideas Mentoring Sessions, by <br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Entrepreneur <br/><Br/>
                                    2. Ideas discussion with off-site mentors. 
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>9</p>
                                        <small>Fri</small>
                                    </div>
                                    <h2 class="news-title">Day 5: Ideathon</h2>
                                    <p><b>Day Highlights: </b><br/>
                                    1. Ideas Mentoring Sessions, by <br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Entrepreneur <br/><Br/>
                                    2. Ideas discussion with off-site mentors. 
                                    </p>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>10</p>
                                        <small>Sat</small>
                                    </div>
                                    <h2 class="news-title">Day 6: Internal Pitch</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p><b>Day Highlights: </b><br/>
                                    1. Pitch Feedback by <br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Founder & CSO<br/>
                                    ORL Industries <br/><br/>
                                    2. Ideas validation by <b>Mr. Madhu Parvathaneni</b>.<Br/><br/>
                                    3. First Stage of Internal Ideathon <br/>
                                   </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>12</p>
                                        <small>Mon</small>
                                    </div>
                                    <h2 class="news-title">Day 7: Identify the real YOU</h2>
                                    <p><b>Day Highlights: </b><br/>
                                    1. Pitch Feedback by <br/>
                                    <b>Mr. Syed Muthahar </b><br/>
                                    Principal Consultant <br/>
                                    ORL Industries <br/><br/>
                                    2. A 45 minutes Talk on <br/>
                                    'Role of Funding in Early Stage Startup' by <br/>
                                    <b>Mr. Yogesh Mohan</b><br/>
                                    Oracle India<br/>
                                    </p>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>13</p>
                                        <small>Tues</small>
                                    </div>
                                    <h2 class="news-title">Day 8: Look the world with new Eyes</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p><b>Day Highlights:</b><br/>
                                    1. A 3-Hour Workshop on crafting a Virtual Reality (VR) Box By<br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Architect <br/>
                                    ORL Virtual Augmented Realities Group <br/><br/>
                                    2. A 45 minutes Talk on <br/>
                                    'How to Build a Successful Team? & Role of Team in Building a Startup' by <br/>
                                    <b>Mr. K. Prasanna Kumar </b> <br/>
                                    International Business<br/>
                                    North West University<br/>
                                    Washington, USA<br/></p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>14</p>
                                        <small>Wed</small>
                                    </div>
                                    <h2 class="news-title">Day 9: Amplify your Data</h2>
                                    <p><b>Day Highlights: </b><br/>
                                    1. A 3-Hour Workshop on Cloud Data Analytics By<br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Architect <br/>
                                    ORL Cloud Computing Group <br/><br/>
                                    2. A 45 minutes Talk on <br/>
                                    'How to pitch your Idea in 3 Minutes?' by <br/>
                                    <b>Mr. Kolli Sai </b><br/>
                                    Best Student Product Award Winner for the year 2014 by HYSEA (Formerly, ITsAP)<br/>
                                    Connecticut, USA <br/>
                                                                      
                                    </p>
                                    
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>15</p>
                                        <small>Thu</small>
                                    </div>
                                    <h2 class="news-title">Day 10: Let Devices Talk with Cloud</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p><b>Day Highlights: </b><br/>
                                    1. A 3-Hour Workshop on IoT Devices & Cloud By <br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Architect <br/>
                                    ORL IoT Machine Learning Group <br/><br/>
                                    
                                    2. A 45 minutes Talk on <br/>
                                    'Role of Customers in a Startup Infrastructure' By <br/>
                                    <b>Mr. K Prasanna Kumar</b><br/>
                                    International Business <br/>
                                    North West University <br/>
                                    Washington, USA <br/><br/>
                                    
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>16</p>
                                        <small>Fri</small>
                                    </div>
                                    <h2 class="news-title">Day 11: World is Augmented</h2>
                                    <p><b>Day Highlights:</b><Br/>
                                    1. A 3-Hour Workshop on Augmented Reality By <br/>
                                    <b>Mr. Madhu Parvathaneni </b><br/>
                                    Architect<br/>
                                    ORL Virtual Augmented Realities Group <br/><br/>
                                    
                                    2. A 45 minutes Talk on <br/>
                                    'Role of Incubator in an Early Stage Startup' By <br/>
                                    <b>Mrs. B Archana Rao </b><br/>
                                    CEO & Co-Founder <br/>
                                    ORL Industries Pvt. Ltd<br/><br/>
                                    
                                    </p>

                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>17</p>
                                        <small>Sat</small>
                                    </div>
                                    <h2 class="news-title">Day 12</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p><b>Day Highlights: </b><br/>
                                    1. Second Stage of Idea Pitching <br/>
                                    2. Idea Validations by Industrial Mentors <br/><br/></p>

                                </div>
                            </div>
                        </div>
                        <!--
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>19</p>
                                        <small>Mon</small>
                                    </div>
                                    <h2 class="news-title">Day 13</h2>
                                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>20</p>
                                        <small>Tues</small>
                                    </div>
                                    <h2 class="news-title">Day 14</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>21</p>
                                        <small>Wed</small>
                                    </div>
                                    <h2 class="news-title">Day 12</h2>
                                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>22</p>
                                        <small>Thu</small>
                                    </div>
                                    <h2 class="news-title">Day 16</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>23</p>
                                        <small>Fri</small>
                                    </div>
                                    <h2 class="news-title">Day 17</h2>
                                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>24</p>
                                        <small>Sat</small>
                                    </div>
                                    <h2 class="news-title">Day 18</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>26</p>
                                        <small>Mon</small>
                                    </div>
                                    <h2 class="news-title">Day 19</h2>
                                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>27</p>
                                        <small>Tues</small>
                                    </div>
                                    <h2 class="news-title">Day 20</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>28</p>
                                        <small>Wed</small>
                                    </div>
                                    <h2 class="news-title">Day 21</h2>
                                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>29</p>
                                        <small>Thu</small>
                                    </div>
                                    <h2 class="news-title">Day 22</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>30</p>
                                        <small>Fri</small>
                                    </div>
                                    <h2 class="news-title">Day 23</h2>
                                    <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>1 July</p>
                                        <small>Sat</small>
                                    </div>
                                    <h2 class="news-title">Day 24</h2>
                                    <div class="news-media gallery">
                                        <a class="colorbox cboxElement" href="#">
                                        </a>
                                    </div>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="date-title">
                            <span>July 2017</span>
                        </div>
                        <div class="row">   
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>3</p>
                                        <small>Mon</small>
                                    </div>
                                    <h2 class="news-title">Day 25</h2>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>4</p>
                                        <small>Tues</small>
                                    </div>
                                    <h2 class="news-title">Day 26</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>5</p>
                                        <small>Wed</small>
                                    </div>
                                    <h2 class="news-title">Day 27</h2>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>6</p>
                                        <small>Thu</small>
                                    </div>
                                    <h2 class="news-title">Day 28</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-sm-6 news-item">
                                <div class="news-content">
                                    <div class="date">
                                        <p>7</p>
                                        <small>Fri</small>
                                    </div>
                                    <h2 class="news-title">Day 29</h2>
                                    <p>But who has any right to find fault with a man who chooses to enjoy a pleasure…</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>
                            
                            <div class="col-sm-6 news-item right">
                                <div class="news-content">
                                    <div class="date">
                                        <p>8</p>
                                        <small>Sat</small>
                                    </div>
                                    <h2 class="news-title">Day 30</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <a class="read-more" href="#">Read More</a>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </section>
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

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript" src="notifications.js"></script>

</body>
</html>
