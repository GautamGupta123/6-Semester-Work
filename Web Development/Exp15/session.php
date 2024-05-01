<?php
    session_start();
    // echo session_id();
    $_SESSION['id']=10;
    $_SESSION['name']="Gautam Gupta";
    echo "We have your session";
?>