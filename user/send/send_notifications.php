<?php
ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();

    include('../../config.php');
    	
    	$seen = "0";
    	
    	$id = isset($_POST['gotId']) ? $_POST['gotId'] : "";

    	$get_notifications = "UPDATE omg2k17_notifications SET seen = ? WHERE id = ?";

    	$fetch_not=$con->prepare($get_notifications);
    	$fetch_not->bindParam(1,$seen);
    	$fetch_not->bindParam(2,$id);
    	$fetch_not->execute();
?>