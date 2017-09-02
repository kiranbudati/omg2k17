<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
?>
<?php
include('config.php');

		// Define $username and $password	
		$email= isset($_POST['email']) ? $_POST['email'] : "";
		$pass = isset($_POST['password']) ? $_POST['password'] : "";
		$password = md5($pass);
		
		$val_email = "SELECT email FROM omg2k17_users WHERE email = ? ";
		        $stmte = $con->prepare( $val_email );
		        $stmte->bindParam(1, $email);
		        $stmte->execute();
		        $nume = $stmte->rowCount();
		        
		        if($nume>0){

			$query = "SELECT * FROM omg2k17_users WHERE email = ? AND password = ? ";
			        $stmt = $con->prepare( $query );
			        $stmt->bindParam(1, $email);
			        $stmt->bindParam(2, $password);
			        $stmt->execute();
			        $num = $stmt->rowCount();
	 
		       	 if($num>0){
		       	 	
		       	 	 $_SESSION['user_email'] = $email;
	
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		                    {
		                    	if($row['verified']!="1"){
		                    	
		                    		echo "Not Verified";
		                    	
		                    	}
		                    	else{
			                        $_SESSION['user_name'] = $row['username'];
			                        
			                        $get_fullname = $row['fullname'];
			                        $_SESSION['team_id'] = $row['team_id'];	
			                        
			                        $one ='1';    
	
					$online = "UPDATE omg2k17_users SET online = ? WHERE email =? ";
	
					$online_su = $con->prepare($online);
					$online_su ->bindParam(1,$one);
					$online_su ->bindParam(2,$_SESSION['user_email']);
					$online_su -> execute();
					
					echo "success";
			                    }                    
		                    }
	
	                		
					//echo "<script type='text/javascript'>document.location.href='user.php';</script>";
	                    //header("Location:user/dashboard.php");
		        }
		        else{
		        	echo "Forgot Password";
		        }
		  }
		  else
		  {
		  	echo "Not Found";
		  }
	
?>