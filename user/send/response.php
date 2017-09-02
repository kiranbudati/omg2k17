<?php
 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
 
    session_start();
    
      	$post_time=date("Y-m-d H:i:s");

	include('../../config.php');

	$id= isset($_POST['id']) ? $_POST['id'] : "";
	$responed = "Accepted";

	$query = "UPDATE omg2k17_tasks SET status = ?, accepted_at =now() WHERE id= ? ";

	$fet_data =$con->prepare($query);
	$fet_data->bindParam(1,$responed );
	$fet_data->bindParam(2,$id);

	if($fet_data->execute()){

			$notification = "Task Accepted";
			$task_status = "Accepted";
			$task_response = "2";  
			$seen = "1";

			$update_notifications = "INSERT INTO omg2k17_notifications (task_id,task_response,task_status,notification,seen,post_time,unique_id) VALUES (?,?,?,?,?,?,(SELECT unique_id FROM omg2k17_tasks WHERE id = ?))";

			$update_notifi = $con->prepare($update_notifications);
			$update_notifi->bindParam(1,$id);
			$update_notifi->bindParam(2,$task_response);
			$update_notifi->bindParam(3,$task_status);
			$update_notifi->bindParam(4,$notification);
			$update_notifi->bindParam(5,$seen);
			$update_notifi->bindParam(6,$post_time);
			$update_notifi->bindParam(7,$id);
			if($update_notifi->execute()){

				$person_type = "Maker";
				
				$update_set ="UPDATE omg2k17_notifications SET author_name = ?,author_email = ?,team_id = ?, person_type = ?, to_author = (SELECT task_by FROM omg2k17_tasks WHERE id = ?) WHERE task_id = ? AND task_response = ? ";

				$update_not_row = $con->prepare($update_set);
				$update_not_row->bindParam(1,$_SESSION['user_name']);
				$update_not_row->bindParam(2,$_SESSION['user_email']);
				$update_not_row->bindParam(3,$_SESSION['team_id']);
				$update_not_row->bindParam(4,$person_type);
				$update_not_row->bindParam(5,$id);
				$update_not_row->bindParam(6,$id);
				$update_not_row->bindParam(7,$task_response);

				$update_not_row->execute();
			}



		echo 'End Task';
	}
	else{
		echo 'failed';
	}

	
?>