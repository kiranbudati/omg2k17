<?php 
	ini_set('display_errors', 1 );
	error_reporting(E_ALL);

	include('config.php');

	$token= isset($_POST['token']) ? $_POST['token'] : "";
	$email= isset($_POST['getConfirm']) ? $_POST['getConfirm'] : "";
	$pass= isset($_POST['password']) ? $_POST['password'] : "";
	$password = md5($pass);
	
	if($token!=null){
		
		$rest_tab = "DELETE FROM omg2k17_forgotpassword WHERE email= ? OR verification_code = ?";
		$resTab = $con->prepare($rest_tab);
		$resTab->bindParam(1,$email);
		$resTab->bindParam(2,$token);
		if($resTab->execute()){
			$query = "UPDATE omg2k17_users SET password = ? WHERE email = ?";
			
			$updatePass = $con->prepare($query);
			$updatePass->bindParam(1,$password);
			$updatePass->bindParam(2,$email);

			if($updatePass->execute()!=null){
				echo "success";
			}
			else{
				echo "faild";
			}
		}
	}
?>