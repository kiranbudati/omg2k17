<?php 
	session_start();
	include('../config.php');

	$allot_id= isset($_POST['allot']) ? $_POST['allot'] : "";
	$reject_id= isset($_POST['reject']) ? $_POST['reject'] : "";

	$allot = "Alloted";
	$reject = "Rejected";

	if(isset($_POST['allot'])){
		$up_allot = "UPDATE omg2k17_kit SET status = ? WHERE id= ?";

		$set_allot = $con->prepare($up_allot);
		$set_allot->bindParam(1,$allot);
		$set_allot->bindParam(2,$allot_id);
		if($set_allot->execute()!=null){
			echo "Alloted";
		}
	}
	elseif(isset($_POST['reject'])){

		$up_reject = "UPDATE omg2k17_kit SET status = ? WHERE id= ?";

		$set_reject = $con->prepare($up_reject);
		$set_reject->bindParam(1,$reject);
		$set_reject->bindParam(2,$reject_id);
		if($set_reject->execute()!=null){
			echo "Rejected";
		}


	}

?>