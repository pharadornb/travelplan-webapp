<?php

    //Declare variable
    $hostname = "mysql-19614-0.cloudclusters.net:19614";
    $username = "TravelPlan2021";
    $password = "jYtKQ2Y1VZz1";
    $database = "TravelPlan2021";

    //Connect
    $con = new mysqli($hostname, $username, $password, $database);

    //Check connect
    if($con -> connect_errno){
        echo "Failed to connect dB" . $con -> connect_errno;
        exit();
    }
?>