<?php 
	include_once('../config.php');
?>
<?php 

    $result3=mysql_query("SELECT * FROM requests WHERE status = 'Waiting' ");

    $num_rows = mysql_num_rows($result3);

?>
<?php 

		$result="";

	if(isset($_POST['submit'])){
		$comp_type = $_POST['comp_type'];
		$comp_name = $_POST['comp_name'];
		$num_comp = $_POST['num_comp'];

		$query = mysql_query("INSERT INTO components(comp_type,comp_name,num_comp) VALUES ('$comp_type','$comp_name','$num_comp') ") or die(mysql_error());

		if($query!=null){
			
				$message='<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Data Inserted!</strong>
</div>';	
				$result = $message;	
		}
		else {
			
				    $message='<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap! Data not Inserted!!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.
</div>';
				    				$result = $message;	

		}
	}
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

    <script src="../js/jquery-1.12.4.js"></script>
        <script src="../js/jquery-ui.js"></script>
        

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

<script type="text/javascript">
	function compname(el){
		   document.getElementById('comp_name').value = el.getAttribute('id');
	}
</script>
<script type="text/javascript">
	function comptype(el){
   document.getElementById('comp_type').value = el.getAttribute('id');

   		console.log(el.getAttribute('id'));
  		var Value = el.getAttribute('id');
		        if(el.getAttribute('id') != null){
		            jQuery.ajax({     
		                type: 'POST',         
		                url: "comp_name.php?comp_type="+Value,             
		                success: function(data){ 
		                    $('#comp_data').html(data);
		                    console.log(data);
		                }
		            });
		        }
}
</script>

<script type="text/javascript">
	$('#add_comp_form').submit(function(){
	return false;
});

$('#submit').click(function(){
	$.post(		
		$('#add_comp_form').attr('action'),
		$('#add_comp_form :input').serializeArray(),
		function(result){
			$('#result').html(result);
		}
	);
});
</script>
<!--
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
-->
 <style type="text/css">
    	
    .scrollit {
    overflow:scroll;
    height:500px;
}
    </style>
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
                <a href="add_comp.php" class="btn btn-success btn-block">Add</a> 
            </div>
            <div class="col-sm-2">
                <a href="requested_comp.php" class="btn btn-default btn-block">Requested<span class="badge">&nbsp;<?php echo $num_rows ?></span></a> 
            </div>
                      <div class="col-sm-1">
                <a href="alloted_comp.php" class="btn btn-default btn-block">Alloted</a> 
            </div>
            <div class="col-sm-1">
                <a href="return_comp.php" class="btn btn-default btn-block">Return</a> 
            </div>
            <div class="col-sm-2">
                <a href="returned_comp.php" class="btn btn-default btn-block ">Returned</a> 
            </div>
        </div>
    </div>
    <!--topnav end-->
    <div class="container panel panel-body">
       <div class="row">
 
       <div class="col-sm-4"></div>
 
       	<div class="col-md-4">
       		<?php echo $result; ?>
     	</div>
 
        <div class="col-sm-4"></div>

       </div>
       <div class="row">
       <div class="col-sm-3"></div>
       		<div class="col-md-5">
       			<form class="form-horizontal" name="add_comp" id="add_comp_form" action="" method="post">
				  <fieldset>
				    <legend>Add Components</legend>
				    <div class="form-group">
				      <label for="comp_type" class="col-lg-2 control-label">Component Type</label>
				      <div class="col-lg-10 input-group">
				        <input class="form-control" name="comp_type" id="comp_type" placeholder="Component Type"   type="text" required="">
				        <span class="input-group-btn">
    						  <button class="btn btn-info" data-target="#show_tab" data-toggle="modal" type="button">Show Tables</button>
   						 </span>
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="comp_name" class="col-lg-2 control-label">Component Name</label>
				      <div class="col-lg-10 input-group"">
				        <input class="form-control" name="comp_name" id="comp_name" placeholder="Component Name" type="text" required>
				        <span class="input-group-btn">
    						  <button class="btn btn-info" data-target="#show_data" data-toggle="modal" type="button">Show Data</button>
   						 </span>
				      </div>
				    </div>
					<div class="form-group">
				      <label for="num_comp" class="col-lg-2 control-label">Numer of Component</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="num_comp" id="num_comp" placeholder="Numer of Component" type="number" min="1" max="1000" required>
				      </div>
				    </div>
				    <center>
				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				        <button type="reset" class="btn btn-default">Cancel</button>
				        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
				      </div>
				    </div>
				    </center>				    
				  </fieldset>
				</form>
       		</div>   
		 </div>
       <!-- Page Content -->

   <div class="modal fade" id="show_tab" role="dialog">
    <div class="modal-dialog">
    

      <!-- Modal content-->
      <div class="modal-content scrollit">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Already In Database</h4>
        </div>
        <div class="modal-body">
              <?php 
      	$query = mysql_query("SELECT DISTINCT comp_type FROM `components`");
      ?>
      
      	<table class="table table-striped table-hover " id="comp_type_search">
		  <thead>
		    <tr>
		      <th>Avaliable component types</th>
		    </tr>
		  </thead>
		  <tbody>
			<?php
               If(mysql_num_rows($query)>0)
                    {
                        while($row=mysql_fetch_array($query))
                         {  

           ?>
            <tr class="active">
          	   <td data-dismiss="modal" id="<?php echo $row['comp_type']; ?>" onclick="comptype(this);"><?php echo $row['comp_type']; ?></td> 
            </tr> 
           	<?php
             			}
                        }
                         ?>

			      	
		  </tbody>
		</table> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  	<div class="modal fade" id="show_data" role="dialog">
    <div class="modal-dialog">
    

      <!-- Modal content-->
      <div class="modal-content scrollit">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Already In Database</h4>
        </div>
        <div class="modal-body">
       		 <table class="table table-striped table-hover " id="comp_name_search">
		      <thead>
		        <tr>
		          <th>Name</th>
		        </tr>
		      </thead>
		      <tbody id="comp_data">
		          
		      </tbody>
		    </table> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


   </div>    
    </section>
        <!-- /#page-content-wrapper -->
        <!-- /#page-content-wrapper -->

    <!-- Portfolio Grid Section -->

    <!-- About Section -->
 
    <!-- Contact Section -->
   
    <!-- Footer -->
    
    <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
        <script src="../js/index.js"></script>

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