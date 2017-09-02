<?php 
	session_start();
	include('../config.php');
		
		$user_name=isset($_POST['user_name']) ? $_POST['user_name'] : "";
		$user_email=isset($_POST['user_email']) ? $_POST['user_email'] : "";
		$comp_type=isset($_POST['comp_type']) ? $_POST['comp_type'] : "";
		$comp_name=isset($_POST['comp_name']) ? $_POST['comp_name'] : "";
		$num_comp=isset($_POST['num_comp']) ? $_POST['num_comp'] : "";
		$team_id=isset($_POST['team_id']) ? $_POST['team_id'] : "";

		$query = "INSERT INTO omg2k17_temp_kit (user_name,user_email,team_id,comp_type,comp_name,num_comp)VALUES(?,?,?,?,?,?)";

			$stmt = $con->prepare($query);
			$stmt->bindParam(1,$user_name);
			$stmt->bindParam(2,$user_email);
			$stmt->bindParam(3,$team_id);
			$stmt->bindParam(4,$comp_type);
			$stmt->bindParam(5,$comp_name);
			$stmt->bindParam(6,$num_comp);

			
			$result = $stmt->execute();

			if($result!=null){

				$update_av = "UPDATE omg2k17_components SET aval_comp=(aval_comp- ? ) WHERE comp_name = ? ";

					$set_num = $con->prepare($update_av);

					$set_num->bindParam(1,$num_comp);
					$set_num->bindParam(2,$comp_name);

					$set_num->execute();
			 }

?>