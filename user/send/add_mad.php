<?php 

  ini_set('display_errors',1);
  error_reporting(E_ALL);

    session_start();
    
     include('../../config.php');

	$idea_title= isset($_POST['idea_title']) ? $_POST['idea_title'] : "";
	$idea_domain=isset($_POST['idea_domain'])? $_POST['idea_domain']: "";
	$idea_description=isset($_POST['idea_description'])? $_POST['idea_description']: "";

	$update_title = "UPDATE omg2k17_teams SET idea_title = ? WHERE team_id = ?";
	$pitch = $con->prepare($update_title);
	$pitch->bindParam(1,$idea_title);
	$pitch->bindParam(2,$_SESSION['team_id']);
	
	$update_domain = "UPDATE omg2k17_teams SET idea_domain = ? WHERE team_id = ?";
	$pitch1 = $con->prepare($update_domain);
	$pitch1->bindParam(1,$idea_domain);
	$pitch1->bindParam(2,$_SESSION['team_id']);
	
	$update_description = "UPDATE omg2k17_teams SET idea_description = ? WHERE team_id = ?";
	$pitch2 = $con->prepare($update_description);
	$pitch2->bindParam(1,$idea_description);
	$pitch2->bindParam(2,$_SESSION['team_id']);
	
	$update_title1 = "UPDATE omg2k17_users SET idea_title = ? WHERE team_id = ?";
	$pitch3 = $con->prepare($update_title1);
	$pitch3->bindParam(1,$idea_title);
	$pitch3->bindParam(2,$_SESSION['team_id']);
	
	$update_domain1 = "UPDATE omg2k17_users SET idea_domain = ? WHERE team_id = ?";
	$pitch4 = $con->prepare($update_domain1);
	$pitch4->bindParam(1,$idea_domain);
	$pitch4->bindParam(2,$_SESSION['team_id']);
	
	$update_description1 = "UPDATE omg2k17_users SET idea_description = ? WHERE team_id = ?";
	$pitch5 = $con->prepare($update_description1);
	$pitch5->bindParam(1,$idea_description);
	$pitch5->bindParam(2,$_SESSION['team_id']);
	
	if($pitch->execute()){
		
	}
	else{
		echo 'error';
	}
	
	if($pitch1->execute()){
		
	}
	else{
		echo 'error';
	}
	
	if($pitch2->execute()){
		
	}
	else{
		echo 'error';
	}
	
	if($pitch3->execute()){
		
	}
	else{
		echo 'error';
	}
	
	if($pitch4->execute()){
		
	}
	else{
		echo 'error';
	}
	
	if($pitch5->execute()){
		echo 'added';
	}
	else{
		echo 'error';
	}

?>