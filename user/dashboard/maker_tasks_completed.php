<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);
    
    session_start();
    
    	function get_timeago( $ptime )
	{
	    $estimate_time = time() - $ptime;

	    if( $estimate_time < 1 )
	    {
	        return 'less than 1 second ago';
	    }

	    $condition = array( 
	                12 * 30 * 24 * 60 * 60  =>  'year',
	                30 * 24 * 60 * 60       =>  'month',
	                24 * 60 * 60            =>  'day',
	                60 * 60                 =>  'hour',
	                60                      =>  'minute',
	                1                       =>  'second'
	    );

	    foreach( $condition as $secs => $str )
	    {
	        $d = $estimate_time / $secs;

	        if( $d >= 1 )
	        {
	            $r = round( $d );
	            return 'about ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
	        }
	    }
	}

    include('../../config.php');

	$status = "Completed";
	$task_by = "Mentor";

	$get_status = "SELECT * FROM omg2k17_tasks WHERE status = ? AND team_id =?  ORDER BY id DESC";

	$fetch_status = $con->prepare($get_status);
    $fetch_status->bindParam(1,$status);
    $fetch_status->bindParam(2,$_SESSION['team_id']);
	$fetch_status->execute();

    $rowStatus = $fetch_status->fetchAll();
    $numStatus = $fetch_status->rowCount();
    if($numStatus>0){

	    foreach ($rowStatus as $ft_tasks) {
	    	if($ft_tasks['person_type']=="Mentor"){
	    		
	    	$person_type = '<span class="label label-danger pull-right">Mentor</span>';

	    	}
	    	else{
				$person_type = '<span class="label label-info pull-right">Maker</span>';	    		
	    	}
	    	$post_time=get_timeago(strtotime($ft_tasks['post_time']));

	    	if($ft_tasks['task_to']===$_SESSION['user_email']){

	    		echo '
	    			<li class="item">
	                  	<a href="my_tasks.php" class="product-title"><i class="fa fa-user text-info"></i>'.$ft_tasks['task_title'].'
	                    </a><small>'.$post_time.'</small>'.$person_type.'
	                    <span class="product-description">'.$ft_tasks['task_description'].'</span>
	                </li>';

	    	}
	    	elseif($ft_tasks['person_type']=="Mentor"){
				echo '
	    			<li class="item">
	                  	<a href="my_tasks.php" class="product-title"><i class="fa fa-users text-primary"></i>'.$ft_tasks['task_title'].'
	                    </a><small>'.$post_time.'</small>'.$person_type.'
	                    <span class="product-description">'.$ft_tasks['task_description'].'</span>
	                </li>';

	    	}
	    	elseif(strpos($ft_tasks['task_to'],$_SESSION['user_email'])!==false){
	    		echo '
	    			<li class="item">
	                  	<a href="my_tasks.php" class="product-title"><i class="fa fa-users text-primary"></i>'.$ft_tasks['task_title'].'
	                    </a><small>'.$post_time.'</small>'.$person_type.'
	                    <span class="product-description">'.$ft_tasks['task_description'].'</span>
	                </li>';

	    	}
	    	else{
	    			echo '
	    			<li class="item">
	                  	<a href="my_tasks.php" class="product-title"><i class="fa fa-users text-danger"></i>'.$ft_tasks['task_title'].'
	                    </a><small>'.$post_time.'</small>'.$person_type.'
	                    <span class="product-description">'.$ft_tasks['task_description'].'</span>
	                </li>';
	    	}
	    }
	}
	else{
		echo 'No Task Added yet';
	}	
?>