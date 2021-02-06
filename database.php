<?php
    $servername = "mysql-19614-0.cloudclusters.net:19614";
    $username = "TravelPlan2021";
    $password = "jYtKQ2Y1VZz1";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
?>