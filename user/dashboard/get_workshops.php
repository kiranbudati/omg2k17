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

	$get_status = "SELECT * FROM omg2k17_workshops  ORDER BY id DESC";

	$fetch_status = $con->prepare($get_status);
	$fetch_status->execute();

    $rowStatus = $fetch_status->fetchAll();
    $numStatus = $fetch_status->rowCount();
    if($numStatus>0){

	    foreach ($rowStatus as $ft_tasks) {
	    	$post_time=get_timeago(strtotime($ft_tasks['post_time']));

			$seconds = strtotime(date("Y-m-d H:i:s")) - strtotime($ft_tasks['post_time']);

			$hour= $seconds/60/60;
			if($hour>5){
				$update= '';
			}
			else{
			$update ='<img src="update.gif" alt="update">'; 
			}
	    		echo '
	    			<li class="item">
	                  	<a href="#" class="product-title"><span style="word-wrap: break-word;">'.$ft_tasks['workshop_title'].''.$update.'</a>
	                    </a><small>'.$post_time.'</small>
	                    <span class="product-description" ><i class="fa fa-home text-info"></i>&nbsp;<span style="word-wrap: break-word;">'.$ft_tasks['venue'].'</span></span>
	                    <span class="product-description" >Date : &nbsp;<span style="word-wrap: break-word;">'.$ft_tasks['eventdate'].' '.$ft_tasks['eventtime'].'</span></span>
	                </li>';
	        }
	}
	else{
		echo 'No new announcements yet';
	}	
?>