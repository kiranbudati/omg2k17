<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
?>
<?php
include('../config.php');

		// Define $username and $password	
		$email= isset($_POST['email']) ? $_POST['email'] : "";
		$pass = isset($_POST['password']) ? $_POST['password'] : "";
		$password = md5($pass);
		
		$val_email = "SELECT email FROM omg2k17_mentors WHERE email = ? ";
		        $stmte = $con->prepare( $val_email );
		        $stmte->bindParam(1, $email);
		        $stmte->execute();
		        $nume = $stmte->rowCount();
		        
		        if($nume>0){

			$query = "SELECT * FROM omg2k17_mentors WHERE email = ? AND password = ? ";
			        $stmt = $con->prepare( $query );
			        $stmt->bindParam(1, $email);
			        $stmt->bindParam(2, $password);
			        $stmt->execute();
			        $num = $stmt->rowCount();
	 
		       	 if($num>0){
		       	 	
		       	 	 $_SESSION['mentor_email'] = $email;
	
					while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
		                    {
		                    	
			                  $_SESSION['fullname'] = $row['fullname'];
			                        
			                        $one ='1';    
	
							$online = "UPDATE omg2k17_mentors SET online = ? WHERE email =? ";
			
							$online_su = $con->prepare($online);
							$online_su ->bindParam(1,$one);
							$online_su ->bindParam(2,$_SESSION['mentor_email']);
							$online_su -> execute();
							
							echo "success";
			                                      
		                    }
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