    $(document).ready(function(){

      function get_notifications(){

          $.ajax({
                
                type: "GET",
                url: "get/notifications.php",
                data: {},
                cache: false,
                success: function(data){
                  $("#notifications").html(data);
                  

                }
              });
      }

      get_notifications();

      function get_notifications_count(){

          $.ajax({
                
                type: "GET",
                url: "get/notifications_count.php",
                data: {},
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
    