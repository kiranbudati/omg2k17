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

        $user_email = isset($_GET['user_email']) ? $_GET['user_email'] : "";

        $select_questions = "SELECT * FROM omg2k17_questions WHERE author_email = ?";
        $fetch_questions =$con->prepare($select_questions);
        $fetch_questions->bindParam(1,$_GET['user_email']);
        $fetch_questions->execute();

        $rowqes = $fetch_questions->fetchAll();

        foreach ($rowqes as $get_ques) {
            $question_id = $get_ques['id'];
       

}

        $get_notifications = "SELECT * FROM omg2k17_notifications ORDER BY id DESC";

        $fetch_not=$con->prepare($get_notifications);
        $fetch_not->bindParam(1,$user_email);
        $fetch_not->execute();
        $row = $fetch_not->fetchAll();
        
        $numq = $fetch_not->rowCount();
         
         if($numq>0){

                foreach ($row as $my_notifications) {

                    $post_time=get_timeago(strtotime($my_notifications['post_time']));

                    
                    if($my_notifications['seen']=="1"){
                         $seen = '<i class="fa fa-eye text-aqua"></i>';

                    }
                    else{
                        $seen = '<i class="fa fa-eye"></i>';
                    }

                    //delete notification

                    if($my_notifications['to_author']==$_SESSION['user_email']&&$my_notifications['task_response']=="3"){
                        echo '
                        <li >
                            <a href="my_tasks.php?notification='.$my_notifications['id'].'&task_response='.$my_notifications['task_response'].'&task_id='.$my_notifications['unique_id'].'#tab_2"  style="word-wrap: break-word;" >'.$seen.' 
                            '.$my_notifications['notification'].' by <span class="label label-info" >'.$my_notifications['author_name'].'</span><small>'.$post_time.'</small>
                            </a>
                        </li>';
                    }
                    //seen
                    elseif($my_notifications['to_author']===$_SESSION['team_id']&&$my_notifications['task_response']=="1"){
                        echo '
                        <li >
                            <a href="my_tasks.php?notification='.$my_notifications['id'].'&team_task='.$my_notifications['unique_id'].'" style="word-wrap: break-word;">'.$seen.' 
                            <span style ="style="word-wrap: break-word;">'.$my_notifications['notification'].'</span> by <span class="label label-info" >'.$my_notifications['person_type'].'</span><small>'.$post_time.'</small>
                            </a>
                        </li>';
                    }
                    //seen
                    elseif($my_notifications['to_author']===$_SESSION['user_email']&&$my_notifications['task_response']=="2"){
                        echo '
                        <li >
                            <a href="my_tasks.php?notification='.$my_notifications['id'].'&my_task='.$my_notifications['unique_id'].'" style="word-wrap: break-word;">'.$seen.' 
                            <span style ="style="word-wrap: break-word;">'.$my_notifications['notification'].'</span> by <span class="label label-info" >'.$my_notifications['person_type'].'</span><small>'.$post_time.'</small>
                            </a>
                        </li>';
                    }

                    elseif($my_notifications['to_author']==$_SESSION['user_email']&&$my_notifications['question_response']=="Commented"){
                        echo '
                        <li style="white-space: normal">
                            <a href="my_questions.php?notification='.$my_notifications['id'].'&question='.$my_notifications['question_id'].'" style="word-wrap: break-word;">'.$seen.'
                            <span style="word-wrap: break-word;">'.$my_notifications['notification'].'</span> by <span class="label label-info" >'.$my_notifications['author_name'].'</span><small>'.$post_time.'</small>
                            </a>
                        </li>';
                    }
                    elseif($my_notifications['author_email']==$my_notifications['to_author']){
                    	continue;
                    }
                }

         }
         else{
            echo '<li><a> You have no new notifications</a></li>';
         }
         

?>