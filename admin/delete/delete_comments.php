<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
    
    include('../../config.php');

    if( !isset($_SESSION['admin_email']) ){
        header("location:../index.php");
      exit();
    }
   
  
         $comment_id= isset($_POST['delete_id']) ? $_POST['delete_id'] : "";

         $delete_comment = "DELETE FROM omg2k17_comments WHERE id = ?";

         $delete_data = $con->prepare($delete_comment);
         $delete_data->bindParam(1,$comment_id);
         
         if($delete_data->execute()){
                echo "deleted";
          }
          else{
              echo 'error';
          }

?>