<?php 
  ini_set('display_errors', 1 );
  error_reporting(E_ALL);
  session_start();

?>
<?php
include 'config.php';
 
// check first if record exists
$query = "SELECT id FROM omg2k17_users WHERE verification_code = ? and verified = '0'";
$stmt = $con->prepare( $query );
$stmt->bindParam(1, $_GET['code']);
 
if($stmt->execute()!=null){
 
    // update the 'verified' field, from 0 to 1 (unverified to verified)
    $query = "UPDATE omg2k17_users
                set verified = '1'
                where verification_code = :verification_code";
 
    $stmt = $con->prepare($query);
    $stmt->bindParam(':verification_code', $_GET['code']);
 
    if($stmt->execute()){
	header('Location: index.php?confirm=success');

    }else{
	header('Location: index.php');
    }
 
}else{
    // tell the user he should not be in this page
    echo "<div>We can't find your verification code.</div>";
            print_r($stmt->errorInfo());

}
?>
