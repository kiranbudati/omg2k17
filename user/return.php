  <?php 
  
  session_start();
  include('../config.php');

  $co_id= isset($_POST['co_id']) ? $_POST['co_id'] : "";
  $num_comp= isset($_POST['num_comp']) ? $_POST['num_comp'] : "";
  $now = date('Y-m-d H:i:s');

  $query = "SELECT * FROM omg2k17_kit WHERE id= ?";

    $fet =$con->prepare($query);
    $fet->bindparam(1,$co_id);
    $fet->execute();
    $row= $fet->fetchAll();
      
      foreach ($row as $fet_id){

        $id = $fet_id['id'];
        $comp_name = $fet_id['comp_name'];
        $comp_type = $fet_id['comp_type'];
        $n_comp = $fet_id['num_comp'];
        $exp_return_date = $fet_id['exp_return_date'];

        if($n_comp > $num_comp){
            
            $cop = "INSERT INTO omg2k17_returned_components(id,comp_type,comp_name,num_comp,expe_return_date,returned_date) VALUES (?,?,?,?,?,?) ";

              $run =$con->prepare($cop);
              $run->bindParam(1,$id);
              $run->bindParam(2,$comp_type);
              $run->bindParam(3,$comp_name);
              $run->bindParam(4,$n_comp);
              $run->bindParam(5,$exp_return_date);
              $run->bindParam(6,$now);
              
              if($run->execute()!=null){

                $update_num_comp = "UPDATE omg2k17_kit SET num_comp=(num_comp- ? ) WHERE id = ? ";

                $set_num = $con->prepare($update_num_comp);

                $set_num->bindParam(1,$num_comp);
                $set_num->bindParam(2,$id);

                if($set_num->execute()){
                  echo "Components Were Returned";
                }
                
            }
          }
          elseif($n_comp == $num_comp){
            
            $cop = "INSERT INTO omg2k17_returned_components(id,comp_type,comp_name,num_comp,expe_return_date,returned_date) VALUES (?,?,?,?,?,?) ";

              $run =$con->prepare($cop);
              $run->bindParam(1,$id);
              $run->bindParam(2,$comp_type);
              $run->bindParam(3,$comp_name);
              $run->bindParam(4,$n_comp);
              $run->bindParam(5,$exp_return_date);
              $run->bindParam(6,$now);

              if($run->execute()!=null){

                $del_temp_req = "DELETE FROM omg2k17_kit WHERE id= ? ";
                $del_kit = $con->prepare($del_temp_req);
                $del_kit->bindParam(1,$id);
                
                if($del_kit->execute()){
                  echo "Components Were Returned";
                }

              }
      }
    }
?>