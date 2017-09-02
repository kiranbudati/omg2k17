    /**** First Name ****/

    $(document).ready(function() {
        $('#full_name_edit').click(function(){
          if($('#full_name1').css('display')!='none'){
              $('#full_name2').show();
              $('#full_name_save').show();
              $('#full_name1').hide();
              $('#full_name_edit').hide();
          }
          else if($('#full_name2').css('display')!='none'){
          $('#full_name2').hide();
          $('#full_name_save').hide();
          $('#full_name1').show();
        }
        });
    });

    function save_fullname(){
          var fullname = $('#fullname').val();

          if(fullname==0){

            alert("Full Name Should not be empty");

          }
          else{
          var dataString = 'fullname='+fullname;

          var user_email = $('#user_email').val();
          var userData = 'user_email='+user_email;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#full_name2').hide();
                $('#full_name_edit').show();
                $('#full_name_save').hide();
                $('#full_name1').show();
                  location.reload();

            }
          });
      }
}

/**** User Name ****/

    $(document).ready(function() {
        $('#user_name_edit').click(function(){
          if($('#user_name1').css('display')!='none'){
              $('#user_name2').show();
              $('#user_name_save').show();
              $('#user_name1').hide();
              $('#user_name_edit').hide();
          }
          else if($('#user_name2').css('display')!='none'){
          $('#user_name2').hide();
          $('#user_name_save').hide();
          $('#user_name1').show();
        }
        });
    });

    function save_username(){
          var username = $('#username').val();

          if(username==0){

            alert("User Name Should not be empty");

          }
          else{
          var dataString = 'username='+username;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#user_name2').hide();
                $('#user_name_edit').show();
                $('#user_name_save').hide();
                $('#user_name1').show();
                    location.reload();
            }
          });
      }
}

/**** Phone Number ****/

    $(document).ready(function() {
        $('#phone_edit').click(function(){
          if($('#phone1').css('display')!='none'){
              $('#phone2').show();
              $('#phone_save').show();
              $('#phone1').hide();
              $('#phone_edit').hide();
          }
          else if($('#phone2').css('display')!='none'){
          $('#phone2').hide();
          $('#phone_save').hide();
          $('#phone1').show();
        }
        });
    });

    function save_phone(){
          var phone = $('#phone').val();

          if(phone==0){

            alert("Phone number Should not be empty");

          }
          else{
          var dataString = 'phone='+phone;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#phone2').hide();
                $('#phone_edit').show();
                $('#phone_save').hide();
                $('#phone1').show();
                    location.reload();
            }
          });
      }
}

/**** Gender ****/

    $(document).ready(function() {
        $('#gender_edit').click(function(){
          if($('#gender1').css('display')!='none'){
              $('#gender2').show();
              $('#gender_save').show();
              $('#gender1').hide();
              $('#gender_edit').hide();
          }
          else if($('#gender2').css('display')!='none'){
          $('#gender2').hide();
          $('#gender_save').hide();
          $('#gender1').show();
        }
        });
    });

    function save_gender(){
          var gender = $('#gender').val();

          if(gender==0){

            alert("Gender Should not be empty");

          }
          else{
          var dataString = 'gender='+gender;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#gender2').hide();
                $('#gender_edit').show();
                $('#gender_save').hide();
                $('#gender1').show();
                    location.reload();
            }
          });
      }
}

/**** Address ****/

    $(document).ready(function() {
        $('#address_edit').click(function(){
          if($('#address1').css('display')!='none'){
              $('#address2').show();
              $('#address_save').show();
              $('#address1').hide();
              $('#address_edit').hide();
          }
          else if($('#address2').css('display')!='none'){
          $('#address2').hide();
          $('#address_save').hide();
          $('#address1').show();
        }
        });
    });

    function save_address(){
          var address = $('#address').val();

          if(address==0){

            alert("Address Should not be empty");

          }
          else{
            
          var dataString = 'address='+address;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#address2').hide();
                $('#address_edit').show();
                $('#address_save').hide();
                $('#address1').show();
                    location.reload();
            }
          });
      }
}

/**** College ****/

    $(document).ready(function() {
        $('#college_edit').click(function(){
          if($('#college1').css('display')!='none'){
              $('#college2').show();
              $('#college_save').show();
              $('#college1').hide();
              $('#college_edit').hide();
          }
          else if($('#college2').css('display')!='none'){
          $('#college2').hide();
          $('#college_save').hide();
          $('#college1').show();
        }
        });
    });

    function save_college(){

          var college = $('#college').val();
          if(college==0){

            alert("college Should not be empty");

          }
          else{
            
          var dataString = 'college='+college;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#college2').hide();
                $('#college_edit').show();
                $('#college_save').hide();
                $('#college1').show();
                    location.reload();
            }
          });
      }
}
/**** branch ****/

    $(document).ready(function() {
        $('#branch_edit').click(function(){
          if($('#branch1').css('display')!='none'){
              $('#branch2').show();
              $('#branch_save').show();
              $('#branch1').hide();
              $('#branch_edit').hide();
          }
          else if($('#branch2').css('display')!='none'){
          $('#branch2').hide();
          $('#branch_save').hide();
          $('#branch1').show();
        }
        });
    });

    function save_branch(){

          var branch = $('#branch').val();
          if(branch==0){

            alert("branch Should not be empty");

          }
          else{
            
          var dataString = 'branch='+branch;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#branch2').hide();
                $('#branch_edit').show();
                $('#branch_save').hide();
                $('#branch1').show();
                    location.reload();
            }
          });
      }
}
/**** year ****/

    $(document).ready(function() {
        $('#year_edit').click(function(){
          if($('#year1').css('display')!='none'){
              $('#year2').show();
              $('#year_save').show();
              $('#year1').hide();
              $('#year_edit').hide();
          }
          else if($('#year2').css('display')!='none'){
          $('#year2').hide();
          $('#year_save').hide();
          $('#year1').show();
        }
        });
    });

    function save_year(){

          var year = $('#year').val();
          if(year==0){

            alert("year Should not be empty");

          }
          else{
            
          var dataString = 'year='+year;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#year2').hide();
                $('#year_edit').show();
                $('#year_save').hide();
                $('#year1').show();
                    location.reload();
            }
          });
      }
}
/**** team_id ****/

    $(document).ready(function() {
        $('#team_id_edit').click(function(){
          if($('#team_id1').css('display')!='none'){
              $('#team_id2').show();
              $('#team_id_save').show();
              $('#team_id1').hide();
              $('#team_id_edit').hide();
          }
          else if($('#team_id2').css('display')!='none'){
          $('#team_id2').hide();
          $('#team_id_save').hide();
          $('#team_id1').show();
        }
        });
    });

    function save_team_id(){

          var team_id = $('#team_id').val();
          if(team_id==0){

            alert("team_id Should not be empty");

          }
          else{
            
          var dataString = 'team_id='+team_id;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#team_id2').hide();
                $('#team_id_edit').show();
                $('#team_id_save').hide();
                $('#team_id1').show();
                    location.reload();
            }
          });
      }  
}

/**** team_name ****/

    $(document).ready(function() {
        $('#team_name_edit').click(function(){
          if($('#team_name1').css('display')!='none'){
              $('#team_name2').show();
              $('#team_name_save').show();
              $('#team_name1').hide();
              $('#team_name_edit').hide();
          }
          else if($('#team_name2').css('display')!='none'){
          $('#team_name2').hide();
          $('#team_name_save').hide();
          $('#team_name1').show();
        }
        });
    });

    function save_team_name(){

          var team_name = $('#team_name').val();
          if(team_name==0){

            alert("team_name Should not be empty");

          }
          else{
            
          var dataString = 'team_name='+team_name;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#team_name2').hide();
                $('#team_name_edit').show();
                $('#team_name_save').hide();
                $('#team_name1').show();
                    location.reload();
            }
          });
      }
}

/**** team_role ****/

    $(document).ready(function() {
        $('#team_role_edit').click(function(){
          if($('#team_role1').css('display')!='none'){
              $('#team_role2').show();
              $('#team_role_save').show();
              $('#team_role1').hide();
              $('#team_role_edit').hide();
          }
          else if($('#team_role2').css('display')!='none'){
          $('#team_role2').hide();
          $('#team_role_save').hide();
          $('#team_role1').show();
        }
        });
    });

    function save_team_role(){

          var team_role = $('#team_role').val();
          if(team_role==0){

            alert("team_role Should not be empty");

          }
          else{
            
          var dataString = 'team_role='+team_role;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#team_role2').hide();
                $('#team_role_edit').show();
                $('#team_role_save').hide();
                $('#team_role1').show();
                    location.reload();
            }
          });
      }
}
/**** project_name ****/

    $(document).ready(function() {
        $('#project_name_edit').click(function(){
          if($('#project_name1').css('display')!='none'){
              $('#project_name2').show();
              $('#project_name_save').show();
              $('#project_name1').hide();
              $('#project_name_edit').hide();
          }
          else if($('#project_name2').css('display')!='none'){
          $('#project_name2').hide();
          $('#project_name_save').hide();
          $('#project_name1').show();
        }
        });
    });

    function save_project_name(){

          var project_name = $('#project_name').val();
          if(project_name==0){

            alert("project_name Should not be empty");

          }
          else{
            
          var dataString = 'project_name='+project_name;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#project_name2').hide();
                $('#project_name_edit').show();
                $('#project_name_save').hide();
                $('#project_name1').show();
                    location.reload();
            }
          });
      }
}
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
/**** occupation ****/

    $(document).ready(function() {
        $('#occupation_edit').click(function(){
          if($('#occupation1').css('display')!='none'){
              $('#occupation2').show();
              $('#occupation_save').show();
              $('#occupation1').hide();
              $('#occupation_edit').hide();
          }
          else if($('#occupation2').css('display')!='none'){
          $('#occupation2').hide();
          $('#occupation_save').hide();
          $('#occupation1').show();
        }
        });
    });

    function save_occupation(){

          var occupation = $('#occupation').val();
          if(occupation==0){

            alert("occupation Should not be empty");

          }
          else{
            
          var dataString = 'occupation='+occupation;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#occupation2').hide();
                $('#occupation_edit').show();
                $('#occupation_save').hide();
                $('#occupation1').show();
                    location.reload();
            }
          });
      }
}
/**** skills ****/

    $(document).ready(function() {
        $('#skills_edit').click(function(){
          if($('#skills1').css('display')!='none'){
              $('#skills2').show();
              $('#skills_save').show();
              $('#skills1').hide();
              $('#skills_edit').hide();
          }
          else if($('#skills2').css('display')!='none'){
          $('#skills2').hide();
          $('#skills_save').hide();
          $('#skills1').show();
        }
        });
    });

    function save_skills(){

          var skills = $('#skills').val();
          if(skills==0){

            alert("skills Should not be empty");

          }
          else{
            
          var dataString = 'skills='+skills;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#skills2').hide();
                $('#skills_edit').show();
                $('#skills_save').hide();
                $('#skills1').show();
                    location.reload();
            }
          });
      }
}
/**** about_me ****/

    $(document).ready(function() {
        $('#about_me_edit').click(function(){
          if($('#about_me1').css('display')!='none'){
              $('#about_me2').show();
              $('#about_me_save').show();
              $('#about_me1').hide();
              $('#about_me_edit').hide();
          }
          else if($('#about_me2').css('display')!='none'){
          $('#about_me2').hide();
          $('#about_me_save').hide();
          $('#about_me1').show();
        }
        });
    });

    function save_about_me(){

          var about_me = $('#about_me').val();
          if(about_me==0){

            alert("about_me Should not be empty");

          }
          else{
            
          var dataString = 'about_me='+about_me;

          $.ajax({
            type : 'POST',
            data:dataString,
            url : 'profile_edit.php',
            success:function(){
                $('#about_me2').hide();
                $('#about_me_edit').show();
                $('#about_me_save').hide();
                $('#about_me1').show();
                    location.reload();
            }
          });
      }
}