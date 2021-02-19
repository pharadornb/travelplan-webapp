<?php
 include 'include/config_db.php';

$res['result'] = [];
$res['code'] = 404;
$res['msg'] = "Data not found.";
$res['success'] = false;
if(isset($_POST['search']) && !empty($_POST['search'])) {
$sql = "SELECT * FROM tourist_attractions WHERE 1 AND name LIKE '{$_POST['search']}%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$res['result'] = $result->fetch_all(MYSQLI_ASSOC);
$res['code'] = 200;
$res['msg'] = "Successfully.";
$res['success'] = true;
}
$conn->close();
}
echo json_encode($res);
?>