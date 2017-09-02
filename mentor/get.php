<?php 
	session_start();
    include('../config.php');

    	$fetch_task_name = "SELECT * FROM `omg2k17_mytasks` WHERE mentor_email = ? ORDER BY `id` DESC";

            $stmt = $con->prepare($fetch_task_name);
            $stmt->bindParam(1,$_SESSION['mentor_email']);
            $stmt->execute();
            $row=$stmt->fetchAll();

            echo json_encode($row);
?>