<?php 
	session_start();
	include('../config.php');

		if(isset($_POST['fullname'])){

		$fullname=isset($_POST['fullname']) ? $_POST['fullname'] : "";

		$query = "UPDATE omg2k17_userprofile SET fullname = ? WHERE email = ? ";

			$stmt = $con->prepare($query);
			
			$stmt->bindParam(1,$fullname);
			$stmt->bindParam(2,$_SESSION['user_email']);

			$result = $stmt->execute();
		}

		elseif(isset($_POST['username'])){

		$username=isset($_POST['username']) ? $_POST['username'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET username = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$username);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['password'])){

		$password=isset($_POST['password']) ? $_POST['password'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET password = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$password);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['profile_pic'])){

		$profile_pic=isset($_POST['profile_pic']) ? $_POST['profile_pic'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET profile_pic = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$profile_pic);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['phone'])){

		$phone=isset($_POST['phone']) ? $_POST['phone'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET phone = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$phone);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['dob'])){

		$dob=isset($_POST['dob']) ? $_POST['dob'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET dob = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$dob);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['gender'])){

		$gender=isset($_POST['gender']) ? $_POST['gender'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET gender = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$gender);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['college'])){

		$college=isset($_POST['college']) ? $_POST['college'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET college = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$college);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['branch'])){

		$branch=isset($_POST['branch']) ? $_POST['branch'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET branch = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$branch);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['year'])){

		$year=isset($_POST['year']) ? $_POST['year'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET year = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$year);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['address'])){

		$address=isset($_POST['address']) ? $_POST['address'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET address = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$address);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['team_name'])){

		$team_name=isset($_POST['team_name']) ? $_POST['team_name'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET team_name = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$team_name);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['team_role'])){

		$team_role=isset($_POST['team_role']) ? $_POST['team_role'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET team_role = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$team_role);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['project_name'])){

		$project_name=isset($_POST['project_name']) ? $_POST['project_name'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET project_name = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$project_name);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['project_description'])){

		$project_description=isset($_POST['project_description']) ? $_POST['project_description'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET project_description = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$project_description);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['occupation'])){

		$occupation=isset($_POST['occupation']) ? $_POST['occupation'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET occupation = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$occupation);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['skills'])){

		$skills=isset($_POST['skills']) ? $_POST['skills'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET skills = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$skills);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['other_projects'])){

		$other_projects=isset($_POST['other_projects']) ? $_POST['other_projects'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET other_projects = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$other_projects);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['about_me'])){

		$about_me=isset($_POST['about_me']) ? $_POST['about_me'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET about_me = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$about_me);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

		elseif(isset($_POST['team_id'])){

		$team_id=isset($_POST['team_id']) ? $_POST['team_id'] : "";

		$query1 = "UPDATE omg2k17_userprofile SET team_id = ? WHERE email = ? ";

			$stmt1 = $con->prepare($query1);
			
			$stmt1->bindParam(1,$team_id);
			$stmt1->bindParam(2,$_SESSION['user_email']);

			$result1 = $stmt1->execute();
		}

?>