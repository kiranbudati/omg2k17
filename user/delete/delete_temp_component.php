<?php 
  ini_set('display_errors',1);
  error_reporting(E_ALL);
    session_start();
    
    include('../../config.php');
   
  
         $component_id= isset($_POST['delete_id']) ? $_POST['delete_id'] : "";

         $delete_component = "DELETE FROM omg2k17_temp_kit WHERE id = ?";

         $delete_data = $con->prepare($delete_component);
         $delete_data->bindParam(1,$component_id);
         
         if($delete_data->execute()){
                echo "deleted";
          }
          else{
              echo 'error';
          }

?>