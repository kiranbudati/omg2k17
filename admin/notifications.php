<?php 
	
	session_start();
	include('../config.php');

	//components

	if(isset($_POST['view'])){

		$status = "Waiting";

		$fetch_component_requests = "SELECT * FROM omg2k17_kit  WHERE status = ? ORDER BY id DESC";

		$components_requests = $con->prepare($fetch_component_requests);
		$components_requests->bindParam(1,$status);
		$components_requests->execute();
		
		$total_components = '';
		$out_put = '';
		
		if($components_requests->fetchColumn()>0){

			$total_components = $components_requests->fetchColumn();
			
				$out_put .='<li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new component requests
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
		echo jason_encode($data);

	}

?>