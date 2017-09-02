<?php 
ini_set('display_errors',1);
  error_reporting(E_ALL);
	include('../config.php');
    $query = "SELECT * FROM omg2k17_users WHERE email = ?";

    $stmt = $con->prepare($query);
    $stmt->bindParam(1,$_SESSION['user_email']);
    $stmt->execute();
    $row=$stmt->fetchAll();

    foreach ($row as $user) {
      
      $profile_pic ='<img src="user.png" class="user-image img-circle" alt="profile pic" />';

      $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';

      $profile_pic_chat = '<img src="user.png" class="direct-chat-img" alt="profile pic" />';      
      $fullname = $user['fullname'];
      $username = $user['username'];
      $phone = $user['phone'];
      $email = $user['email'];
      $dob = $user['dob'];
      $team_id = $user['team_id'];
      $member_id = $user['member_id'];
      $team_name = $user['team_name'];
      $role = $user['role'];
      $idea_title = $user['idea_title'];
      $idea_domain=$user['idea_domain'];
      $idea_description = $user['idea_description'];
      $created = $user['created'];


    }
     
?>