<?php

// check if a file was submitted
if(isset($_FILES['userfile']))
{
	upload();
}

function upload() {
    include "../config.php";
    $maxsize = 2000000; //set to approx 2 MB

    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
                    	$user_email = isset($_POST['from_email']) ? $_POST['from_email'] : "";

                    
                    	$insert_image = "UPDATE omg2k17_userprofile SET profile_pic = ? WHERE email = ?";
			$update_image = $con->prepare($insert_image);
			$update_image->bindParam(1,$imgData);
			$update_image->bindParam(2,$user_email);
			$update_image->execute();
			
			     header('Content-Type: image/jpeg');
			echo file_get_contents($imgData);

	
                }
            }
            }
    }
}


?>
