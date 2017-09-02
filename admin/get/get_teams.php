<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);
    
    session_start();
    
    include('../../config.php');

	
    $get_teams = "SELECT * FROM omg2k17_teams";

    $fetch_teams = $con->prepare($get_teams);

    $fetch_teams->execute();
    $row = $fetch_teams->fetchAll();
    $num = $fetch_teams->rowCount();
    if($num>0){
	    foreach ($row as $ft_teams) {


	    	echo '<div class="col-md-6">
		          <div class="box box-primary collapsed-box box-solid">
		            <div class="box-header with-border">
		              <h3 class="box-title">'.$ft_teams['team_id'].'</h3>
		
		              <div class="box-tools pull-right">
		                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
		                </button>
		              </div>
		              <!-- /.box-tools -->
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
						<dl class="dl-horizontal">
				      		<dt>Team Name:</dt>
			                <dd>'.$ft_teams['team_name'].'</dd>
			                <dt>Idea Title :</dt>
			                <dd>'.$ft_teams['idea_title'].'</dd>
			                <dt>Idea Domain :</dt>
			                <dd>'.$ft_teams['idea_domain'].'</dd>
			                <dt>Idea Description : </dt>
			                <dd>'.$ft_teams['idea_description'].'</dd>
			                <dt>Mentor Id : </dt>
			                <dd>'.$ft_teams['mentor_id'].'</dd>
			              </dl>
		            </div>
		            <!-- /.box-body -->
		          </div>
		          <!-- /.box -->
		        </div>';
	    	}
	    }
	
?>