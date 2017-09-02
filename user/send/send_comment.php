<?php 
	
    ini_set('display_errors',1);
    error_reporting(E_ALL);
    	session_start();
    		date_default_timezone_set("Asia/Kolkata");

	
	  	$post_time=date("Y-m-d H:i:s");

	
	include '../../config.php';

	$comment_author_name= isset($_POST['com_user_name']) ? $_POST['com_user_name'] : "";
	$comment_author_email= isset($_POST['com_user_email']) ? $_POST['com_user_email'] : "";
	$question_id= isset($_POST['question_id']) ? $_POST['question_id'] : "";
	$question_title= isset($_POST['question_title']) ? $_POST['question_title'] : "";
	$person_type= isset($_POST['person_type']) ? $_POST['person_type'] : "";
	$comment= isset($_POST['post_comment']) ? $_POST['post_comment'] : "";

	$insert_comment="INSERT INTO omg2k17_comments (ques_id,com_auth_name,com_auth_email,question_title,comment,person_type,post_time) VALUES (?,?,?,?,?,?,?)";
	
	$inserting_comment = $con->prepare($insert_comment);

	$inserting_comment->bindParam(1,$question_id);
	$inserting_comment->bindParam(2,$comment_author_name);
	$inserting_comment->bindParam(3,$comment_author_email);
	$inserting_comment->bindParam(4,$question_title);
	$inserting_comment->bindParam(5,$comment);
	$inserting_comment->bindParam(6,$person_type);
		$inserting_comment->bindParam(7,$post_time);
	if($inserting_comment->execute()){

		

			$notification = "Commented on your question";
			$seen = "1";
			$question_response = "Commented";
			$person_type = "Maker";

			$insert_notification = "INSERT INTO omg2k17_notifications (author_name,author_email,person_type,to_author,question_id,question_response,notification,seen,post_time) VALUES (?,?,?,(SELECT author_email FROM omg2k17_questions WHERE id = ?),?,?,?,?,?)";

			$insert_notifi = $con->prepare($insert_notification);
			$insert_notifi->bindParam(1,$comment_author_name);
			$insert_notifi->bindParam(2,$comment_author_email);
			$insert_notifi->bindParam(3,$person_type);
			$insert_notifi->bindParam(4,$question_id);
			$insert_notifi->bindParam(5,$question_id);
			$insert_notifi->bindParam(6,$question_response);
			$insert_notifi->bindParam(7,$notification);			
			$insert_notifi->bindParam(8,$seen);
			$insert_notifi->bindParam(9,$post_time);

			$insert_notifi->execute();

		echo "success";
	}
	else{
		echo "error";
	}


?>