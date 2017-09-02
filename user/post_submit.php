<?php 
	
	session_start();

	include('../config.php');

	$user_name= isset($_POST['user_name']) ? $_POST['user_name'] : "";
	$user_email= isset($_POST['user_email']) ? $_POST['user_email'] : "";
	$question_title= isset($_POST['question_title']) ? $_POST['question_title'] : "";
	$question= isset($_POST['question']) ? $_POST['question'] : "";
 	
	$query = "INSERT INTO omg2k17_questions(author_name,author_email,auth_profile_pic,question_title,question) VALUES (?,?,?,?,?)";

		$stmt = $con->prepare($query);
	 
		$stmt->bindParam(1, $user_name);
	    $stmt->bindParam(2, $user_email);
	    $stmt->bindParam(3, $_SESSION['user_profile_pic']);
	    $stmt->bindParam(4, $question_title);
	    $stmt->bindParam(5, $question);

	    if($stmt->execute()){

	    	exit;
	                        // echo "<div>Unverified email was saved to the database.</div>";
	    }

	    else{
	        	echo "<div>Unable to save your email to the database.";                
	            print_r($stmt->errorInfo());
	    }
?>