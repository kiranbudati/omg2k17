$(document).ready(function (){
	
	function get_tasks(){
		
		$.ajax({
			url:"../mentor/get/get_tasks.php",
			method:"GET",
				success:function(data){
					$("#get_tasks").html(data);
					console.log(data);
				}

		});
	}
	
	get_tasks();
	
	function get_team_tasks(){
		$.ajax({
			url:"../mentor/get/get_team_tasks.php",
			method:"GET",
				success:function(data){
					$("#team_tasks").html(data);
				}

		});
	}
	
	get_team_tasks();
	
	setInterval(function(){
		get_tasks();
		get_team_tasks();		

	},3000);

});

