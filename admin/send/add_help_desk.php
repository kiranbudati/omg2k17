<?php 

   ini_set('display_errors',1);
    error_reporting(E_ALL);

	session_start();
		date_default_timezone_set("Asia/Kolkata");

	  	$post_time=date("Y-m-d H:i:s");
	  	
	include('../../config.php');

	$help_desk= isset($_POST['help_desk']) ? $_POST['help_desk'] : "";
	$venue= isset($_POST['venue']) ? $_POST['venue'] : "";
	
	$insert_workshop = "INSERT INTO omg2k17_help_desk (help_desk,venue,post_time)VALUES(?,?,?)";

	$insert = $con->prepare($insert_workshop);
	$insert->bindParam(1,$help_desk);
	$insert->bindParam(2,$venue);
	$insert->bindParam(3,$post_time);

	if($insert->execute()){
		echo "added";
	}
	else{
		echo'error';
	}
?>