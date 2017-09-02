<?php
   include('session.php');
?>

<?php 
    
    if(isset($_POST['submit'])){


        $post_tutorial = mysql_query("INSERT INTO tutorial_db(tutorial_title,tutorial_body) VALUES ('".$_POST["tutorial_name"]."','".$_POST["tutorial_body"]."')") or die(mysql_error());
        
       
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Learn Space</title>

        <link rel="stylesheet" href="css/editormd.css" />
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
        <script src="../js/index.js"></script>
        <script src="editer/editor.js"></script>
        <script>


            $(document).ready(function() {
                $("#txtEditor").Editor();
            });


            $('#editor').html($('#txtEditor').val());

    $('#submit').click(function () {
         $('#txtEditor').val($('#editor').html());
    });
        </script>
    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>
    <link rel="stylesheet" href="editer/editor.css" />
    <script type="text/javascript" src="editer/editor.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    hr{
      background-color: black;
    }
      .left_content{
        word-wrap: break-word;   
      }

      .col-md-3{
        word-wrap: break-word;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
        font-size: 25px;
    }
    a:hover{
        text-decoration: none;
    }
    video{
        width: 100px;
        height: auto;
    }

    .tut-1{
        margin: 20px;
        background-color: white;
        padding: 10px;
        height: 400px;
    }
    </style>
</head>

<body id="page-top" class="index" style="background-color: #eff0f3">
    <!-- Navigation -->
            
    <!--NavBar End -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">Learn Space</a>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="admin.php">Home</a>
                    </li>

                    <li class="page-scroll">
                        <a href="tutorials.php">Tutorials</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">Blog</a>
                    </li>
                    <li class="page-scroll">
                        <a href="comp.php">Components</a>
                    </li>
                   <li class="page-scroll">
                        <a href="#">Contact</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#">My Account</a>
                    </li>
                    <li class="page-scroll">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!--page content start -->
<br>
  <section id="search">
    <div class="row">
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
        <div class="col-md-3">
            <img src="images/1.png">    
        </div>
    </div>
  </section>    
  

</body>

</html>



<!--
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>>