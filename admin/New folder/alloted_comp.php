<?php 

    include('overview.php');
?>

<?php 

    $requ = "SELECT * FROM requests WHERE status = 'Alloted' ";

    $requests = mysql_query($requ);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Learn Space</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/simple-sidebar.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING<span class="badge">1</span> Respond.js doesn't work if you view the page via file<span class="badge">1</span>// -->
    <!--[if lt IE 9]>
        <script src="https<span class="badge">1</span>//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https<span class="badge">1</span>//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Learn Space</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="admin.php">Home</a>
                    </li>

                    <li class="page-scroll">
                        <a href="#">Tutorials</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">Blog</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">Components</a>
                    </li>
                   <li class="page-scroll">
                        <a href="#">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">My Account</a>
                    </li>
                    <li class="page-scroll">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- componets nav-->

<section>
    <div class="container panel  panel-body">
        <div class="row ">
            <div class="col-sm-2">
                <a href="comp.php" class="btn btn-default btn-block">Overview</a>
            </div>
            <div class="col-sm-1">
                <a href="add_comp.php" class="btn btn-default btn-block">Add</a> 
            </div>
            <div class="col-sm-2">
                <a href="requested_comp.php" class="btn btn-default btn-block">Requested<span class="badge">&nbsp;<?php echo $num_rows ?></span></a> 
            </div>
            <div class="col-sm-1">
                <a href="alloted_comp.php" class="btn btn-success btn-block">Alloted</a> 
            </div>
            <div class="col-sm-1">
                <a href="return_comp.php" class="btn btn-default btn-block">Return</a> 
            </div>
            <div class="col-sm-2">
                <a href="returned_comp.php" class="btn btn-default btn-block ">Returned</a> 
            </div>
        </div>
    </div>
    <div class="container panel panel-info panel-body">
       <!-- Page Content -->
        
    <form class="form-horizontal" method="" action="" name="req">
       <table class="table table-striped table-hover ">
          <thead>
            <tr class="info">
              <th>Component Type</th>
              <th>Component Name</th>
              <th>Number of Components</th>
              <th>Student Name</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <?php 
               while($req=mysql_fetch_array($requests)){
                        ?>  
                          <tr  name="<?php echo $req['id']; ?>" class="active">
                            <td name="comp_type">
                                <?php echo $req['comp_type']; ?>
                                <input type="hidden" name="comp_type" value="<?php echo $req['comp_type']; ?>">
                            </td>
                            
                            <td name="fullname">
                                <?php echo $req['comp_name'] ?>
                                <input type="hidden" name="comp_name" value="<?php echo $req['fullname']; ?>">
                            </td>
                            <td><?php echo $req['num_comp'] ?></td>
                            <td><?php echo $req['fullname'] ?></td>
                            <td>
                                <?php echo $req['phone'] ?>
                                        
                            </td>
                            <td><?php echo $req['email'] ?></td>
                            <td><?php echo $req['status'] ?></td>
                          </tr>
                         <?php    
                          } 
                        ?>
          </tbody>
        </table>
        </form>
    </div>    
    </section>
        <!-- /#page-content-wrapper -->
        <!-- /#page-content-wrapper -->

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
 
    <!-- Contact Section -->
   
    <!-- Footer -->
    
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
        <script src="js/index.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>

</body>

</html>



<!--
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>
-->