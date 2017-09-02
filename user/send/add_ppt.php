<?php 

  ini_set('display_errors',1);
  error_reporting(E_ALL);

    session_start();
    
     include('../../config.php');

	$idea_ppt= isset($_POST['idea_ppt']) ? $_POST['idea_ppt'] : "";

	$update_pitch = "UPDATE omg2k17_teams SET idea_ppt = ? WHERE team_id = ?";

	$pitch = $con->prepare($update_pitch);

	$pitch->bindParam(1,$idea_ppt);
	$pitch->bindParam(2,$_SESSION['team_id']);
	
	if($pitch->execute()){
		echo 'added';
	}
	else{
		echo 'error';
	}

?>