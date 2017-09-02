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

                    echo '
                        <li style="white-space: normal">
                            <a href="#" style="word-wrap: break-word;">'.$seen.'
                            <span style="word-wrap: break-word;">'.$my_notifications['notification'].'</span> by <span class="label label-info" >'.$my_notifications['author_name'].'</span><small>'.$post_time.'</small>
                            </a>
                        </li>';


                }

         }
         else{
            echo '<li><a> You have no new notifications</a></li>';
         }
         

?>