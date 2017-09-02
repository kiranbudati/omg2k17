<?php 
    include('overview.php');
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <script>
        $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <style type="text/css">
        body {
          background-color: #eff0f3;
        
    </style>
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
                        <a href="tutorials.php">Tutorials</a>
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
                <a href="comp.php" class="btn btn-success btn-block">Overview</a>
            </div>
            <div class="col-sm-1">
                <a href="add_comp.php" class="btn btn-default btn-block">Add</a> 
            </div>
    
            <div class="col-sm-2">
                <a href="requested_comp.php" class="btn btn-default btn-block">Requests<span class="badge">&nbsp;<?php echo $num_rows ?></span></a> 
            </div>
            
            <div class="col-sm-1">
                <a href="alloted_comp.php" class="btn btn-default btn-block">Alloted</a> 
            </div>
            <div class="col-sm-1">
                <a href="return_comp.php" class="btn btn-default btn-block">Return</a> 
            </div>
            <div class="col-sm-2">
                <a href="returned_comp.php" class="btn btn-default btn-block">Returned</a> 
            </div>
        </div>
    </div>
    <div class="container panel panel-info panel-body">
       <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" id="#overview_comp">
                  <div class="row">
                    <div class="col-lg-12">
                            

                    </div>  
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#adapaters" class="list-group-item active" data-target="#adapaters" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Adapaters</a>
                                    <!-- get adapaters -->
                            <a href="#" class="list-group-item">Available <span class="badge">1</span></a>


                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $ad_tot ?>

                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#boards" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View" >Boards</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total
                                <span class="badge">
                                    <?php echo $bo_tot ?>

                                </span></a>
                             </a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#bugstrips" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Bug Strips</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $bu_tot ?>

                                </span></a>
                        </div>
                    </div>    
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#cables" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Cables</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $ca_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#connectors" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Connectors</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $co_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#controllers" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Controllers</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $con_tot ?>

                                </span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#converters" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Converters</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $cv_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#diodes" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Diodes</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $di_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#glue" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Glue</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $gl_tot ?>

                                </span></a>
                        </div>
                    </div>    
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#leds" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Leds</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $le_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#meters" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Meters</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $met_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#modules" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Modules</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $mod_tot ?>

                                </span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#motors" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Motors</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $mot_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#potentiometers" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Potentiometers</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $pot_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#processors" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Processors</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $pro_tot ?>

                                </span></a>
                        </div>
                    </div>    
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#rectifiers" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Rectifiers</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $rec_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#relay" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Relay</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $rel_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#resistors" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Resistors</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $res_tot ?>

                                </span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#sensors" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Sensors</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $sen_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#soldering" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Soldering</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $sol_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#storage" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Storage</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $sto_tot ?>

                                </span></a>
                        </div>
                    </div>    
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#transistors" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Transistors</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $tra_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#wires" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Wires</a>
                            <a href="#" class="list-group-item">Available<span class="badge">1</span></a>
                             <a href="#" class="list-group-item">Total

                                <span class="badge">
                                    <?php echo $wi_tot ?>

                                </span></a>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="list-group">
                            <a href="#" class="list-group-item active" data-target="#empty" data-toggle="modal" data-toggle="tooltip" data-placement="top" title="Click to View">Empty</a>
                            <a href="#" class="list-group-item">Available<span class="badge">0</span></a>
                             <a href="#" class="list-group-item">Total<span class="badge">0</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>    
    </section>

<div class="modal fade" id="adapaters" role="dialog">
    <div class="modal-dialog">
    

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adapters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($adapters_sql)>0)
                           {
                             while($row=mysql_fetch_array($adapters_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['adap_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

    <!-- boards Modal -->
  <div class="modal fade" id="boards" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Boards</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($boards_sql)>0)
                           {
                             while($row=mysql_fetch_array($boards_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['board_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- bugstrips Modal -->
  <div class="modal fade" id="bugstrips" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Bugstrips</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($bugstrips_sql)>0)
                           {
                             while($row=mysql_fetch_array($bugstrips_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['bstrip_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- cables Modal -->
  <div class="modal fade" id="cables" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cables</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($cables_sql)>0)
                           {
                             while($row=mysql_fetch_array($cables_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['cab_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- connectors Modal -->
  <div class="modal fade" id="connectors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Connectors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($connectors_sql)>0)
                           {
                             while($row=mysql_fetch_array($connectors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['connect_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- controllers Modal -->
  <div class="modal fade" id="controllers" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Controllers</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($controllers_sql)>0)
                           {
                             while($row=mysql_fetch_array($controllers_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['cont_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- converters Modal -->
  <div class="modal fade" id="converters" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Converters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($converters_sql)>0)
                           {
                             while($row=mysql_fetch_array($converters_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['conv_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- diodes Modal -->
  <div class="modal fade" id="diodes" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Diodes</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($diodes_sql)>0)
                           {
                             while($row=mysql_fetch_array($diodes_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['diod_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- glue Modal -->
  <div class="modal fade" id="glue" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Glue</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($glue_sql)>0)
                           {
                             while($row=mysql_fetch_array($glue_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['glue_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- leds Modal -->
  <div class="modal fade" id="leds" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Leds</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($leds_sql)>0)
                           {
                             while($row=mysql_fetch_array($leds_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['led_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- meters Modal -->
  <div class="modal fade" id="meters" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Meters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($meters_sql)>0)
                           {
                             while($row=mysql_fetch_array($meters_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['met_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- modules Modal -->
  <div class="modal fade" id="modules" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modules</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($modules_sql)>0)
                           {
                             while($row=mysql_fetch_array($modules_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['mod_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- motors Modal -->
  <div class="modal fade" id="motors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Motors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($motors_sql)>0)
                           {
                             while($row=mysql_fetch_array($motors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['mot_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- potentiometers Modal -->
  <div class="modal fade" id="potentiometers" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Potentiometers</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($potentiometers_sql)>0)
                           {
                             while($row=mysql_fetch_array($potentiometers_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['poti_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- processors Modal -->
  <div class="modal fade" id="processors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Processors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($processors_sql)>0)
                           {
                             while($row=mysql_fetch_array($processors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['proc_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- rectifiers Modal -->
  <div class="modal fade" id="rectifiers" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Processors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($rectifiers_sql)>0)
                           {
                             while($row=mysql_fetch_array($rectifiers_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['rec_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- relay Modal -->
  <div class="modal fade" id="relay" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Relay</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($relay_sql)>0)
                           {
                             while($row=mysql_fetch_array($relay_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['rea_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- resistors Modal -->
  <div class="modal fade" id="resistors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Resistors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($resistors_sql)>0)
                           {
                             while($row=mysql_fetch_array($resistors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['res_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- sensors Modal -->
  <div class="modal fade" id="sensors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sensors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($sensors_sql)>0)
                           {
                             while($row=mysql_fetch_array($sensors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['sens_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- soldering Modal -->
  <div class="modal fade" id="soldering" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Soldering</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($soldering_sql)>0)
                           {
                             while($row=mysql_fetch_array($soldering_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['sold_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- storage Modal -->
  <div class="modal fade" id="storage" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adapters</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($storage_sql)>0)
                           {
                             while($row=mysql_fetch_array($storage_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['stor_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- transistors Modal -->
  <div class="modal fade" id="transistors" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Transistors</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($transistors_sql)>0)
                           {
                             while($row=mysql_fetch_array($transistors_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['trans_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- wires Modal -->
  <div class="modal fade" id="wires" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Wires</h4>
        </div>
        <div class="modal-body">
                <table class="table table-hover">
                  <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Name</th>
                    <th>No. Components</th>
                  </tr>
                      <?php
                           If(mysql_num_rows($wires_sql)>0)
                           {
                             while($row=mysql_fetch_array($wires_sql))
                             {  

                        ?>
                        <tr>
                          <td><?php echo $row['wire_id']; ?></td> 
                          <td><?php echo $row['comp_type']; ?></td> 
                          <td><?php echo $row['comp_name']; ?></td>
                          <td><?php echo $row['num_comp']; ?></td> 
                        </tr> 
                        <?php

                        }
                        }
                         ?>
               </table>
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 
        <!-- /#page-content-wrapper -->
        <!-- /#page-content-wrapper -->

    <!-- Portfolio Grid Section -->

    <!-- Adapter Model Start-->

  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->


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