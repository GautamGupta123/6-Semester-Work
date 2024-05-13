<?php
       include "config.php";
    if(isset($_GET['upid'])){
       $sql="SELECT * FROM `studinfo` WHERE Id=$_GET[upid]";
       $res=mysqli_query($con,$sql);
       $row=mysqli_fetch_assoc($res);
       $name=$row['SName'];
       $id=$row['Id'];
       $course=$row['Course'];
       $sec=$row['Section'];
    }
    if(isset($_POST['submit'])){
        $name=$_POST['sname'];
        $id1=$_POST['sid'];
        $course=$_POST['scourse'];
        $sec=$_POST['ssec'];
        $sql="UPDATE `studinfo` SET SName='$name',Id=$id1,Course='$course',Section='$sec' WHERE Id=$id1";
        $res=mysqli_query($con,$sql);
        if($res){
             header('location:app.php');
        }
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <h1 class="edit1">Edit your Data</h1>
    <form action="update.php" method="post" class="editing">
        <input type="text" name="sname" placeholder="Enter your name" class="boxes" value="<?php echo $name; ?>" required>
        <br><br>
        <input type="number" name="sid" placeholder="Enter your id" class="boxes" value="<?php echo $id; ?>"  required>
        <br><br>
        <input type="text" name="scourse" placeholder="Enter your course" class="boxes" value="<?php echo $course; ?>" required>
        <br><br>
        <input type="section" name="ssec" placeholder="Enter your section" class="boxes" value="<?php echo $sec; ?>" required>
        <br><br>
        <button name="submit" class="sub">Save</button>
    </form>
    <a href="app.php"><button class="sub1">back</button></a>
</body>
</html>