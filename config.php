<?php
	$host = "localhost";
	$db_name = "orline7p_orlindustries";
	$username = "orline7p_mad";
	$password = "autoMAD0";
	 
	try {
	    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

	}catch(PDOException $exception){ //to handle connection error
	    echo "Connection error: " . $exception->getMessage();
	}
?>