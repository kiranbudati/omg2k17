<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  include('config.php');

  $get_status = "SELECT COUNT(*) FROM omg2k17_teams WHERE idea_domain = 'IoT'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks) 
 
  
  $get_status = "SELECT COUNT(*) FROM omg2k17_teams WHERE idea_domain = 'Robotics'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks1) 

  
  $get_status = "SELECT COUNT(*) FROM omg2k17_teams WHERE idea_domain = 'Embedded'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks2) 
  
  $get_status = "SELECT COUNT(*) FROM omg2k17_teams WHERE idea_domain = 'AR / VR'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks3) 
  
  $get_status = "SELECT COUNT(*) FROM omg2k17_teams WHERE idea_domain = 'Cloud'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks4) 
   
  $get_status="SELECT COUNT(*) FROM omg2k17_teams WHERE idea_domain != 'IoT' && idea_domain !='Cloud' && idea_domain !='Robotics' && idea_domain !='Embedded' && idea_domain !='AR / VR'"; 
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks5) 
  
  $emparray[] = array($ft_tasks[0],$ft_tasks1[0],$ft_tasks2[0],$ft_tasks3[0],$ft_tasks4[0],$ft_tasks5[0]);
  echo json_encode($emparray);

  
?>