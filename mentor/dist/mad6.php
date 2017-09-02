<?php 
	session_start();

	include('config.php');
    
    $select_teama = "SELECT team_id FROM omg2k17_teams WHERE mentor_id = ?";

	$fetch_team_ida = $con->prepare($select_teama);
	$fetch_team_ida->bindParam(1,$_SESSION['mentor_email']);
	$fetch_team_ida->execute();
	$numa = $fetch_team_ida->rowCount();

	$rowa = $fetch_team_ida->fetchAll();
	$taCount=0;
	$tsCount=0;
	$tcCount=0;

	if($numa>0){

		foreach ($rowa as $fet_deta) {
			$team_id = $fet_deta['team_id'];
		

	$select_team = "SELECT * FROM omg2k17_tasks WHERE team_id = ?";

	$fetch_team_id = $con->prepare($select_team);
	$fetch_team_id->bindParam(1,$team_id);
	$fetch_team_id->execute();
	$num = $fetch_team_id->rowCount();

	$row = $fetch_team_id->fetchAll();
	

	if($num>0){

		foreach ($row as $fet_det) {

			if($fet_det['status']=="Task Added"){

				//echo 'Task is Added to '.$fet_det['team_id'].'<br/>';
				$taCount++;

			}
			elseif($fet_det['status']=="Accepted"){
				//echo 'Tasks are accepted by '.$fet_det['team_id'].'<br/>';
				$tsCount++;
			}
			elseif($fet_det['status']=="Completed"){
				//echo 'Taks completed by '.$fet_det['team_id'].'<br/>';
				$tcCount++;	
			}

		}

	}
	}
	}

	$emparray[] = array($taCount,$tsCount,$tcCount);
    	echo json_encode($emparray);

?>