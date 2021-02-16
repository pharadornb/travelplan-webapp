<?php

include('db_connect.php');

// $stmt = $conn->prepare("SELECT title, price, rating, image FROM products");

$stmt = $conn->prepare("SELECT id, name, latitude, logitude FROM tourist_attractions");

$stmt ->execute();
$stmt -> bind_result($id, $name, $latitude, $logitude);

$tourist_attractions = array();

while($stmt ->fetch()){
	header("Content-Type: application/json; charset=utf-8");

    $temp = array();
	
	$temp['id'] = $id;
	$temp['name'] = $name;
	$temp['latitude'] = $latitude;
	$temp['logitude'] = $logitude;

	array_push($tourist_attractions,$temp);
	}

	echo json_encode(['TravelPlan' => $tourist_attractions], JSON_UNESCAPED_UNICODE);

?>