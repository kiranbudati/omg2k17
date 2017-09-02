<?php 

   ini_set('display_errors',1);
    error_reporting(E_ALL);

	session_start();
		date_default_timezone_set("Asia/Kolkata");

	  	$post_time=date("Y-m-d H:i:s");
	  	
	include('../../config.php');

	$workshop_title= isset($_POST['workshop_title']) ? $_POST['workshop_title'] : "";
	$eventtime= isset($_POST['eventtime']) ? $_POST['eventtime'] : "";
	$eventdate= isset($_POST['eventdate']) ? $_POST['eventdate'] : "";
	$venue= isset($_POST['venue']) ? $_POST['venue'] : "";
	
	$insert_workshop = "INSERT INTO omg2k17_workshops (workshop_title,venue,eventdate,eventtime,post_time)VALUES(?,?,?,?,?)";

	$insert = $con->prepare($insert_workshop);
	$insert->bindParam(1,$workshop_title);
	$insert->bindParam(2,$venue);
	$insert->bindParam(3,$eventdate);
	$insert->bindParam(4,$eventtime);
	$insert->bindParam(5,$post_time);

	if($insert->execute()){
		echo "added";
	}
	else{
		echo'error';
	}
?>