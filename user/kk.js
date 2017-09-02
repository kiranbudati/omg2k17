/**** project_description ****/

    $(document).ready(function() {
        $('#project_description_edit').click(function(){
          if($('#project_description1').css('display')!='none'){
              $('#project_description2').show();
              $('#project_description_save').show();
              $('#project_description1').hide();
              $('#project_description_edit').hide();
          }
          else if($('#project_description2').css('display')!='none'){
          $('#project_description2').hide();
          $('#project_description_save').hide();
          $('#project_description1').show();
        }
        });
    });

    function save_project_description(){

          var project_description = $('#project_description').val();
          if(project_description==0){

            alert("project_description Should not be empty");

          }
          else{
            
          var dataString = 'project_description='+project_description;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#project_description2').hide();
                $('#project_description_edit').show();
                $('#project_description_save').hide();
                $('#project_description1').show();
                    location.reload();
            }
          });
      }
}