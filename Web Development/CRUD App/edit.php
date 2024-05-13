<?php
     include "config.php";
     if(isset($_POST['submit'])){
        $name=$_POST['sname'];
        $id=$_POST['sid'];
        $course=$_POST['scourse'];
        $sec=$_POST['ssec'];
        $sql2="SELECT * FROM `studinfo`";
        $res=mysqli_query($con,$sql2);
        $t=0;
        if(mysqli_num_rows($res)!=0){
            $sql1="SELECT Id FROM `studinfo` WHERE Id='$_POST[sid]'";
            $res1=mysqli_query($con,$sql1);
            if($res1){
                if(mysqli_num_rows($res1)>0){
                    $fetch=mysqli_fetch_assoc($res1);
                    if($fetch['Id']==$_POST['sid']){
                        $t++;
                        echo  "<script>alert('The entered id already exists');</script>";
                    }
                }
            }
        }
        if($t==0){
            $sql="INSERT INTO `studinfo` (SName,Id,Course,Section) values('$name','$id','$course','$sec')";
                $res=mysqli_query($con,$sql);
                echo "<p class='dinsert'>Data Inserted Succesfully</p>";
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
    <form action="edit.php" method="post" class="editing">
        <input type="text" name="sname" placeholder="Enter your name" class="boxes" required>
        <br><br>
        <input type="number" name="sid" placeholder="Enter your id" class="boxes" required>
        <br><br>
        <input type="text" name="scourse" placeholder="Enter your course" class="boxes" required>
        <br><br>
        <input type="section" name="ssec" placeholder="Enter your section" class="boxes" required>
        <br><br>
        <button name="submit" class="sub">Save</button>
    </form>
    <a href="app.php"><button class="sub1">back</button></a>
</body>
</html>
