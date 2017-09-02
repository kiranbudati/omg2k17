<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
	
    include('../../config.php');
        $seen = "1";

    	$get_notifications = "SELECT seen FROM omg2k17_notifications WHERE to_author = ? AND seen = ? ";

    	$fetch_not=$con->prepare($get_notifications);
    	$fetch_not->bindParam(1,$_SESSION['mentor_email']);
        $fetch_not->bindParam(2,$seen);

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