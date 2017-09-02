<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  session_start();
  include('config.php');

  $get_status = "SELECT * FROM `omg2k17_tasks` WHERE `status`= 'Task Added'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $taCount=0;
  foreach ($rowStatus as $ft_tasks)
  {
    if($ft_tasks['team_id']==$_SESSION['team_id'])
    {
      $taCount++;
    }
  }

  $get_status = "SELECT * FROM `omg2k17_tasks` WHERE `status`= 'Accepted'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $tsCount=0;
  foreach ($rowStatus as $ft_tasks)
  {
    if($ft_tasks['team_id']==$_SESSION['team_id'])
    {
      $tsCount++;
    }
  }

  $get_status = "SELECT * FROM `omg2k17_tasks` WHERE `status`= 'Completed'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $tcCount=0;
  foreach ($rowStatus as $ft_tasks)
  {
    if($ft_tasks['team_id']==$_SESSION['team_id'])
    {
      $tcCount++;
    }
  }

  
  $emparray[] = array($taCount,$tsCount,$tcCount);
  echo json_encode($emparray);
?>