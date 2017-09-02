<?php 
      
    ini_set('display_errors',1);
    error_reporting(E_ALL);
      session_start();
	include('../../config.php');
      $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';
      
      $question_id= isset($_POST['question_id2']) ? $_POST['question_id2'] : "";

      $get_comments = "SELECT * FROM omg2k17_comments WHERE id = ? ORDER BY post_time DESC ";

          $fetch_com = $con->prepare($get_comments);
          $fetch_com->bindParam(1,$question_title);

          $fetch_com->execute();
          $rowcm = $fetch_com->fetchAll();
          $numcm = $fetch_com->rowCount();
          if($numcm>0){
              foreach ($rowcm as $cmm) {
                     echo'<div class="box-footer box-comments">
                      <div class="box-comment">
                        '.$profile_pic_sm.'
                        <div class="comment-text">
                              <span class="username">
                                '.$cmm['com_auth_name'].'
                                <span class="text-muted pull-right">'.$cmm['post_time'].'</span>
                              </span>
                              '.$cmm['comment'].'
                        </div>
                      </div>
                    </div>';
                    }
                  }
           else{
           	echo 'no data found '; 
           }
?>