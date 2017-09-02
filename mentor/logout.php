<?php
ini_set('display_errors',1);
  error_reporting(E_ALL);
   session_start();
        include('../config.php');

                $zero ='0';    

				$online = "UPDATE omg2k17_mentors SET online = ? WHERE email =? ";

				$online_su = $con->prepare($online);
				$online_su ->bindParam(1,$zero);
				$online_su ->bindParam(2,$_SESSION['user_email']);
				$online_su -> execute();	

   if(session_destroy()) {

      echo "<script type='text/javascript'>
				document.location.href='index.php';
			</script>";
   }
?>