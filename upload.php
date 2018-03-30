<?php

$file_name = $_FILES['image_file']['name'];
$file_tmp =$_FILES['image_file']['tmp_name'];
   
if(isset($_POST["submit"])) {
      if (move_uploaded_file($file_tmp,"G:/".$file_name)) {
        echo "The file ". basename($file_name). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}    
 
?>
