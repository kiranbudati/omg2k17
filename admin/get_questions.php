<?php 
	session_start();
	include('../config.php');

	$id= isset($_POST['id']) ? $_POST['id'] : "";

	$get_question = "SELECT * FROM omg2k17_questions WHERE id= ?";

	$get_det = $con->prepare($get_question);
	$get_det->bindParam(1,$id);

	$get_det->execute();

	$a_get = $get_det->fetchAll();

	foreach ($a_get as $get_ques) {

		$datetime1=new DateTime("now");
                        $datetime2=date_create($get_ques
                        	['date']);
                        $diff=date_diff($datetime1, $datetime2);
                        $timemsg='';
                        if($diff->y > 0){
                            $timemsg = $diff->y .' year'. ($diff->y > 1?"'s":'');

                        }
                        else if($diff->m > 0){
                         $timemsg = $diff->m . ' month'. ($diff->m > 1?"'s":'');
                        }
                        else if($diff->d > 0){
                         $timemsg = $diff->d .' day'. ($diff->d > 1?"'s":'');
                        }
                        else if($diff->h > 0){
                         $timemsg = $diff->h .' hour'.($diff->h > 1 ? "'s":'');
                        }
                        else if($diff->i > 0){
                         $timemsg = $diff->i .' minute'. ($diff->i > 1?"'s":'');
                        }
                        else if($diff->s > 0){
                         $timemsg = $diff->s .' second'. ($diff->s > 1?"'s":'');
                        }

                    $timemsg = $timemsg.' ago';
         

		echo '<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			      <span><h3 class="text-ligh-blue"><a href="">'.$get_ques['question_title'].'</a></h3>
			        <small>
                  '.$timemsg.'
                   by <a href="#">'.$get_ques['author_email'].'</a> </small>

			      </span>
			      <pre>'.$get_ques['question'].'</pre>';	
			  }
	
	         $fetch_comm = "SELECT * FROM omg2k17_comments WHERE ques_id  = ?";
         	$fm = $con->prepare($fetch_comm);
         	$fm->bindParam(1,$id);
         	$fm->execute();
         	$row_fm = $fm->fetchAll();
         	$num_comment = $fm->rowCount();
         	
         	if($num_comment!=0){

         	foreach ($row_fm as $comment) {

         		echo '<div>
			      	<span><h4 data-toggle="collapse" data-target="#comm_down">Comments  <small class="label bg-blue">'.$num_comment.'</small></h4>	</span>
			      	<hr>
			      	  <div id="comm_down" class="collapse">
					     <div class="box-footer box-comments">
			              <div class="box-comment">
			                <div class="comment-text">
			                      <span class="username">
			                        '.$comment['com_auth_email'].'
			                        <span class="text-muted pull-right">'.$comment['date'].'</span>
			                      </span><!-- /.username -->
			                  '.$comment['comment'].'
			                </div>
			                <!-- /.comment-text -->
			              </div>
					  </div>
			      	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>';
         	}
         }
         	else{
         		echo '<div>
			      	<span><h4 data-toggle="collapse" data-target="#comm_down">Comments  <small class="label bg-blue">0</small></h4>	</span>
			      	<hr>
			      	  <div id="comm_down" class="collapse">
					     <div class="box-footer box-comments">
			              <div class="box-comment">
			                <div class="comment-text">
			                      Nothing to show
			                </div>
			                <!-- /.comment-text -->
			              </div>
					  </div>
			      	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			        <button type="button" class="btn btn-primary">Save changes</button>
			      </div>';	
         	}

?>