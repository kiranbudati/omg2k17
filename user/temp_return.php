<?php 
	session_start();	

	include('../config.php');

	$comp_id = $_POST['comp_id'];

	$query = "SELECT * FROM omg2k17_kit WHERE id = $comp_id";
	$stmt = $con->prepare($query);
	$stmt->execute();
	$row = $stmt->fetchAll();
	
	foreach ($row as $fet) {

		echo '
            <div class="box" id="ret_cmp">
              <div class="box-header with-border">
                <h3 class="box-title">Return Components</h3>
              </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Id</th>  
                      <th>Component Type</th>
                      <th>Component Name</th>
                      <th>Number of Components</th>
                      <th>Expected Return Date</th>
                      <th>Return</th>
                    </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>'.$fet['id'].'</td>
                        <td >'.$fet['comp_type'].'</td>
                          <input type="hidden" id="co_id" value="'.$fet['id'].'">
                        <td>'.$fet['comp_name'].'</td>
                        <td><input type="number" min="1" max="'.$fet['num_comp'].'"  class="form-control" value="'.$fet['num_comp'].'" name="num_comp" id="num_comp" required></td>
                        <td>'.$fet['exp_return_date'].'</td>
                        <td id="'.$fet['id'].'"><button class="btn btn-primary"  value="'.$fet['id'].'" id="return" >Return</button></td>
                      </tr>
                    </tbody>
                </table>
              </div>
          ';
	}
	
?>
