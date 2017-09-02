<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  include('config.php');

  $get_status = "SELECT * FROM `omg2k17_tasks` WHERE `status`= 'Task Added' ";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $taCount=0;
  foreach ($rowStatus as $ft_tasks)
    $taCount++;
    

  $get_status = "SELECT * FROM `omg2k17_tasks` WHERE `status`= 'Accepted'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $tsCount=0;
  foreach ($rowStatus as $ft_tasks)
      $tsCount++;
  
  $get_status = "SELECT * FROM `omg2k17_tasks` WHERE `status`= 'Completed'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  $tcCount=0;
  foreach ($rowStatus as $ft_tasks)
      $tcCount++;
  
  
  $emparray[] = array($taCount,$tsCount,$tcCount);
  echo json_encode($emparray);
?>