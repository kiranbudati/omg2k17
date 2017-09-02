<?php 
      
    ini_set('display_errors',1);
    error_reporting(E_ALL);
      session_start();
	include('../../config.php');
      $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';
      
      $question_id= isset($_GET['question_id']) ? $_GET['question_id'] : "";

      $get_comments = "SELECT * FROM omg2k17_comments WHERE ques_id = ? ORDER BY post_time DESC ";

          $fetch_com = $con->prepare($get_comments);
          $fetch_com->bindParam(1,$question_id);

          $fetch_com->execute();
          $rowcm = $fetch_com->fetchAll();
          $numcm = $fetch_com->rowCount();
          if($numcm>0){
              foreach ($rowcm as $cmm) {
              	if($cmm['person_type']=="Mentor"){
                      $cmby= '<span class="label label-warning">Mentor</span>';
                    }
                    else if($cmm['person_type']=="Admin"){
                      $cmby = '<span class="label label-danger">Admin</span>';
                    }
                    else{
                      $cmby = '<span class="label label-success">Maker</span>';
                    }
                     echo'<div class="box-footer box-comments">
                      <div class="box-comment">
                        '.$profile_pic_sm.'
                        <div class="comment-text" style="word-break: break-all">
                              <span class="username">
                                '.$cmm['com_auth_name'].'&nbsp;'.$cmby.'
                                <span class="text-muted pull-right">'.$cmm['post_time'].'</span>
                              </span>
                              <span style="word-break: break-all">
                              '.$cmm['comment'].'
                              </span>
                        </div>
                      </div>
                    </div>';
                    }
                  }
           else{
           	echo ' '; }
?>