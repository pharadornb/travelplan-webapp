<?php
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

$res['result'] = [];
$res['code'] = 404;
$res['msg'] = "Data not found.";
$res['success'] = false;
$res['total_records'] = 0;
if (isset($_POST['search']) && !empty($_POST['search'])) {
    $page = 1;
    if ($_POST['page']) {
        $page = $_POST['page'];
    }
    $items_per_page = 5;
    $offset = ($page - 1) * $items_per_page;
    $sql = "SELECT * FROM tourist_attractions
 
 WHERE 1 AND name LIKE '%{$_POST['search']}%'";

    $resultCount = $conn->query($sql);
    if ($resultCount->num_rows > 0) {
        $res['total_records'] = $resultCount->num_rows;
        $sql .= "LIMIT {$offset}, {$items_per_page}";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $res['result'] = $result->fetch_all(MYSQLI_ASSOC);
            $res['code'] = 200;
            $res['msg'] = "Successfully.";
            $res['success'] = true;
        }
    }

    $conn->close();
}
echo json_encode($res);
?>