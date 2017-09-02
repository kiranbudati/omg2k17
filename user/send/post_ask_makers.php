<?php 
	
	session_start();
		date_default_timezone_set("Asia/Kolkata");

	  	$post_time=date("Y-m-d H:i:s");
	  	  	$unique_id = mt_rand(100000, 999999);

	include('../../config.php');

	$author_name= isset($_POST['user_name']) ? $_POST['user_name'] : "";
	$author_email= isset($_POST['user_email']) ? $_POST['user_email'] : "";
	$team_id= isset($_POST['team_id']) ? $_POST['team_id'] : "";
	$question_title= isset($_POST['question_title']) ? $_POST['question_title'] : "";
	$question_description= isset($_POST['question_description']) ? $_POST['question_description'] : "";
	$tags= isset($_POST['tags']) ? $_POST['tags'] : "";
	
	$question_to = "Maker";
		$insert_question = "INSERT INTO omg2k17_questions (author_name,author_email,team_id,question_title,question_description,question_to,tags,post_time,unique_id) VALUES (?,?,?,?,?,?,?,?,?)";

		$insert = $con->prepare($insert_question);
		$insert->bindParam(1,$author_name);
		$insert->bindParam(2,$author_email);
		$insert->bindParam(3,$team_id);
		$insert->bindParam(4,$question_title);
		$insert->bindParam(5,$question_description);
		$insert->bindParam(6,$question_to);
		$insert->bindParam(7,$tags);
		$insert->bindParam(8,$post_time);
		$insert->bindParam(9,$unique_id);
		
		if($insert->execute()){
			echo "success";
		}
		else{
			echo "error";
		}

?>