<?php
 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
    

	include('../../config.php');

	$person_type="Mentor";

	$query = "SELECT * FROM omg2k17_tasks WHERE team_id= ? AND person_type = ? ORDER BY id DESC";

	$fet_data =$con->prepare($query);
	$fet_data->bindParam(1,$_SESSION['team_id']);
	$fet_data->bindParam(2,$person_type);
	$fet_data->execute();

	$row =$fet_data->fetchAll();

	$num = $fet_data->rowCount();

	if($num>0){
		foreach ($row as $men_tas) {
			
			echo '<div class="panel panel-primary">
				      <div class="panel-heading">
				      	Task Id : '.$men_tas['id'].'
				    	 <span class="pull-right label label-success">'.$men_tas['status'].'</span>

				      </div>
				      <div class="panel-body">
				      	<dl class="dl-horizontal">
				      	<dt>Task Title:</dt>
			                <dd>'.$men_tas['task_title'].'</dd>
			                <dt>Task By :</dt>
			                <dd>'.$men_tas['fullname'].'</dd>
			                <dt>Task to :</dt>
			                <dd>'.$men_tas['task_to'].'</dd>
			                <dt>Start Date : </dt>
			                <dd>'.$men_tas['task_start_date'].'</dd>
			                <dt>End Date : </dt>
			                <dd>'.$men_tas['task_end_date'].'</dd>
			                <dt>description : </dt>
			                <dd>'.$men_tas['task_description'].'</dd>
			              </dl>
				      </div>
				   </div>';
		
		}
	}
	else{
		echo '<div class="panel panel-primary">
				      <div class="panel-heading">Empty</div>
				      <div class="panel-body">Nothing to show</div>
				   </div>';
	}

?>