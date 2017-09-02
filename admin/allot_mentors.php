<?php
	  ini_set('display_errors',1);
  error_reporting(E_ALL);
	session_start();		

	include('../config.php');

	$team_id=isset($_POST['team_id']) ? $_POST['team_id'] : "";
	$mentor_id=isset($_POST['mentor_id']) ? $_POST['mentor_id'] : "";


		$update_tab = "UPDATE omg2k17_teams SET mentor_id = ? WHERE team_id = ?";

		$update_team = $con->prepare($update_tab);
		$update_team->bindParam(1,$mentor_id);
		$update_team->bindParam(2,$team_id);
		
		$update_team->execute();

			$set_mentor = "UPDATE omg2k17_mentors SET num_teams = num_teams + 1 WHERE mentor_id = ?";
			$update_mentor = $con->prepare($set_mentor);
			$update_mentor->bindParam(1,$mentor_id);
			$update_mentor->execute();
		

?>