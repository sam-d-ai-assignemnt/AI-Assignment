<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "ai_assignment";
    $dbplan = 0;

    if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
        die("failed to connect");
    }
?>