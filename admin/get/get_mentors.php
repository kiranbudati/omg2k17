<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);
    
    session_start();
    
    include('../../config.php');

	
    $get_mentors = "SELECT * FROM omg2k17_mentors ";

    $fetch_mentors = $con->prepare($get_mentors);

    $fetch_mentors->execute();
    $row = $fetch_mentors->fetchAll();
    $num = $fetch_mentors->rowCount();
    if($num>0){
	    foreach ($row as $ft_mentors) {

	    	if($ft_mentors['online']=="1"){
	    		$online = '<span class="label label-primary pull-right">Online</span>';
	    	}
	    	else{
	    		$online = '<span class="label label-danger pull-right">Offline</span>';
	    	}

	    	echo '<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
			          <div class="thumbnail">
			              <div class="caption">
			              	<div class="col-lg-12">
			              		'.$online.'
			                </div>
			                <div class="col-lg-12 well well-add-card">
			                    <h4>'.$ft_mentors['fullname'].'</h4>
			                </div>
			                <div class="col-lg-12">
			                    <p>Email : '.$ft_mentors['email'].'</p>
			                    <p>Domain : '.$ft_mentors['domain'].'</p>
			                    <p class"text-muted">Exp : '.$ft_mentors['experience'].'</p>
			                </div>
			                <span class="label label-info btn-xs btn-update btn-add-card">'.$ft_mentors['domain'].'</span>
			            </div>
			          </div>
			        </div>';
	    	}
	    }
	
?>