<?php 

  ini_set('display_errors',1);
  error_reporting(E_ALL);

    session_start();
    
     include('../../config.php');

	$pitch_link= isset($_POST['pitch_link']) ? $_POST['pitch_link'] : "";

	$update_pitch = "UPDATE omg2k17_teams SET pitch_link = ? WHERE team_id = ?";

	$pitch = $con->prepare($update_pitch);

	$pitch->bindParam(1,$pitch_link);
	$pitch->bindParam(2,$_SESSION['team_id']);
	
	if($pitch->execute()){
		echo 'added';
	}
	else{
		echo 'error';
	}

?>