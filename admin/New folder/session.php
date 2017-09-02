<?php
   include('../config.php');

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = "select * from admin where username = '$user_check' ";
   
   $result = mysql_query($ses_sql);

   $row = mysql_fetch_array($result);   
   $login_session = $row['username'];
      
   if(!isset($_SESSION['login_user'])){
      header("location:admin.php");
   }

   /*

   include('../config.php');

   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $sql = "select username from admin where username = '$user_check'";
   
   $result = mysql_query($sql) or die(mysql_error());;

   $row = mysqli_fetch_array($result);
   
   $login_session = $row['username'];
   if(!isset($_SESSION['login_user'])){
      header("location:admin.php");
   }
        /*
	$row = mysql_fetch_array($query,MYSQLI_ASSOC);   
   $login_session = $row['username'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:admin.php");
   }*/

?>