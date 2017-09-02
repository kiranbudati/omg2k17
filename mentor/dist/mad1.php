<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

date_default_timezone_set("Asia/Kolkata");
$date_a = date("Y-m-d H:i:s");


$date_a = new DateTime($date_a);

include('config.php');

$get_status = "SELECT `agenda_time` FROM `datapoints` WHERE `agenda` = 'Time to Ideate'";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks)

$get_status = "SELECT `agenda_time` FROM `datapoints` WHERE `agenda` = 'Time to Build'";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks1)

$get_status = "SELECT `agenda_time` FROM `datapoints` WHERE `agenda` = 'Time to Pitch'";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks2)

$get_status = "SELECT `agenda_time` FROM `datapoints` WHERE `agenda` = 'Time to Win'";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks3)

$date_b = new DateTime($ft_tasks[0]); // 2017-6-13 09:00:00
$interval1 = date_diff($date_a,$date_b);
$aa= $interval1->format("%a");
$aa1=(18-$aa)*(100/18);
echo "<div class='progress-bar progress-bar-yellow' style='width:".$aa1."%'></div>$";
$date_b = new DateTime($ft_tasks1[0]); // 2017-6-13 09:00:00
$interval2 = date_diff($date_a,$date_b);
$bb= $interval2->format("%a");
$bb1=(30-$bb)*(100/30);
echo "<div class='progress-bar progress-bar-red' style='width:".$bb1."%'></div>$";
$date_b = new DateTime($ft_tasks2[0]); // 2017-6-13 09:00:00
$interval3 = date_diff($date_a,$date_b);
$cc= $interval3->format("%a");
$cc1=(35-$cc)*(100/35);
echo "<div class='progress-bar progress-bar-blue' style='width:".$cc1."%'></div>$";
$date_b = new DateTime($ft_tasks3[0]); // 2017-6-13 09:00:00
$interval4 = date_diff($date_a,$date_b);
$dd= $interval4->format("%a");
$dd1=(40-$dd)*(100/40);
echo "<div class='progress-bar progress-bar-green' style='width:".$dd1."%'></div>$";
//$arr = explode(' ', $dd1);
$emparray[] = array($aa,$bb,$cc,$dd);
echo json_encode($emparray);

?>