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
	            return ' ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
	        }
	    }
	}


	include('../../config.php');

	//questions 1st box  start

	$get_questions = "SELECT * FROM omg2k17_questions WHERE author_email = ? ORDER BY post_time DESC LIMIT 10";
	$recent_questions=$con->prepare($get_questions);
	$recent_questions->bindParam(1,$_SESSION['user_email']);
	$recent_questions->execute();

	$row = $recent_questions->fetchAll();
	$numquestions = $recent_questions->rowCount();
	if($numquestions>0){
		foreach ($row as $ft_questions){
		
		   $post_time=get_timeago(strtotime($ft_questions['post_time']));
		   if($ft_questions['question_to']=="Admin"){
	    		
	    	$person_type = '<span class="label label-primary pull-right">Admin</span>';

	    	}
	    	else{
				$person_type = '<span class="label label-info pull-right">Mentor</span>';	    		
	    	}
		 		echo '<li class="item">
		 				<small></small>
		               <a href="my_questions.php" class="product-title" style="word-wrap: break-word;"></i>'.$ft_questions['question_title'].' '.$person_type.'
		                    </a><small>'.$post_time.'</small>
		                </li>';	


		}
		echo 'abcdefg';        

	}
	else{
		echo "No Questions Posted yet";
		echo 'abcdefg';
	}

	echo '<span class="label label-success pull-right">Total Questions : '.$numquestions.'</span>';
			echo 'abcdefg';

	//questions 1st box end

	//questions 2nd box start

	$select_tags = "SELECT * FROM omg2k17_questions WHERE FIND_IN_SET((SELECT idea_domain FROM omg2k17_users WHERE email =?),tags)";
	$fetch_tags =$con->prepare($select_tags);
	$fetch_tags->bindParam(1,$_SESSION['user_email']);
	$fetch_tags->execute();

	$rowTags = $fetch_tags->fetchAll();
	$numTags = $fetch_tags->rowCount();
	if($numTags>0){
		foreach ($rowTags as $ft_tags){
		
		   $post_time=get_timeago(strtotime($ft_tags['post_time']));
		   
		 		echo '<li class="item">
		 				<small></small>
		               <a href="my_questions.php" class="product-title" style="word-wrap: break-word;"></i>'.$ft_tags['question_title'].' 
		                    </a><small>'.$post_time.'</small>
		                </li>';	


		}
		echo 'abcdefg';        

	}
	else{
		echo "No Questions Posted yet";
		echo 'abcdefg';
	}

	echo '<span class="label label-success pull-right">Total Questions : '.$numTags.'</span>';
			echo 'abcdefg';


	//questions 2nd box end

	//questions 2nd box start

	$get_cm_questions = "SELECT * FROM omg2k17_questions WHERE author_email = ? ";

	$fet_cm_questions = $con->prepare($get_cm_questions);
	$fet_cm_questions->bindParam(1,$_SESSION['user_email']);
	$fet_cm_questions->execute();
	$rowQuid = $fet_cm_questions->fetchAll();

	foreach ($rowQuid as $get_quesid) {
		$question_id =$get_quesid['id'];
	}


	$select_comments = "SELECT * FROM omg2k17_comments WHERE ques_id = ?";

	$fetch_comments=$con->prepare($select_comments);
	$fetch_comments->bindParam(1,$question_id);
	$fetch_comments->execute();

	$rowComments = $fetch_comments->fetchAll();
	$numComments = $fetch_comments->rowCount();

	if($numComments>0){

		foreach ($rowComments as $ft_comments) {
			
			if($ft_comments['person_type']=="Admin"){
	    		
	    	$person_type = '<span class="label label-danger pull-right">Admin</span>';

	    	}
	    	elseif($ft_comments['person_type']=="Mentor"){
	    		$person_type = '<span class="label label-success pull-right">Mentor</span>';
	    	}
	    	else{
				$person_type = '<span class="label label-info pull-right">Maker</span>';	    		
	    	}
			echo '<li class="item">
		            <a href="my_questions.php" class="product-title" style="word-wrap: break-word;"></i>'.$ft_comments['question_title'].' <small>'.$ft_comments['com_auth_name'].'</small>'.$person_type.' </a>
		            <span class="product-description">'.$ft_comments['comment'].'</span>

		                </li>';

		}
	}
	else{

		echo "No Questions Posted yet";
		echo 'abcdefg';

	}
?>