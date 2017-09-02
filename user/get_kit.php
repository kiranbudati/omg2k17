<?php 

echo '<div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Kit</h3>
            </div>
            <!-- /.box-header -->
            <form name="req_kit" method="POST">
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Type of the Component</th> 
                  <th>Name of the Component</th>
                  <th>Number of Components</th>
                  <th>Expected Return Date</th>
                </tr>
            <?php 

              include("../config.php");

                $kit = "SELECT * FROM omg2k17_temp_kit WHERE user_email = ?";

                $f_kit = $con->prepare($kit);

                $f_kit->bindParam(1,$_SESSION["user_email"]);
                $f_kit->execute();

                $num = $f_kit->rowCount();

                  if($num>0){
                    $row = $f_kit->fetchAll();

                    foreach ($row as $kit_d):
                                <tr class="active">
                                  <td>'.$kit_d['comp_type'].'</td>
                                  <td>'.$kit_d['comp_name'].'</td>
                                  <td>'.$kit_d['num_comp'].'</td>
                                  <td>'.$kit_d['exp_return_date'].'</td>
                                </tr>
                    endforeach;
                  }
                  else{
                    echo "No Components Added yet";
                  }
            ?>
            </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <button type="submit" name="request_kit" class="btn btn-primary  pull-right">Request Kit</button>
            </div>
          </div>
          </form>
        </div>
      </div>';
?>