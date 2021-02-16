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
	
	$json = '{"TravelPlan2021": [';

	
	// create looping dech array in fetch
	while ($row = mysqli_fetch_array($query)){

	// quotation marks (") are not allowed by the json string, we will replace it with the` character
	// strip_tag serves to remove html tags on strings
		$char ='"';

		$json .= 
		'{
			"id":"'.str_replace($char,'`',strip_tags($row['id'])).'", 
			"name":"'.str_replace($char,'`',strip_tags($row['name'])).'",
			"latitude":"'.str_replace($char,'`',strip_tags($row['latitude'])).'",
			"logitude":"'.str_replace($char,'`',strip_tags($row['logitude'])).'",
		},';
	}

	// omitted commas at the end of the array
	$json = substr($json,0,strlen($json)-1);

	$json .= ']}';

	// print json
	echo $json;
	
	mysqli_close($con);
	
?>