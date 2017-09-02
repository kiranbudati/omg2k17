<?php
ini_set('display_errors',1);
  error_reporting(E_ALL);
   session_start();
        include('../config.php');

              			

   if(session_destroy()) {
     $zero ='0';    

				$online = "UPDATE omg2k17_users SET online = ? WHERE email =? ";

				$online_su = $con->prepare($online);
				$online_su ->bindParam(1,$zero);
				$online_su ->bindParam(2,$_SESSION['user_email']);
				$online_su -> execute();	

      echo "<script type='text/javascript'>
				document.location.href='../index.php';
			</script>";
   }
?>