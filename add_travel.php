<?php SESSION_START();



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

$name = $_SESSION["name"];
$location = $_SESSION["location"];
$image =$_SESSION["image"];
$date = $_POST["day"];
$budget = $_POST["budget"];
$note = $_POST["note"];

$sql = "INSERT INTO  myplan (name,location,image_thumbnail,date,budget,note)
VALUES ('$name','$location','$image','$date','$budget','$note')" ;

$rs=$conn->query($sql);





$conn->close();





?>