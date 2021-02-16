<?php

	$server = "mysql-19614-0.cloudclusters.net:19614";
    $user = "TravelPlan2021";
    $password = "jYtKQ2Y1VZz1";
    $database = "TravelPlan2021";
	
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
		echo "Failed to connect MySQL: " . mysqli_connect_error();
	}

	$query = mysqli_query($con, "SELECT * FROM tourist_attractions ORDER BY id ASC");

	$arrRows = array();
	$arryItem = array();
	while($row = mysqli_fetch_array($query)) {
		$arryItem["id"] = $row["id"];
		$arryItem["latitude"] = $row["latitude"];
		$arryItem["logitude"] = $row["logitude"];
		$arryItem["name"] = $row["name"];
		$arryItem["image_thumbnail"] = $row["image_thumbnail"];
		$arrRows[] = $arryItem;
	}
		
echo json_encode($arrRows);
mysqli_close($con);
?>