<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>OMG - 2K17</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="assets/signup-form.css" type="text/css" />
	      <link href="user/css/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
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
      <a class="navbar-brand" href="index.php">OMG - 2K17</a>
    </div>
  </div>
</nav>
	<div class="container">
    	<div class="signup-form-container">
    		<form method="post" role="form" action="#" id="register-form" autocomplete="off">
         		<div class="form-header">
         			<h2 class="form-title"><i class="fa fa-user"></i><a href="signup.php"> Sign Up</h2>
					<div class="pull-right">
             			<h3 class="form-title"><a href="index.php">Sign In</a></span></h3>
 			        </div>              
	    	    </div>  
         		<div>
         		<div class="form-body">
         			<div class="panel panel-primary">
         				<div class="panel-heading">Personal Details</div>
         				<div class="panel-body">
		         			<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-user"></span>
		                   			</div>
		                   			<input name="fullname" id="fullname" type="text" class="form-control" placeholder="Full Name" minlength="5" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>

		         	  		<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-user"></span>
		                   			</div>
		                   			<input name="username" id="username" type="text" class="form-control" placeholder="Username" minlength="6" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>

		              		<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-phone"></span>
		                   			</div>
		                   			<input name="phone" id="phone" type="text" class="form-control" placeholder="Mobile Number" minlength="10" maxlength="10"  pattern="[789][0-9]{9}" required="required">
		                   		</div> 
		                   		<span class="help-block" id="error"></span>                     
		              		</div>
		             
		              		<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-envelope"></span>
		                   			</div>
		                   			<input name="email" id="email" type="text" class="form-control" placeholder="Email">
		                   		</div> 
		                   		<span class="help-block" id="error"></span>                     
		              		</div>
		                        
		              		<div class="row">    
		                   		<div class="form-group col-lg-6">
		                        	<div class="input-group">
		                        		<div class="input-group-addon">
		                        			<span class="glyphicon glyphicon-lock"></span>
		                        		</div>
		                        		<input name="password" id="password" type="password" class="form-control" placeholder="Password">
		                        	</div>  
		                        	<span class="help-block" id="error"></span>                    
		                   		</div>
		                            
		                   	<div class="form-group col-lg-6">
		                    	<div class="input-group">
		                        	<div class="input-group-addon">
		                        		<span class="glyphicon glyphicon-lock"></span>
		                        	</div>
		                        	<input name="cpassword" type="password" class="form-control" placeholder="Retype Password">
		                        </div>  
		                        <span class="help-block" id="error"></span>                    
		                   </div>
		                </div>
		                <div class="form-group">
		                  <div class="input-group">
		                   	<div class="input-group-addon">
		                   		<span class="glyphicon glyphicon-calendar"></span>
		                   	</div>
		                   	<input name="dob" id="dob" type="date" max="2002-12-31"  class="form-control" placeholder="Date of Birth">
		                   </div> 
		                   <span class="help-block" id="error"></span>                     
		              </div>
		            </div>
                </div>

                <div class="panel panel-primary">
                	<div class="panel-heading">
                		Team Details
                	</div>
                	<div class="panel-body">
                		<div class="form-group">
		                   	<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-flag"></span>
		                   			</div>
		                   			<input name="team_id" id="team_id" type="text" class="form-control" placeholder="Team Id" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              	</div>
		              	 <div class="form-group">
		              		<div class="input-group">
		                   		<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-user"></span>
		                   			</div>
		                   			<input name="member_id" id="member_id" type="text" class="form-control" placeholder="Member Id" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>
		              		  <div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-pencil"></span>
		                   			</div>
		                   			<input name="team_name" id="team_name" type="text" class="form-control" placeholder="Team Name" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>
		              		<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-console"></span>
		                   			</div>
		                   			<select id="role" class="form-control" required="required">
		                   				<option value="" disabled selected>Please Select role</option>
		                   				<option value="Android Developer">Android Developer</option>
		                   				<option value="Hardware Engineer">Hardware Engineer</option>
		                   				<option value="Web Developer">Web Developer</option>
		                   				<option value="Cloud Developer">Cloud Developer</option>
		                   				<option value="IoT Developer">IoT Developer</option>
		                   				<option value="AR / VR Developer">AR / VR Developer</option>
		                   				<option value="Embedded Developer">Embedded Developer</option>
		                   				<option value="Programmer">Programmer</option>
		                   				<option value="Front-end Developer">Front-end Developer</option>
		                   				<option value="Back-end Developer">Back-end Developer</option>
		                   				<option value="Fullstack Developer">Fullstack Developer</option>
		                   				<option value="Other">Other</option>
		                   			</select>
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>
                	</div>
                </div>
		<!--
                <div class="panel panel-primary">
                	<div class="panel-heading">
                		Idea Details
                	</div>
                	<div class="panel-body">
                		<div class="form-group">
		                   	<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-comment"></span>
		                   			</div>
		                   			<input name="idea_title" id="idea_title" type="text" class="form-control" placeholder="Idea Title" required="required">
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              	</div>
		              		<div class="form-group">
		                   		<div class="input-group">
		                   			<div class="input-group-addon">
		                   				<span class="glyphicon glyphicon-wrench"></span>
		                   			</div>
		                   			<select id="idea_domain" class="form-control" required="required">
		                   				<option value="" disabled selected>Please Select Idea Domain</option>
		                   				<option value="Android">Android</option>
		                   				<option value="Agriculture">Agriculture</option>
		                   				<option value="Data Analytics">Data Analytics</option>
		                   				<option value="Cloud">Cloud</option>
		                   				<option value="IoT">IoT</option>
		                   				<option value="AR / VR">AR / VR </option>
		                   				<option value="Embedded ">Embedded</option>
		                   				<option value="Algorithms">Algorithms</option>
		                   				<option value="Health Care">Health Care</option>
		                   				<option value="Smart City / Village">Smart City / Village </option>
		                   				<option value="Robotics">Robotics</option>
		                   				<option value="Renewable Energy">Renewable Energy</option>
		                   				<option value="Web">Web</option>
		                   				<option value="Transportation">Transportation</option>
		                   				<option value="Big Data">Big Data</option>
		                   				<option value="Cyber Security">Cyber Security</option>
		                   			</select>
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
		              		</div>
		              	<div class="form-group">
		                   			<textarea class="form-control" id="idea_description" placeholder="Description" required="required">
		                   				
		                   			</textarea>
				      	          </div>
		          	         	<span class="help-block" id="error"></span>
                	</div>
                </div>        -->
                
            <div class="form-footer">
                 <button type="button" id="signup" class="btn btn-info">
                 <span class="glyphicon glyphicon-log-in"></span> Sign Me Up !
                 </button>
            </div>


            </form>
            
           </div>

	</div>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery-1.11.2.min.js"></script>
    <script src="assets/jquery.validate.min.js"></script>
    <script src="assets/register.js"></script>
    <script src="user/css/sweetalert/jquery.sweet-alert.custom.js"></script>
    <script src="user/css/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){    
    		$("#signup").click(function(){
	      	       	 $("#signup").prop('disabled', true);

    			var fullname= $("#fullname").val();
    			var username= $("#username").val();
    			var phone= $("#phone").val();
    			var email= $("#email").val();
    			var password= $("#password").val();
    			var dob= $("#dob").val();
    			var team_id= $("#team_id").val();
    			var member_id= $("#member_id").val();
    			var team_name= $("#team_name").val();
    			var role= $("#role").val();
    			var idea_title= $("#idea_title").val();
    			var idea_domain= $("#idea_domain").val();
    			var idea_description= $("#idea_description").val();
    			if(fullname==""||username==""||phone==""||email==""||password==""||dob==""||team_id==""||member_id==""||team_name==""||role==""||idea_title==""||idea_domain==""||idea_description==""){

    				swal("Please fill all the fields!", "Fields should not be empty!!", "warning");
    							      $("#signup").prop('disabled', false);

    			}
    			else{
    			var dataString = "fullname="+fullname+"&username="+username+"&phone="+phone+"&email="+email+"&password="+password+"&dob="+dob+"&team_id="+team_id+"&member_id="+member_id+"&team_name="+team_name+"&role="+role+"&idea_title="+idea_title+"&idea_domain="+idea_domain+"&idea_description="+idea_description;

    			$.ajax({
			      type: "POST",
			      url: "signup_valid.php",
			      data: dataString,
			      cache: false,
			      success: function(data){

			      	if(data==="success"){
			      	$('#register-form')[0].reset();
	      			 setTimeout(' window.location.href = "index.php"; ',4000);


			      		swal("Cool!", "A verification email were sent to "+email+", please confirm to continue! ", "success");
			      	}
			      	else{
			      					      $("#signup").prop('disabled', false);

			      		swal("Error!", email+",Email already registered Please Login to continue", "error");

			      	}
			      $("#signup").prop('disabled', false);
			      }
		      });
    		}
    		});
    	});
    </script>
</body>
</html>
