<?php
   session_start();
   if(isset($_SESSION['name'])){
    echo "Welcome" . $_SESSION['name'];
    echo "<br>";
    echo "Your id is". $_SESSION['id'];
    echo "<br>";
   }
   else{
    echo "Please login to continue";
   }
?>