<?php 
	session_start();
	include('../config.php');

	$cname=isset($_GET['comp_name']) ? $_GET['comp_name'] : "";

	$sql = "SELECT * FROM omg2k17_components WHERE comp_name= ? ";

		$comp_name = $con->prepare($sql);
		$comp_name->bindParam(1,$cname);
		$comp_name->execute();
		$num = $comp_name->rowCount();
		if($num>0){

			$row = $comp_name->fetchAll();

			foreach ($row as $aval) {
				 echo "Available:".$aval['aval_comp']; 
				 $aval_comp = $aval['aval_comp'];
				if($aval_comp =="0"){
					echo "<h4>Component not available</h4>";
				}
				else{
				 echo '<input type="range" min="1" max="'.$aval_comp.'" oninput="ttnum.value = num_comp.value" step="1" class="form-control" name="num_comp" id="num_comp" required><h4>Selected No Of Components :<output name="ttnum" id="ttnum" ></output>';
				 }
			}
		}

?>