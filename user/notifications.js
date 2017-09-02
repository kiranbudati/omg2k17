    $(document).ready(function(){

      function get_notifications(){
        var user_email = $("#user_email1").val();
        var dataString = 'user_email='+user_email;

          $.ajax({
                
                type: "GET",
                url: "get/notifications.php",
                data: dataString,
                cache: false,
                success: function(data){
                  $("#notifications").html(data);

                }
              });
      }

      get_notifications();

      function get_notifications_count(){
        var user_email = $("#user_email1").val();
        var dataString = 'user_email='+user_email;

          $.ajax({
                
                type: "GET",
                url: "get/notifications_count.php",
                data: dataString,
                cache: false,
                success: function(data){
                  $("#notifications_count").html(data);
                }
              });
      }

      get_notifications_count();

               setInterval(function(){
                get_notifications();
                get_notifications_count();
              
        },2000);
 

});
    