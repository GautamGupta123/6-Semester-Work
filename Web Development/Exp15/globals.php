<?php
   $num=10;
   function hello(){
    $GLOBALS['num1']=120;
    echo $GLOBALS['num'];
   }
   hello();
   echo "<br>";
   echo $GLOBALS['num1'];
?>