<?php 
include('../config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];


$query1=mysql_query("UPDATE requests SET status = 'Alloted' WHERE id='$id'");

if($query1)
{
	header('location:requested_comp.php');
}
}
?>