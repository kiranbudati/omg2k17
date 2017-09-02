<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
    
    include('../../config.php');

    if( !isset($_SESSION['admin_email']) ){
        header("location:../index.php");
      exit();
    }
   
  
         $question_id= isset($_POST['delete_id']) ? $_POST['delete_id'] : "";

         $delete_question = "DELETE FROM omg2k17_questions WHERE id = ?";

         $delete_data = $con->prepare($delete_question);
         $delete_data->bindParam(1,$question_id);
         
         if($delete_data->execute()){

          $delete_commnet = "DELETE FROM omg2k17_comments WHERE ques_id = ?";
           $delete_cmdata = $con->prepare($delete_commnet);
           $delete_cmdata->bindParam(1,$question_id);
            
            if($delete_cmdata->execute()){

              $delete_notifi = "DELETE FROM omg2k17_notifications WHERE question_id = ?";
               $delete_not = $con->prepare($delete_notifi);
               $delete_not->bindParam(1,$question_id);
               if($delete_not->execute()){
                echo "deleted";
               }
               else{
                echo 'error1';
               }

            }
            else{
                echo 'error2';
               }


         }
         else{
          echo "error3";
         }

    

?>