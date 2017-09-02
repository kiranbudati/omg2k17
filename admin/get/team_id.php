<?php
	session_start();		

	include('../../config.php');

	$team_id=isset($_GET['team_id']) ? $_GET['team_id'] : "";

	$fetch_data = "SELECT DISTINCT idea_domain FROM omg2k17_teams WHERE team_id= ? ";

		$fetch_domain = $con->prepare($fetch_data);
		$fetch_domain->bindParam(1,$team_id);
		$fetch_domain->execute();
		$num = $fetch_domain->rowCount();
		
		if($num>0){

			$row = $fetch_domain->fetchAll();

			foreach ($row as $team_domain){

				$fetch_mentor = "SELECT * FROM omg2k17_mentors WHERE domain = ?";

				$mentor_det = $con->prepare($fetch_mentor);
				$mentor_det->bindParam(1,$team_domain['idea_domain']);
				$mentor_det->execute();
				$row_men = $mentor_det->fetchAll();

				foreach ($row_men as $get_men) {
					echo '
						<div class="col-sm-4">
                          	<div class="business-card bg-light-blue color-palette">
                              <div class="media">
                                  <div class="media-body">
                                      <h2 class="media-heading">'.$get_men['fullname'].'<button class="btn btn-default pull-right allot_mento" id="'.$get_men['email'].'">Allot</button></h2>
                                      <div class="mail">'.$get_men['domain'].'</div>
                                      <div class="mail">'.$get_men['email'].'</div>
                                      <div class="mail">Number of teams :'.$get_men['num_teams'].'</div>
                                  </div>
                              </div>

                          </div>
                      	</div>';
				}

			} 


		}
?>