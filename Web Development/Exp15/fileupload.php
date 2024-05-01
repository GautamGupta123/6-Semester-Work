<?php
   if(isset($_POST['upload'])){
     $filename=$_FILES['file']['name'];
     $fileType=$_FILES['file']['type'];
     $filesize=$_FILES['file']['size'];
     $filetemp=$_FILES['file']['tmp_name'];
     if(is_uploaded_file($filetemp)){
        if($filesize<2097152){
            if($fileType=='image/jpeg'){
              if(move_uploaded_file($filetemp,"upload/$filename")){
                echo "File uploaded successfully";
              }
              else{
                echo "file upload failed";
              }
            }
            else{
                echo "Please insert only image files";
            }
        }
        else{
            echo "Please select file less than 2MB";
        }
     }
     else{
        echo "No file is selected";
     }
   }
   else{
    echo "Please select a file";
   }
?>