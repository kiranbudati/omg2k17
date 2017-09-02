<?php 
ini_set('display_errors',1);
  error_reporting(E_ALL);
	include('../config.php');
    $query = "SELECT * FROM omg2k17_mentors WHERE email = ?";

    $stmt = $con->prepare($query);
    $stmt->bindParam(1,$_SESSION['mentor_email']);
    $stmt->execute();
    $row=$stmt->fetchAll();

    foreach ($row as $mentor) {
      
      $profile_pic ='<img src="user.png" class="user-image img-circle" alt="profile pic" />';

      $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';

      $fullname = $mentor['fullname'];
      $email = $mentor['email'];
      $domain = $mentor['domain'];
      $experience = $mentor['experience'];
      

    }
     
?>