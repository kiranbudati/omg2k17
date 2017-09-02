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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
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
<script type="text/javascript" src="css/sweetalert/jquery.sweet-alert.custom.js"></script>
<script type="text/javascript" src="css/sweetalert/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/sweetalert/sweetalert.css">
<style type="test/css">
ul li{word-wrap:break-word};
</style>
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
                  <?php echo $_SESSION['user_name']; ?><br> <?php echo $role ?>
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
	<!--<li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Components</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="list_components.php"><i class="fa fa-circle-o"></i> List components</a></li>
            <li><a href="request_components.php"><i class="fa fa-circle-o"></i> Request Components</a></li>
            <li><a href="req_com_stat.php"><i class="fa fa-circle-o"></i>Requested Components Status</a></li>
          </ul>
        </li>-->
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
          <div class="box box-primary">
            <div class="box-body box-profile">
              
              <div class="box-header with-border">
                <i class="fa fa-text-width"></i>

                <h3 class="box-title">Mentor Details</h3>
              </div>
              <?php  

                include('../config.php');

                $fetch_mentor = "SELECT mentor_id FROM omg2k17_teams WHERE team_id = ?";

                $select_mentor = $con->prepare($fetch_mentor);
                $select_mentor->bindParam(1,$_SESSION['team_id']);

                $select_mentor->execute();
                
                $rowm = $select_mentor->fetchAll();
                $numm = $select_mentor->rowCount();
                if($numm>0){
                  foreach ($rowm as $ment_id) {
                    $mentor_id = $ment_id['mentor_id'];

                    $fetch_mentors = "SELECT * FROM omg2k17_mentors WHERE email = ?";

                $select_mentors = $con->prepare($fetch_mentors);
                $select_mentors->bindParam(1,$mentor_id);

                $select_mentors->execute();
                
                $rowms = $select_mentors->fetchAll();
                
                foreach ($rowms as $m_id) {
                      echo '<h3 class="profile-username text-center">'.$m_id['fullname'].'</h3>

                          <p class="text-muted text-center">'.$m_id['domain'].'</p>
                  
                          <ul class="list-group list-group-unbordered" >
                            <li class="list-group-item" style="word-break: break-all;">
                              <b>'.$m_id['email'].'</b>
                            </li>
                            <li class="list-group-item">
                              <b>Experience</b> <a class="pull-right">'.$m_id['experience'].'</a>
                            </li>
                          </ul>';      
                    }
                  }
                }
                else{
                  echo "No Mentor added yet";
                }
              ?>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Important Links</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="input-group input-group-sm">
                <p>1. Download the <a href="../MADdocs/Ideathon_Pitch_Deck.pdf">Idea Pitch Deck Here in PDF Format.</a></p>
                <p>2. Download the <a href="../MADdocs/Ideathon_Pitch_Deck.pptx">Idea Pitch Deck Here in PPT Format.</a></p>
                <p>3. Download the MAD Reference Document, <a href="../MADdocs/MADReference_Uploading_PitchDeck.pdf">How to Upload your Pitch Deck to profile?.</a></p>
                <p>4. Download the <a href="../MADdocs/Judging Criteria.pdf">Pitch Judging Criteria?.</a></p>
                <p>5. Download the <a href="../MADdocs/VRBox_MAD.pdf">VR Box Workshop PPT.</a></p>
                <p>6. Download the <a href="../MADdocs/CDA_MAD.pdf">Cloud Data Analytics Workshop PPT.</a></p>
                <p>7. Download the <a href="../MADdocs/Cloud Data Analytics Codes.zip">Cloud Data Analytics Codes.</a></p>
                <p>8. Download the <a href="../MADdocs/ORL_Survey.pdf">Customer Survey Document.</a></p>
                <p>9. Download the <a href="../MADdocs/Installing Unity SDK on Windows.pdf">Tutorial on How to Install Unity SDK on Windows. </a></p>
                <p>10. Download the <a href="../MADdocs/How to Add Asset from Unity Play Store.pdf">Tutorial on How to add asset from Unity Store. </a></p>
                <p>11. Download the <a href="../MADdocs/How to Create account in Unity.pdf">Tutorial on How to Create account in Unity.</a></p>
                <p>12. Download the <a href="../MADdocs/How to Create an Account in Vuforia.pdf">Tutorial on How to Create Account in Vuforia.</a></p>
                <p>13. Download the <a href="../MADdocs/How to Generate a License for Vuforia.pdf">Tutorial on How to Create a License for Vuforia App.</a></p>
                <p>14. Download the <a href="../MADdocs/How to Generate Database for an Image in Vuforia.pdf">Tutorial on How to Generate a Database for an Image in Vuforia.</a></p>
                <p>15. Download the <a href="../MADdocs/Sensors Data.zip">Sample Code for Bluetooth Interfacing with Android and Arduino.</a></p>
                <p>16. Download the <a href="../MADdocs/Arduino_Android.zip">Sample Code for Android interfacing with Arduino.</a></p>
                <p>17. Download the <a href="../MADdocs/Business Model Canvas.pdf">Business Model Canvas PPT.</a></p>
                
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          
          <!-- /.box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Idea</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="input-group input-group-sm">
                <div class="form-group">
		                   	<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-comment"></span>
		                   			</div>
		                   			<input name="idea_title" id="idea_title" type="text" class="form-control" placeholder="Idea Title" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              	</div>
		              		<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-wrench"></span>
		                   			</div>
		                   			<select id="idea_domain" class="form-control" required="required">
		                   				<option value="" disabled selected>Please Select Idea Domain</option>
		                   				<option value="Android">Android</option>
		                   				<option value="Agriculture">Agriculture</option>
		                   				<option value="Data Analytics">Data Analytics</option>
		                   				<option value="Cloud">Cloud</option>
		                   				<option value="IoT">IoT</option>
		                   				<option value="AR / VR">AR / VR </option>
		                   				<option value="Embedded ">Embedded</option>
		                   				<option value="Algorithms">Algorithms</option>
		                   				<option value="Health Care">Health Care</option>
		                   				<option value="Smart City / Village">Smart City / Village </option>
		                   				<option value="Robotics">Robotics</option>
		                   				<option value="Renewable Energy">Renewable Energy</option>
		                   				<option value="Web">Web</option>
		                   				<option value="Transportation">Transportation</option>
		                   				<option value="Big Data">Big Data</option>
		                   				<option value="Cyber Security">Cyber Security</option>
		                   			</select>
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>
		              	<div class="form-group">
		              				
		                   			<input type="text" id="idea_description" class="form-control" placeholder="Enter your Idea Description">
		                   			<br/><br/><br/>
				          		<center><span class="input-group-btn">
		                   			
                      						<center><button type="button" class="btn btn-info btn-flat add_idea1">Add My Idea!</button></center>
                    					</span></center>
				      	          </div>
				      	          
				      	          
            
            
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add pitch youtube link</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="input-group input-group-sm">
                <input type="text" id="pitch_link" class="form-control" placeholder="Please add youtube link here.....">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat add_pitch">Add!</button>
                    </span>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add idea ppt</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="input-group input-group-sm">
                <input type="text" id="idea_ppt" class="form-control" placeholder="Please add ppt link here.....">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat idea_add">Add!</button>
                    </span>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-6 box-primary">
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
                  </dd>
                <hr>
                
                <dt>User Name</dt>
                
                <dd>
                  <font id="user_name1"><?php echo $_SESSION['user_name']; ?></font>
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
                
                </dd>
                
                <hr>             
                
                <dt>Date of Birth</dt>

                <dd>

                  <font id="dob1"><?php echo $dob ?></font>
                
                </dd>
                
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
                
                <dd>
                  <font id="team_id1"><?php echo $team_id ?></font>
                </dd>
                
                <hr>
                <dt>Team Name</dt>
                
                <dd>

                <font id="team_name1"><?php echo $team_name ?></font>

                </dd>
                
                <hr>
                <dt>Role</dt>
                <dd>
                  <font id="team_role1"><?php echo $role ?></font>
                </dd>                
              </dl>
            </div>
            <!-- /.box-body -->
          </div>

          <div class="box box-success">
            <div class="box-header with-border">
              <i class="fa fa-text-width"></i>

              <h3 class="box-title">Idea Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <dl class="dl-horizontal">
                <dt>Idea Title</dt>
                
                <dd>
                  <font id="occupation1"><?php echo $idea_title ?></font>
                </dd>
                <hr>
                <dt>Idea Domain</dt>
                
                <dd>
                  <font id="skills1"><?php echo $idea_domain ?></font>

                
                 </dd>
                
                <hr>
                
                <dt>Idea Description</dt>
                
                <dd>
                  <font id="about_me1"><?php echo $idea_description ?></font>
                </dd>

              </dl>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
  </div>

<input type="hidden" name="user_name" id="user_email1" value="<?php echo $_SESSION['user_email'] ?>">

 <script type="text/javascript">
    $(document).ready(function(){
      $(".add_pitch").click(function(){ 
        var pitch_link= $("#pitch_link").val() ;  
        var pitchString = 'pitch_link='+pitch_link;

        $.ajax({
                type: "POST",
                url: "send/add_pitch.php",
                data: pitchString,
                success: function(data) {
                  if(data=='added'){
                    swal("Pitch Added", "", "success");
                      location.reload();  //Refresh page
                  }
                }
            });

      });

      $(".idea_add").click(function(){ 
        var idea_ppt= $("#idea_ppt").val() ;  
        var ideaString = 'idea_ppt='+idea_ppt;

        $.ajax({
                type: "POST",
                url: "send/add_ppt.php",
                data: ideaString,
                success: function(data) {
                  if(data=='added'){
                    swal("Pitch Added", "", "success");
                      location.reload();  //Refresh page
                  }
                }
            });

      });
   
    
    $(".add_idea1").click(function(){ 
        var idea_title= $("#idea_title").val() ;
        var idea_domain=$("#idea_domain").val();
        var idea_description=$("#idea_description").val();
          
        var ideaString = 'idea_title='+idea_title+'&idea_domain='+idea_domain+'&idea_description='+idea_description;
        console.log(ideaString);

        $.ajax({
                type: "POST",
                url: "send/add_mad.php",
                data: ideaString,
                success: function(data) {
                  if(data=='added'){
                    swal("Idea Added", "", "success");
                      console.log(ideaString);
                      location.reload();  //Refresh page
                  }
                }
            });

      });
    });

</script>

<script type="text/javascript" src="notifications.js"></script>
</body>
</html>