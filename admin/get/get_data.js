$(document).ready(function (){
	
	function get_mentors(){
		
		$.ajax({
			url:"../admin/get/get_mentors.php",
			method:"GET",
				success:function(data){
					$("#get_mentors").html(data);
				}

		});
	}
	
	get_mentors();

	function get_teams(){
		
		$.ajax({
			url:"../admin/get/get_teams.php",
			method:"GET",
				success:function(data){
					$("#get_teams").html(data);
				}

		});
	}
	
	get_teams();
	

	setInterval(function(){
		get_mentors();

				
	},3000);

});

