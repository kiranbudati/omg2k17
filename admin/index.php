<?php session_start(); ?>

<?php
if(isset($_SESSION['admin_email'])){
header("location: dashboard.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>

   <script src="../user/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="../user/bootstrap/css/bootstrap.min.css">
  <script src="../user/bootstrap/js/bootstrap.min.js"></script>  
   
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <body>
    <div class="login">
      <center><div id="errMsg">
            <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>
        </div>
        <?php unset($_SESSION['errMsg']); ?></center>
        <div class="login-screen">
            <div class="app-title">
                <h1>Admin Login</h1>
            </div>
                <div class="login-form">
                    <form name="login" method="post" action="login_valid.php">
                    <div class="control-group">
                    <input type="text" class="login-field" id="email" name="email" placeholder="Email" id="login-name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                    <input type="password" class="login-field" id="password" name="password" placeholder="password" id="login-pass">
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>

                    <input type="submit" class="btn btn-primary btn-large btn-block" name="submit">
                </div>
            </form>
        </div>
    </div>
</body>
  
  
</body>
</html>
