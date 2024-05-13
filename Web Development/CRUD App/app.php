<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <div class="nav">
        <a href="app.php"><li>Home</li></a>
        <a href="edit.php"><li>Edit</li></a>
        <a href="delete.php"><li>Delete</li></a>
        <a href="app.php"><li>About</li></a>
    </div>
    <div class="but">
    <a href="edit.php"><button class="edit2">Add</button></a>
    <a href="delete.php?delall="><button class="edit2" name="deleall">Delete All</button></a>
    </div>
    
    <table class="studinfo1" border="2">
        <tr>
             <td>Name</td>
             <td>Id</td>
             <td>Course</td>
             <td>Section</td>
             <td>Edit</td>
             <td>Delete</td>
        </tr>
        <?php
           include "config.php";
           $sql="SELECT * FROM `studinfo`";
           $res=mysqli_query($con,$sql);
           if(mysqli_num_rows($res)>0){
             while($row=mysqli_fetch_assoc($res)){
                echo "<tr>";
                echo "<td>" . $row["SName"] . "</td>";
                echo "<td>" . $row["Id"] . "</td>";
                echo "<td>" . $row["Course"] . "</td>";
                echo "<td>" . $row["Section"] . "</td>";
                echo "<td>". "<a href='update.php?upid=".$row["Id"]."'><button class='edit' name='ed'>Edit</button></a>" . "</td>";
                echo "<td>". "<a href='delete.php?delid=".$row["Id"]."'><button class='delete' name='del'>Delete</button></a>" . "</td>";
                echo "</tr>";
             }
           }
        ?>
    </table>
</body>
</html>