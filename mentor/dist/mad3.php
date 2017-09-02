<?php

  ini_set('display_errors',1);
  error_reporting(E_ALL);

  include('config.php');

  $get_status = "SELECT COUNT(*) FROM `omg2k17_questions` WHERE `post_time` BETWEEN '2017-06-05' AND '2017-06-12'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_comments` WHERE `post_time` BETWEEN '2017-06-05' AND '2017-06-12'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks1)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_questions` WHERE `post_time` BETWEEN '2017-06-13' AND '2017-06-20'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks2)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_comments` WHERE `post_time` BETWEEN '2017-06-13' AND '2017-06-20'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks3)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_questions` WHERE `post_time` BETWEEN '2017-06-21' AND '2017-06-28'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks4)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_comments` WHERE `post_time` BETWEEN '2017-06-21' AND '2017-06-28'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks5)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_questions` WHERE `post_time` BETWEEN '2017-06-29' AND '2017-07-05'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks6)

  $get_status = "SELECT COUNT(*) FROM `omg2k17_comments` WHERE `post_time` BETWEEN '2017-06-29' AND '2017-07-05'";
  $fetch_status = $con->prepare($get_status);

  $fetch_status->execute();
  $rowStatus = $fetch_status->fetchAll();
  $numStatus = $fetch_status->rowCount();
  foreach ($rowStatus as $ft_tasks7)

  $emparray[] = array($ft_tasks[0],$ft_tasks1[0],$ft_tasks2[0],$ft_tasks3[0],$ft_tasks4[0],$ft_tasks5[0],$ft_tasks6[0],$ft_tasks7[0]);
  echo json_encode($emparray);
?>