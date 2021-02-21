<?php
    session_start();
    //$_SESSION['Username'] = $row["username"];
    //$_SESSION['user_id'] = $row["id"];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[ผู้ดูแลระบบ]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php' ?>

</head>
<body>
    <!-- nav -->
    <?php include 'php/nav_login.php'?>

    <div id="manage_travel_place"></div>
    <div class="container mt-4 mb-4">
        <h3 class="d-flex justify-content-center font-weight-bold">+ จัดการสถานที่ท่องเที่ยว +</h3>
    </div>

    <div id="manage_users"></div>
    <div class="container mt-4 mb-4">
        <h3 class="d-flex justify-content-center font-weight-bold">+ จัดการผู้ใช้งาน +</h3>
    </div>

    <!-- manage tourist_attraction-->
    <?php include 'php/manage_tourist_atteaction.php' ?>

    <!-- footer -->
    <?php include 'php/footer.php'?>
    <!-- script -->
    <?php include 'php/script.php'?>

</body>
</html>
