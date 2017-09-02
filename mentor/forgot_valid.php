<?php
ini_set('display_errors', 1 );
error_reporting(E_ALL);

		include('../config.php');

		$email= isset($_POST['email']) ? $_POST['email'] : "";
		
		$query = "SELECT * FROM omg2k17_mentors WHERE email = ? ";
		        
		        $stmt = $con->prepare( $query );
		        $stmt->bindParam(1, $email);
		        $stmt->execute();
		        $num = $stmt->rowCount();
		        
 
	        if( $num>0){
	        $verificationCode = md5(uniqid("yourrandomstringyouwanttoaddhere", true));
	 	         $verificationLink = "http://mentor.orlmakersgarage.com/passwordReset.php?code=". $verificationCode."&getConfirm=".$email;
	 
	                $htmlStr = "";
	                $htmlStr .= "Hello " . $email . ",<br /><br />";
	 
	                $htmlStr .= "Please click the button below to Rest your password.<br /><br /><br />";
	                $htmlStr .= "<a href='{$verificationLink}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>Rest Password</a><br /><br /><br />";
	 
	                $htmlStr .= "Kind regards,<br />";
	                $htmlStr .= "<a href='https://mentor.orlmakersgarage.com' target='_blank'>omg2k17</a><br />";
	 
	 
	                $name = "OMG 2k17";
	                $email_sender = "no-reply@orlindustries.com";
	                $subject = "Password Reset Link | OMG - 2k17 | Reset Password";
	                $recipient_email = $email;
	 
	                $headers  = "MIME-Version: 1.0\r\n";
	                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	                $headers .= "From: {$name} <{$email_sender}> \n";
	 
	                $body = $htmlStr;
	 
	                // send email using the mail function, you can also use php mailer library if you want
	                if( mail($recipient_email, $subject, $body, $headers) ){
	 
	                    // tell the user a verification email were sent
	                    echo "Email Sent";
	 
	 
	                    // save the email in the database
	                    $created = date('Y-m-d H:i:s');
	 			$verified ="0";
	                    //write query
	                    $query = "INSERT INTO
	                                omg2k17_forgotpassword
	                            SET
	                                email = ?,
	                                verified = ?,
	                                verification_code = ?
                                ";
	 
	                    $stmt = $con->prepare($query);
	                   	$stmt->bindParam(1, $email);
	                    $stmt->bindParam(2, $verified);
	                    $stmt->bindParam(3,$verificationCode);
	 		$stmt->execute();
	 
	                }else{
	                    die("Sending failed.");
	                }
	            
	        }

	        else
	        {
	             echo "Email Not Found";
	        }


?>