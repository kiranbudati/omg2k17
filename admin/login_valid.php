<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
session_start();
?>
<?php
include('../config.php');
		// Define $username and $password	
		$email= isset($_POST['email']) ? $_POST['email'] : "";
		$pass= isset($_POST['password']) ? $_POST['password'] : "";
		
		$password = md5($pass);	

		$query = "SELECT * FROM omg2k17_admin WHERE email = ? AND password = ?";
		        $stmt = $con->prepare( $query );
		        $stmt->bindParam(1, $email);
		        $stmt->bindParam(2,$password);
		        $stmt->execute();
		        $num = $stmt->rowCount();
 
	        if($num>0){
				
				
				 $_SESSION['admin_email'] = $email;
				 while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        $_SESSION['admin_name'] = $row['username'];
                        $_SESSION['admin_pic'] = $row['profile_pic'];                    
                    }

                    header("Location:dashboard.php");
	        }
	        else{
	        		$_SESSION['errMsg'] = '
	        		<div class="alert alert-danger">
					    <strong>User name or Password Invalid</strong>
					  </div>';
	        		header("Location:index.php");
	        }

?>