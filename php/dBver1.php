<?php
    include 'php/dbconnect.php';

$conn = mysqli_connect($hostname,$username,$password,$database);
$conn->query("SET NAMES UTF8");
?>