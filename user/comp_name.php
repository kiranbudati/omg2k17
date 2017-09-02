<?php
	session_start();		

	include('../config.php');

	$data=isset($_GET['comp_type']) ? $_GET['comp_type'] : "";

	$sql = "SELECT DISTINCT comp_name FROM omg2k17_components WHERE comp_type= ? ";

		$fetch_comp_name = $con->prepare($sql);
		$fetch_comp_name->bindParam(1,$data);
		$fetch_comp_name->execute();
		$num = $fetch_comp_name->rowCount();
		
		if($num>0){
			
			echo "<option disabled selected value>Select Component Name</option>
";
			$row = $fetch_comp_name->fetchAll();

			foreach ($row as $comp_name) :
		          echo '<option value="'.$comp_name['comp_name'] .'">'.$comp_name['comp_name'] .'</option>';
		          
			endforeach;
		}
?>