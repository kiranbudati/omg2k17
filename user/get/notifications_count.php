<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
	
    include('../../config.php');
        $seen = "1";
    	$user_email = isset($_GET['user_email']) ? $_GET['user_email'] : "";

    	$get_notifications = "SELECT seen FROM omg2k17_notifications WHERE (to_author = ? OR to_author = ?)  AND seen = ? ";

    	$fetch_not=$con->prepare($get_notifications);
    	$fetch_not->bindParam(1,$user_email);
    	$fetch_not->bindParam(2,$_SESSION['team_id']);
        $fetch_not->bindParam(3,$seen);

    	$fetch_not->execute();
    	$row = $fetch_not->fetchAll();
        
        $numq = $fetch_not->rowCount();
         
         if($numq>0){

            echo $numq;
         }
         else{
         	echo '0';
         }

?>