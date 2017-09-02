<?php 
	session_start();
	include('../config.php');

	$id= isset($_POST['id']) ? $_POST['id'] : "";

	$get_user = "SELECT * FROM omg2k17_users WHERE id= ?";

	$user = $con->prepare($get_user);
	$user->bindParam(1,$id);

	$user->execute();

	$fet_user = $user->fetchAll();

	foreach ($fet_user as $user_det) {
		echo '<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body" style="background-color:#ecf0f5">
			      <span><h3 class="text-ligh-blue"><a href="">'.$user_det['fullname'].'</a></h3>
			 
			      </span>
			      <div class="row">	
			        <div class="col-md-12">
			          <div class="nav-tabs-custom widget">
			            
			            <ul class="nav nav-tabs widget">
			              <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
			              <li><a href="#project" data-toggle="tab">Project</a></li>
			              	
 						</ul>
			            
			            <div class="tab-content">
			              <div class="tab-pane active" id="profile">
			                <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
			                	<i class="glyphicon glyphicon-user"></i>  ABOUT
			                </h3>
			                <div class="row">
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Full Name:</label>
					              <div class="col-xs-7 controls">'.$user_det['fullname'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">User Name:</label>
					              <div class="col-xs-7 controls">'.$user_det['username'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Phone:</label>
					              <div class="col-xs-7 controls">'.$user_det['phone'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Email:</label>
					              <div class="col-xs-7 controls">'.$user_det['email'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Occupation:</label>
					              <div class="col-xs-7 controls">'.$user_det['role'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Birthday:</label>
					              <div class="col-xs-7 controls">'.$user_det['dob'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Joined at:</label>
					              <div class="col-xs-7 controls">'.$user_det['created'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					        </div>
					        <hr>
					        <h3 class="mgbt-xs-15 mgtp-10 font-semibold">
			                	<i class="glyphicon glyphicon-plus"></i>  Team
			                </h3>
			                <div class="row">
			                	<div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Team Id:</label>
					              <div class="col-xs-7 controls">'.$user_det['team_id'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Team Name:</label>
					              <div class="col-xs-7 controls">'.$user_det['team_name'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
					          
					          <div class="col-sm-6">
					            <div class="row mgbt-xs-0">
					              <label class="col-xs-5 control-label">Member Id:</label>
					              <div class="col-xs-7 controls">'.$user_det['member_id'].'</div>
					              <!-- col-sm-10 --> 
					            </div>
					          </div>
			                </div>
			              </div>
			              <div class="tab-pane" id="project">
			                <div class="row">
			                	<div class="col-md-12">
			            			<label class="control-label">Idea Title</label>
			            			<div>'.$user_det['idea_title'].'</div>
			                	</div>
			                	<hr>
			                	<div class="col-md-12">
			            			<label class="control-label">Idea Domain:</label>
			            			<div>'.$user_det['idea_domain'].'</div>
			                	</div>
			                	<hr>
			                	<div class="col-md-12">
			            			<label class="control-label">Idea Description:</label>
			            			<div>'.$user_det['idea_description'].'</div>
			                	</div>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>
			        </div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			      </div>';	
			  }
?>
