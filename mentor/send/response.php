<?php
 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
    

	include('../../config.php');

	$id= isset($_POST['id']) ? $_POST['id'] : "";
	$responed = "Accepted";

	$query = "UPDATE omg2k17_tasks SET status = ?, accepted_at =now() WHERE id= ? ";

	$fet_data =$con->prepare($query);
	$fet_data->bindParam(1,$responed );
	$fet_data->bindParam(2,$id);

	if($fet_data->execute()){
		echo 'End Task';
	}
	else{
		echo 'failed';
	}

	
?>