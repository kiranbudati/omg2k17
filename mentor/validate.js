function forgotPassword(){
	var email= "email"; //$('#email').val();

	var dataString= 'email'+email;
	alert(email);
	$.ajax({
            type : 'POST',
            data : dataString,
            url : 'forgot_valid.php',
            success:function(data){
 
            }
          });
}