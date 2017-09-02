$(document).ready(function (){
	
	function get_tasks(){
		
		$.ajax({
			url:"../user/get/get_tasks.php",
			method:"GET",
				success:function(data){
					$("#get_tasks").html(data);
				}

		});
	}
	
	get_tasks();

	function get_mentor_tasks(){
		$.ajax({
			url:"../user/get/get_mentor_tasks.php",
			method:"GET",
				success:function(data){
					$("#mentor_tasks").html(data);
				}

		});
	}
	
	get_mentor_tasks();
	
	function get_team_tasks(){
		$.ajax({
			url:"../user/get/get_team_tasks.php",
			method:"GET",
				success:function(data){
					$("#team_tasks").html(data);
				}

		});
	}
	
	get_team_tasks();
	
	function get_comments(){
		$.ajax({
			url:"../user/get/get_comments.php",
			method:"GET",
				success:function(data){
					$("#get_comments").html(data);
				}

		});
	}
	
	get_comments();
	

	setInterval(function(){
		get_tasks();
		get_mentor_tasks();
		get_team_tasks();	
			get_comments();	

	},3000);

});

