$(document).ready(function(){
  function send_notify(myId){
	console.log(myId.id);
  	var gotId= myId.id;

    var dataString = 'gotId='+gotId;

    $.ajax({
                
        type: "POST",
        url: "send/send_notifications.php",
        data: dataString,
        cache: false,
        success: function(){
        }
    });

  }
});