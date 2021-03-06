<?php 
  ini_set('display_errors', 1 );
  error_reporting(E_ALL);
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>OMG - 2K17</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="../assets/signup-form.css" type="text/css" />
  <link href="css/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">OMG - 2K17</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="signup-form-container">
        <form method="post" role="form" action="#" id="register-form" autocomplete="off">
            <div class="form-header">
              <h2 class="form-title"><i class="fa fa-user"></i> <a href=""> Forgot Password</a></h2>              
            </div>  
            
            <div class="form-body">
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                          <span class="glyphicon glyphicon-envelope"></span>
                        </div>
                        <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                    </div> 
                    <span class="help-block" id="error"></span>                     
                </div>
                <h4 class="pull-right"><a href="index.php">Login</a></h4>

             <div class="form-footer">
                   <button type="button" id="reset" class="btn btn-info">
                   <span class="glyphicon glyphicon-log-in"></span> Reset
                   </button>
              </div>
            </form>
            
        </div>

  </div>
    
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/jquery-1.11.2.min.js"></script>
    <script src="../assets/jquery.validate.min.js"></script>
    <script src="css/sweetalert/jquery.sweet-alert.custom.js"></script>
    <script src="css/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){    

       $("#reset").click(function(){
         
          var email = $("#email").val();
          var dataString = 'email='+email;

          if(email==""){
          	swal("Email is empty!","Email should not be empty", "warning");
          }
          else{
          $.ajax({
          type: "POST",
          url: "forgot_valid.php",
          data: dataString,
          cache: false,
          success: function(data){
            if(data=="Email Sent"){
              swal("Cool!", "A Password rest link sent to "+email +", please reset to continue! ", "success");
            }
            else{
              swal("Error!", "Email not found!, please check email once / Please register to continue!! ", "error");

            }
          
          $("#email").val('');

          }
        });
        }
       });      
       
    });
    </script>

</body>
</html>
