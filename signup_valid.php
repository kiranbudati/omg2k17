<?php
  ini_set('display_errors', 1 );
  error_reporting(E_ALL);

	include('config.php');

		$fullname= isset($_POST['fullname']) ? $_POST['fullname'] : "";
		$username= isset($_POST['username']) ? $_POST['username'] : "";
		$dob = isset($_POST['dob']) ? $_POST['dob'] : "";
		$phone= isset($_POST['phone']) ? $_POST['phone'] : "";
		$email= isset($_POST['email']) ? $_POST['email'] : "";
		$pass= isset($_POST['password']) ? $_POST['password'] : "";
		$team_id = isset($_POST['team_id']) ? $_POST['team_id'] : "";
		$member_id = isset($_POST['member_id']) ? $_POST['member_id'] : "";
		$team_name = isset($_POST['team_name']) ? $_POST['team_name'] : "";
		$role = isset($_POST['role']) ? $_POST['role'] : "";
		$idea_title = isset($_POST['idea_title']) ? $_POST['idea_title'] : "";
		$idea_domain = isset($_POST['idea_domain']) ? $_POST['idea_domain'] : "";
		$idea_description = isset($_POST['idea_description']) ? $_POST['idea_description'] : "";


		$password = md5($pass);	
		$query = "SELECT id FROM omg2k17_users WHERE email = ? ";
		        
		        $stmt = $con->prepare( $query );
		        $stmt->bindParam(1, $email);
		        $stmt->execute();
		        $num = $stmt->rowCount();
 
	        if($num>0){
	            
	            echo  'failed';
	            //Email already registered Please Login to continue
	        }

	        else
	        {
	 
	                $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
	 
	                // send the email verification
	                $verificationLink = "http://orlindustries.com/omg2k17/activate.php?code=" . $verificationCode;
	 
	                $htmlStr = "";
	                $htmlStr .= "Hi " . $fullname. ",<br /><br />";
	 
	                $htmlStr .= "Please click the button below to verify your Registration and have access User Panel.<br /><br /><br />";
	                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
	 
	                $htmlStr .= "Kind regards,<br />";
	                $htmlStr .= "<a href='https://orlindustries.com/' target='_blank'>OMG -2K17</a><br />";
	 
	 
	                $name = "OMG -2K17";
	                $email_sender = "no-reply@orlindustries.com";
	                $subject = "Verification Link | OMG -2K17 | Sign Up";
	                $recipient_email = $email;
	 
	                $headers  = "MIME-Version: 1.0\r\n";
	                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	                $headers .= "From: {$name} <{$email_sender}> \n";
	 
	                $body = $htmlStr;

	                if( mail($recipient_email, $subject, $body, $headers) ){
	 
	                    // tell the user a verification email were sent
	                     echo "success";
	 
	 
	                    // save the email in the database
	                    $created = date('Y-m-d H:i:s');
	 
	                    //write query
	                    $query = "INSERT INTO
	                                omg2k17_users
	                            SET
	                            	fullname = ?,
	                            	username = ?,
	                            	phone = ?,
	                                email = ?,
	                                password = ?,
	                                dob = ?,
	                            	team_id = ?,
	                            	member_id = ?,
	                                team_name = ?,
	                                role = ?,
	                                idea_title = ?,
	                                idea_domain=?,
	                            	idea_description = ?,
	                                verified = '0',
	                                verification_code = ?,
	                                created = ?
	                                ";
	 
	                    $stmt = $con->prepare($query);
	 
				$stmt->bindParam(1, $fullname);
	                    $stmt->bindParam(2, $username);
	                    $stmt->bindParam(3, $phone);
	                    $stmt->bindParam(4, $email);
	                   	$stmt->bindParam(5, $password);
	                   	$stmt->bindParam(6, $dob);
	                   	$stmt->bindParam(7, $team_id);
	                   	$stmt->bindParam(8, $member_id);
	                   	$stmt->bindParam(9, $team_name);
	                   	$stmt->bindParam(10,$role);
	                   	$stmt->bindParam(11,$idea_title);
	                   	$stmt->bindParam(12,$idea_domain);
	                   	$stmt->bindParam(13, $idea_description);
	                    $stmt->bindParam(14, $verificationCode);
	                    $stmt->bindParam(15, $created);
	 
	                   if($stmt->execute()){
	                   		$team = "INSERT INTO omg2k17_teams(team_id,team_name,idea_domain,idea_title,idea_description) VALUES(?,?,?,?,?)";
	                   		$insert_team=$con->prepare($team);
	                   		$insert_team->bindParam(1,$team_id);
	                   		$insert_team->bindParam(2,$team_name);
	                   		$insert_team->bindParam(3,$idea_domain);
	                   		$insert_team->bindParam(4,$idea_title);
	                   		$insert_team->bindParam(5,$idea_description);
	                   		if($insert_team->execute()){
	                   		}
	                   		else{
	                   		}
	                   }
	 
	                }else{
	                    die("Sending failed.");
	                }
	        }

	


?>
