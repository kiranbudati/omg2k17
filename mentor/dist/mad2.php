<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include('config.php');

$get_status = "SELECT COUNT(*) FROM `omg2k17_tasks` WHERE 1";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks)

$get_status = "SELECT COUNT(*) FROM `omg2k17_questions` WHERE 1";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks1)

$get_status = "SELECT COUNT(*) FROM `omg2k17_comments` WHERE 1";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks2)

$get_status = "SELECT COUNT(*) FROM `omg2k17_users` WHERE 1";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
foreach ($rowStatus as $ft_tasks3)

$get_status = "SELECT * FROM `omg2k17_tasks` WHERE `created`";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
$count1_ppDay=1;
$count2_pDay=1;

foreach ($rowStatus as $ft_tasks4)
{
 $date_b=explode(' ',$ft_tasks4['created'])[0];
 date_default_timezone_set("Asia/Kolkata");
 $date_a = date("Y-m-d");
 $date_a = new DateTime($date_a);
 $date_b = new DateTime($date_b);
 $interval2 = date_diff($date_a,$date_b);
 $water_melon=$interval2->format("%a");
 if($water_melon==2)
  $count1_ppDay++;
 if($water_melon==1)
  $count2_pDay++;
}

if($count1_ppDay>$count2_pDay)
{
 $t1=($count1_ppDay - $count2_pDay)*100/($count1_ppDay);
 $t1=($count1_ppDay - $count2_pDay)*100/($count2_pDay+$count1_ppDay);
 echo '<span class="description-percentage text-red"><i class="fa fa-caret-down"></i>'.$t1.'%</span>';
}
else if($count1_ppDay<$count2_pDay)
{
 $t1=($count2_pDay - $count1_ppDay)*100/($count2_pDay);
 echo '<span class="description-percentage text-green"><i class="fa fa-caret-up"></i>'.$t1.'%</span>';
}
else if($count1_ppDay==$count2_pDay)
{
 $t1=0;
 echo '<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i>'.$t1.'%</span>';
}
echo '$';

$get_status = "SELECT * FROM `omg2k17_questions` WHERE `post_time`";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
$count11_ppDay=1;
$count22_pDay=1;

foreach ($rowStatus as $ft_tasks5)
{
 $date_b=explode(' ',$ft_tasks5['post_time'])[0];
 date_default_timezone_set("Asia/Kolkata");
 $date_a = date("Y-m-d");
 $date_a = new DateTime($date_a);
 $date_b = new DateTime($date_b);
 $interval2 = date_diff($date_a,$date_b);
 $water_melon=$interval2->format("%a");
 if($water_melon==2)
  $count11_ppDay++;
 if($water_melon==1)
  $count22_pDay++;
}

if($count11_ppDay>$count22_pDay)
{
 $t2=($count11_ppDay - $count22_pDay)*100/($count11_ppDay);
 $t2=($count11_ppDay - $count22_pDay)*100/($count22_pDay+$count11_ppDay); // takuva
 echo '<span class="description-percentage text-red"><i class="fa fa-caret-down"></i>'.$t2.'%</span>';

}
else if($count11_ppDay<$count22_pDay)
{
 $t2=($count22_pDay - $count11_ppDay)*100/($count22_pDay); // ekuva
 echo '<span class="description-percentage text-green"><i class="fa fa-caret-up"></i>'.$t2.'%</span>';
}
else if($count11_ppDay==$count22_pDay)
{
 $t2=0;
 echo '<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i>'.$t2.'%</span>';

} 
echo '$';

$get_status = "SELECT * FROM `omg2k17_comments` WHERE `post_time`";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
$count111_ppDay=1;
$count222_pDay=1;

foreach ($rowStatus as $ft_tasks6)
{
 $date_b=explode(' ',$ft_tasks6['post_time'])[0];
 date_default_timezone_set("Asia/Kolkata");
 $date_a = date("Y-m-d");
 $date_a = new DateTime($date_a);
 $date_b = new DateTime($date_b);
 $interval2 = date_diff($date_a,$date_b);
 $water_melon=$interval2->format("%a");
 if($water_melon==2)
  $count111_ppDay++;
 if($water_melon==1)
  $count222_pDay++;
}

if($count111_ppDay>$count222_pDay)
{
 $t3=($count111_ppDay - $count222_pDay)*100/($count111_ppDay);
 $t3=($count111_ppDay - $count222_pDay)*100/($count222_pDay+$count111_ppDay);
 echo '<span class="description-percentage text-red"><i class="fa fa-caret-down"></i>'.$t3.'%</span>';
}
else if($count111_ppDay<$count222_pDay)
{
 $t3=($count222_pDay - $count111_ppDay)*100/($count222_pDay);
 echo '<span class="description-percentage text-green"><i class="fa fa-caret-up"></i>'.$t3.'%</span>';
}
else if($count111_ppDay==$count222_pDay)
{
 $t3=0;
 echo '<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i>'.$t3.'%</span>';
}
echo '$';

$get_status = "SELECT * FROM `omg2k17_users` WHERE `created`";
$fetch_status = $con->prepare($get_status);
$fetch_status->execute();
$rowStatus = $fetch_status->fetchAll();
$numStatus = $fetch_status->rowCount();
$count1111_ppDay=1;
$count2222_pDay=1;

foreach ($rowStatus as $ft_tasks7)
{
 $date_b=explode(' ',$ft_tasks7['created'])[0];
 date_default_timezone_set("Asia/Kolkata");
 $date_a = date("Y-m-d");
 $date_a = new DateTime($date_a);
 $date_b = new DateTime($date_b);
 $interval2 = date_diff($date_a,$date_b);
 $water_melon=$interval2->format("%a");
 if($water_melon==2)
  $count1111_ppDay++;
 if($water_melon==1)
  $count2222_pDay++;
}

if($count1111_ppDay>$count2222_pDay)
{
 $t4=($count1111_ppDay - $count2222_pDay)*100/($count1111_ppDay);
 $t4=($count1111_ppDay - $count2222_pDay)*100/($count2222_pDay+$count1111_ppDay);
 echo '<span class="description-percentage text-red"><i class="fa fa-caret-down"></i>'.$t4.'%</span>';
}
else if($count1111_ppDay<$count2222_pDay)
{
 $t4=($count2222_pDay - $count1111_ppDay)*100/($count2222_pDay);
 echo '<span class="description-percentage text-green"><i class="fa fa-caret-up"></i>'.$t4.'%</span>';
}
else if($count1111_ppDay==$count2222_pDay)
{
 $t4=0;
 echo '<span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i>'.$t4.'%</span>';
}
echo '$';
$emparray[] = array($ft_tasks[0],$ft_tasks1[0],$ft_tasks2[0],$ft_tasks3[0]);
echo json_encode($emparray);

?>