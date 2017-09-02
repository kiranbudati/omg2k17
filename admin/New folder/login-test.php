<?php
include('login_valid.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: welcome.php");
}
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" >
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Components Library System</title>
   <style type="text/css">
   		.img{
   			display: inline-block;
   		}
   </style>
</head>
<body>
<div class="container">
		<div class="page-header">
			<header>
  <a href="index.php" class="logo">
    <img src="images/logo.png" alt="logo" />
  </a>
 </header>
		</div>		
		<div><?php include("header.php"); ?></div>
	</div>
	<br/>
	<div class="container">
				<form action="" method="post" class="form-signin" >
					 <h2 class="form-signin-heading">Admin Login</h2>
						<label for="inputEmail" class="sr-only">User Name</label>
							<input class="form-control" placeholder="User Name" name="username" required autofocus>
						<label for="inputPassword" class="sr-only">Password</label>
    	    				<input type="password" name="password" class="form-control" placeholder="Password" required>
						<input class="btn btn-lg btn-primary btn-block" name="submit" type="submit" value=" Login ">
					<span><?php echo $error; ?></span>
				</form>
	</div>
		     
	</div>


</body>
</html>
