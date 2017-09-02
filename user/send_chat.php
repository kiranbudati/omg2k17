<?php 
	session_start();

	    if( !isset($_SESSION['user_email']) ){
        header("location:../index.php");
      exit();
}
	include('../config.php');

	$from_email = $_POST['from_email'];
	$message = $_POST['new_message'];

	$sql = "INSERT INTO omg2k17_chats
	(from_email,message)
	VALUES
	(:a,:b)";

		$qry = $con->prepare($sql);
		$qry->execute(array(':a'=>$from_email,':b'=>$message));

?>