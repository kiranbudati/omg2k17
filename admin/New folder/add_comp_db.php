<?php 

	include('../config.php');


	if(isset($_POST['submit'])){
		$comp_type = $_POST['comp_type'];
		$comp_name = $_POST['comp_name'];
		$num_comp = $_POST['num_comp'];

		echo $comp_type;
		echo $comp_name;
		echo $num_comp;

		$query = mysql_query("INSERT INTO components(comp_type,comp_name,num_comp) VALUES ('$comp_type','$comp_name','$num_comp') ") or die(mysql_error());

		if($query!=null){
			$message_success = "data Inserted";

			echo $message_success;
		}
		else {
			
			$message_error = "Data not inserted";
			echo $message_error.mysql_error();
		}
	}
?>
