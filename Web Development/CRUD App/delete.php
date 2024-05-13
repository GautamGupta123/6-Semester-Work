<?php
       include "config.php";
       if(isset($_GET['delall'])){
        $sql="DELETE FROM `studinfo`";
        $res=mysqli_query($con,$sql);
        if($res){
          header('location:app.php');
        }
       }
?>
<?php
       include "config.php";
       if(isset($_GET['delid'])){
          $id=$_GET['delid'];
          $sql="DELETE FROM `studinfo` WHERE ID=$id";
          $res=mysqli_query($con,$sql);
          if($res){
            header('location:app.php');
          }
          else{
            die(mysqli_error($con));
          }
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    
</body>
</html>