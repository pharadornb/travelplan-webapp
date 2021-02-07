<?php

	//Declare variable
	$host = "mysql-19614-0.cloudclusters.net:19614";
	$user = "TravelPlan2021";
	$pass = "jYtKQ2Y1VZz1";
	$db = "TravelPlan2021";

	//Connect dB
	$conn = mysqli_connect($host, $user, $pass);
	mysqli_query("SET NAMES UTF8", $con);
	mysqli_select_db("$db");
?>