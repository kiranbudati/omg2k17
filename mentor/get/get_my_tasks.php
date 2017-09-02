<?php
 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
    

	include('../../config.php');


	$query = "SELECT * FROM omg2k17_tasks WHERE task_to = ? OR task_by = ? ORDER BY id DESC";

	$fet_data =$con->prepare($query);
	$fet_data->bindParam(1,$_SESSION['user_email']);
	$fet_data->bindParam(2,$_SESSION['user_email']);
	$fet_data->execute();

	$row =$fet_data->fetchAll();

	$num = $fet_data->rowCount();

	if($num>0){
		foreach ($row as $men_tas) {
			if($men_tas['status']=="Task Added"){
				$respond = '<span class="btn btn-success respond" id= "'.$men_tas['id'].'"></span>';
			}
			echo '
                  <tr id= "'.$men_tas['id'].'" class="comms">
                   		<td>'.$men_tas['id'].'</td>
                              <td>'.$men_tas['task_title'].'</td>
                              <td>'.$men_tas['task_start_date'].'</td>
                              <td>'.$men_tas['task_end_date'].'</td>
			      <td>'.$men_tas['status'].'</td>
			       <td></td>
                              <td  id="'.$men_tas['id'].'"><span class="btn btn-primary getDetails" data-toggle="modal" data-target="#myModal"  id="'.$men_tas['id'].'" >View Details</span></td>
                            </tr>
                                              ';
		
		}
	}
	else{
		echo '<div class="panel panel-primary">
				      <div class="panel-heading">Empty</div>
				      <div class="panel-body">Nothing to show</div>
				   </div>';
	}

?>