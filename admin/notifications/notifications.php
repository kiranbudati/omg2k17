<?php 
	
	session_start();
	include('../../config.php');

	//components

	if(isset($_POST['view'])){

		$status = "1";

		$fetch_component_requests = "SELECT COUNT(*) FROM omg2k17_kit  WHERE kit_notifications = ? ";

		$components_requests = $con->prepare($fetch_component_requests);
		$components_requests->bindParam(1,$status);
		$components_requests->execute();
		
		$out_put = '';
		
		$total_components = $components_requests->fetchColumn();

		if($total_components>0){


				$out_put .='<li>
                    <a href="component_requests.php" id="comp_notifications">
                      <i class="fa fa-users text-aqua"></i> '.$total_components .' new component requests
                    </a>
                  </li>';
		}
		else{

			$out_put .= '
				   <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> You Have no new Notifications
                    </a>
                  </li>';

		}
		$data = array(

			'notification' => $out_put,
			'unseen_notification' => $total_components 

			);
		echo json_encode($data);

	}

?>