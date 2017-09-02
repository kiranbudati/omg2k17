$(document).ready(function (){
	
	function maker_tasks(){
		
		$.ajax({
			url:"../user/dashboard/maker_tasks.php",
			method:"GET",
				success:function(data){
					$("#maker_tasks").html(data);
				}

		});
	}
	maker_tasks();

	function maker_tasks_ongoing(){
		
		$.ajax({
			url:"../user/dashboard/maker_tasks_ongoing.php",
			method:"GET",
				success:function(data){
					$("#maker_tasks_ongoing").html(data);
				}

		});
	}
	maker_tasks_ongoing();

	function maker_tasks_ongoing(){
		
		$.ajax({
			url:"../user/dashboard/maker_tasks_ongoing.php",
			method:"GET",
				success:function(data){
					$("#maker_tasks_ongoing").html(data);

				}

		});
	}
	maker_tasks_ongoing();
	
	function maker_tasks_completed(){
		
		$.ajax({
			url:"../user/dashboard/maker_tasks_completed.php",
			method:"GET",
				success:function(data){
					$("#maker_tasks_completed").html(data);
				}

		});
	}

	function maker_questions(){
		
		$.ajax({
			url:"../user/dashboard/d_questions.php",
			method:"GET",
				success:function(data){
				var ques = data.split("abcdefg");
				  $("#my_recent_questions").html(ques[0]);
				  $("#total_questions").html(ques[1]);
				  $("#domain_recent_questions").html(ques[2]);
				  $("#total_tags_questions").html(ques[3]);
				  $("#recent_comments").html(ques[4]);


				}

		});
	}


	maker_questions();

	function help_desk(){
		
		$.ajax({
			url:"../user/dashboard/get_help_desk.php",
			method:"GET",
				success:function(data){
					$("#help_desk").html(data);
				}

		});
	}
	
	help_desk();

	function workshops(){
		$.ajax({
			url:"../user/dashboard/get_workshops.php",
			method:"GET",
				success:function(data){
					$("#workshops").html(data);
				}

		});
	}
	
	workshops();
	
	function startup_talks(){
		$.ajax({
			url:"../user/dashboard/get_startup_talks.php",
			method:"GET",
				success:function(data){
					$("#startup_talks").html(data);
					
				}

		});
	}
	
	startup_talks();
		

	setInterval(function(){
		maker_questions();
		maker_tasks();
		maker_tasks_completed();
		maker_tasks_ongoing();
		help_desk();
		workshops();
		startup_talks();	
	},3000);
});