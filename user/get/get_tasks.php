<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);
    
    session_start();
    
    include('../../config.php');

	
    $get_tasks = "SELECT * FROM omg2k17_tasks WHERE team_id = ? ORDER BY id DESC";

    $fetch_tasks = $con->prepare($get_tasks);
        $fetch_tasks->bindParam(1,$_SESSION['team_id']);

    $fetch_tasks->execute();
    $row = $fetch_tasks->fetchAll();
    $num = $fetch_tasks->rowCount();
    if($num>0){
	    foreach ($row as $ft_tasks) {
	    	if($ft_tasks['person_type']=="Mentor"){
	    		
	    		$person_type = '<span class="label label-danger pull-right">Mentor</span>';

	    	}
	    	else{
				$person_type = '<span class="label label-info pull-right">Maker</span>';	    		
	    	}


	    	echo '
	    			<li class="item">
	                  	<a href="javascript:void(0)" class="product-title">'.$ft_tasks['task_title'].'
	                    </a>
	                    '.$person_type.'
	                    <span class="product-description">'.$ft_tasks['task_description'].'</span>
	                </li>';
	    	}
	    }
	
	else{
		echo 'Noting to show';
	}
?>