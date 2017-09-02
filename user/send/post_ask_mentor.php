<?php 
	
	session_start();
	date_default_timezone_set("Asia/Kolkata");

	include('../../config.php');
		$post_time=date("Y-m-d H:i:s");
	$unique_id = mt_rand(100000, 999999);


	$author_name= isset($_POST['user_name']) ? $_POST['user_name'] : "";
	$author_email= isset($_POST['user_email']) ? $_POST['user_email'] : "";
	$team_id= isset($_POST['team_id']) ? $_POST['team_id'] : "";
	$question_title= isset($_POST['question_title']) ? $_POST['question_title'] : "";
	$question_description= isset($_POST['question_description']) ? $_POST['question_description'] : "";
	$question_to = "Mentor";
		$insert_question = "INSERT INTO omg2k17_questions (author_name,author_email,team_id,question_title,question_description,question_to,post_time,unique_id) VALUES (?,?,?,?,?,?,?,?)";

		$insert = $con->prepare($insert_question);
		$insert->bindParam(1,$author_name);
		$insert->bindParam(2,$author_email);
		$insert->bindParam(3,$team_id);
		$insert->bindParam(4,$question_title);
		$insert->bindParam(5,$question_description);
		$insert->bindParam(6,$question_to);
		$insert->bindParam(7,$post_time);
		$insert->bindParam(8,$unique_id);

		
		if($insert->execute()){
			$notification = "Posted Question ";
			$seen = "1";
			$person_type = "Maker";
			$to_author = "Mentor";

			$insert_notification = "INSERT INTO omg2k17_notifications (author_name,author_email,team_id,person_type,to_author,question_id,notification,seen,post_time,unique_id) VALUES (?,?,?,?,?,(SELECT id FROM omg2k17_questions WHERE unique_id = ?),?,?,?,?)";

			$insert_notifi = $con->prepare($insert_notification);
			$insert_notifi->bindParam(1,$author_name);
			$insert_notifi->bindParam(2,$author_email);
			$insert_notifi->bindParam(3,$team_id);
			$insert_notifi->bindParam(4,$person_type);
			$insert_notifi->bindParam(5,$to_author);
			$insert_notifi->bindParam(6,$unique_id);
			$insert_notifi->bindParam(7,$notification);			
			$insert_notifi->bindParam(8,$seen);
			$insert_notifi->bindParam(9,$post_time);
			$insert_notifi->bindParam(10,$unique_id);

			$insert_notifi->execute();
			echo "success";
		}
		else{
			echo "error";
		}

?>