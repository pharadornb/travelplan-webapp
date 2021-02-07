<?php

    //Declare variable
    $hostname = "mysql-19614-0.cloudclusters.net:19614";
    $username = "TravelPlan2021";
    $password = "jYtKQ2Y1VZz1";
    $database = "TravelPlan2021";

    //Connect dB
    $conn = new mysqli($hostname, $username, $password, $database);
    $conn->query("SET NAMES UTF8");

    //Check dB die
    if ($conn->connect_error) {
        die('Could not connect: ' . $conn->connect_error);
    }

?>