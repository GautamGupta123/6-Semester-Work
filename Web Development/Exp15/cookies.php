<?php
   if(setcookie('shoe','1',time()+60*60)){
    echo "cookie is created";
   }

   echo $_COOKIE['shoe'];
?>