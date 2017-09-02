<?php 
    
    include('../config.php');

    $query = "SELECT * FROM omg2k17_admin WHERE email = ?";

    $stmt = $con->prepare($query);
    $stmt->bindParam(1,$_SESSION['admin_email']);
    $stmt->execute();
    $row=$stmt->fetchAll();

    foreach ($row as $user) {
     
     if($user['profile_pic']==null)
     {
      $profile_pic ='<img src="user.png" class="user-image img-circle" alt="profile pic" />';

      $profile_pic_sm = '<img src="user.png" class="img-responsive img-circle img-sm" alt="profile pic" />';

      $profile_pic_chat = '<img src="user.png" class="direct-chat-img" alt="profile pic" />';      
     }
     else{
      $profile_pic = '<img src="data:image/jpeg;base64,'.base64_encode($user['profile_pic']) .'" class="user-image img-circle" alt="profile pic" />';
      
      $profile_pic_sm = '<img src="data:image/jpeg;base64,'.base64_encode($user['profile_pic']) .'" class="img-responsive img-circle img-sm" alt="profile pic" />';

      $profile_pic_chat = '<img src="data:image/jpeg;base64,'.base64_encode($user['profile_pic']) .'" class="direct-chat-img" alt="profile pic" />';
    }
      $created = $user['last_login'];

    }
     
?>
<?php
  include('../config.php');

   $users_fetch = "SELECT COUNT(*) FROM omg2k17_users WHERE online = '1' "; 
   
   $user_online=$con->prepare($users_fetch);
   $user_online->execute();
  $total_online = $user_online->fetchColumn();

  $all_users_fetch = "SELECT COUNT(*) FROM omg2k17_users"; 
   
   $total_users=$con->prepare($all_users_fetch);
   $total_users->execute();
  $total_num_users = $total_users->fetchColumn();


  $date = date('Y-m-d H:i:s',time()-(7*86400)); // 7 days ago

  $last_reg = "SELECT COUNT(*) FROM omg2k17_users WHERE created = ?" ;

  $new_reg=$con->prepare($last_reg);
  $new_reg->bindParam(1,$date);

   $new_reg->execute();
  $last_week_reg = $new_reg->fetchColumn();

?>