54<?php
 session_start();
    // echo "Logging you out. Please wait....";
 session_destroy();   
 header("Location:/Internship_project/day 10/main.php");
header("Location:/Internship_project/day 10/main.php?logoutsuccess=true");
?>