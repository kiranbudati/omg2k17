$(document).ready(function (){

	function load_notification(view = '')
	{
		$.ajax({
			url:"../admin/notifications/notifications.php",
			method:"POST",
			data:{view:view},
			dataType:"json",
			success:function(data){
				$('.menu').html(data.notification);
				$
				console.log(data.unseen_notification);
			}

		});
	}
	load_notification();

	setInterval(function(){
		load_notification();
	},5000);
});