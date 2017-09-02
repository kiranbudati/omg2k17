<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  session_start();
  include('config.php');

  $get_status = "SELECT * FROM `omg2k17_teams`";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $taCount=0;
  foreach ($rowStatus as $ft_tasks)
  {
    if($ft_tasks['team_id']==$_SESSION['team_id'])
    {
      echo '<iframe style="height: 400px;" src="https://drive.google.com/file/d/' . $ft_tasks['idea_ppt']. '/preview"></iframe>' . 'abcdefg';
      echo '<iframe style="height: 400px;" src="https://www.youtube.com/embed/'. $ft_tasks['pitch_link']. '" frameborder="0" allowfullscreen></iframe>'.'abcdefg';
    }
  }


  
?>