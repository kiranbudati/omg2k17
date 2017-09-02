// JavaScript Validation For Registration Page

$('document').ready(function()
{ 		 		
		 // name validation
		  var nameregex = /^[a-zA-Z ]+$/;
		 
		 $.validator.addMethod("validname", function( value, element ) {
		     return this.optional( element ) || nameregex.test( value );
		 }); 
		 
		 // valid email pattern
		 var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 
		 $.validator.addMethod("validemail", function( value, element ) {
		     return this.optional( element ) || eregex.test( value );
		 });
		 
		 var phoneregex = /^([789][0-9]{9})+$/;
		 
		 $.validator.addMethod("validphone", function( value, element ) {
		     return this.optional( element ) || phoneregex.test( value );
		 });

		 $("#register-form").validate({
					
		  rules:
		  {
				fullname: {
					required: true,
					validname: true,
					minlength: 4
				},
				username: {
					required: true,
					validname: true,
					minlength: 4
				},
				email: {
					required: true,
					validemail: true
				},
				password: {
					required: true,
					minlength: 8,
					maxlength: 15
				},
				cpassword: {
					required: true,
					equalTo: '#password'
				},
				phone:{
					required:true,
					minlength:10,
					validphone :true,
					maxlength:10
				},
				dob:{
					required:true,
				},
				team_id:{
					required:true,
					validname: true

				},
				member_id:{
					required:true,
					validname: true
				},
				team_name:{
					required:true,
					validname: true
				},
				role:{
					required:true,
					validname: true
				},
				project_title:{
					required:true,
					validname: true,
					minlength:5
				},
				domain:{
					required:true,
					validname: true
				},
				project_description:{
					required:true,
					minlength:30,
					validname: true
				}
		   },
		   messages:
		   {
		   		fullname: {
					required: "Please Enter full Name",
					validname: "Name must contain only alphabets and space",
					minlength: "Your Name is Too Short"
					  },

				username: {
					required: "Please Enter User Name",
					validname: "Name must contain only alphabets and space",
					minlength: "Your Name is Too Short"
					  },
			    email: {
					  required: "Please Enter Email Address",
					  validemail: "Enter Valid Email Address"
					   },
				password:{
					required: "Please Enter Password",
					minlength: "Password at least have 8 characters"
					},
				cpassword:{
					required: "Please Retype your Password",
					equalTo: "Password Did not Match !"
					},
				phone:{
					required: "Please Enter Password",
					minlength: "Phone number must be 10 digits",
					validphone:"Please Ennter only number"
				},
				dob:{
					required: "Please Enter Date of Birth",
				},
				team_id:{
					required: "Please Enter Team Id",
				},
				member_id:{
					required: "Please Enter Member Id",
				},
				team_name:{
					required: "Please Enter Team Name",
				},
				role:{
					required: "Please Select Role",
				},
				project_title:{
					required: "Please Enter Project Title",
				},
				domain:{
					required: "Please Select Domain",
				},
				project_description:{
					required: "Please Enter Description",
				},

		   },
		   errorPlacement : function(error, element) {
			  $(element).closest('.form-group').find('.help-block').html(error.html());
		   },
		   highlight : function(element) {
			  $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
		   },
		   unhighlight: function(element, errorClass, validClass) {
			  $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			  $(element).closest('.form-group').find('.help-block').html('');
		   },
	     return false;

	
});