<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
	date_default_timezone_set("Asia/Kolkata");

  	$post_time=date("Y-m-d H:i:s");

	include('../config.php');

	$task_title = isset($_POST['task_title']) ? $_POST['task_title'] : "";
	$task_description = isset($_POST['task_description']) ? $_POST['task_description'] : "";
	$task_start_date = isset($_POST['task_start_date']) ? $_POST['task_start_date'] : "";
	$task_end_date = isset($_POST['task_end_date']) ? $_POST['task_end_date'] : "";
	$task_to = isset($_POST['task_to']) ? $_POST['task_to'] : "";
	$task_by = isset($_POST['task_by']) ? $_POST['task_by'] : "";
	$team_id = isset($_POST['team_id']) ? $_POST['team_id'] : "";
	$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : ""; 

	$status = "Task Added";
	$person_type ="Maker";
	$unique_id = mt_rand(100000, 999999);

	$query = "INSERT INTO omg2k17_tasks (team_id,task_title,task_description,task_start_date,task_end_date,task_to,task_by,status,person_type,fullname,post_time,unique_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";

		$insert_task = $con->prepare($query);

		$insert_task->bindParam(1,$team_id);		
		$insert_task->bindParam(2,$task_title);
		$insert_task->bindParam(3,$task_description);
		$insert_task->bindParam(4,$task_start_date);
		$insert_task->bindParam(5,$task_end_date);
		$insert_task->bindParam(6,$task_to);
		$insert_task->bindParam(7,$task_by);
		$insert_task->bindParam(8,$status);
		$insert_task->bindParam(9,$person_type );
		$insert_task->bindParam(10,$fullname );
		$insert_task->bindParam(11,$post_time );
		$insert_task->bindParam(12,$unique_id );


		if($insert_task->execute()){

			$dt2=date("Y-m-d H:i:s");

			$notification = "Task Added";
			$task_status = "Task Added";
			$task_response = "1";
			$seen = "1";
			$update_notification = "INSERT INTO omg2k17_notifications (author_name,author_email,team_id,person_type,to_author,task_response,task_status,notification,seen,post_time,unique_id) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

			$set_notifications = $con->prepare($update_notification);
			$set_notifications->bindParam(1,$fullname);
			$set_notifications->bindParam(2,$task_by);
			$set_notifications->bindParam(3,$team_id);
			$set_notifications->bindParam(4,$person_type);
			$set_notifications->bindParam(5,$task_to);
			$set_notifications->bindParam(6,$task_response);
			$set_notifications->bindParam(7,$task_status);
			$set_notifications->bindParam(8,$notification);			
			$set_notifications->bindParam(9,$seen);
			$set_notifications->bindParam(10,$dt2);
			$set_notifications->bindParam(11,$unique_id);

			$set_notifications->execute();

			echo 'success';
		}

?>