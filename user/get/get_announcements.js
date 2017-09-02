$(document).ready(function (){
	
	function help_desk(){
		
		$.ajax({
			url:"../user/get/get_help_desk.php",
			method:"GET",
				success:function(data){
					$("#help_desk").html(data);
				}

		});
	}
	
	help_desk();

	function workshops(){
		$.ajax({
			url:"../user/get/get_workshops.php",
			method:"GET",
				success:function(data){
					$("#workshops").html(data);
				}

		});
	}
	
	workshops();
	
	function startup_talks(){
		$.ajax({
			url:"../user/get/get_startup_talks.php",
			method:"GET",
				success:function(data){
					$("#team_tasks").html(data);
				}

		});
	}
	
	startup_talks();
		

	setInterval(function(){
		help_desk();
		workshops();
		startup_talks();	

	},3000);

});

