<?php
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[ผู้ดูแลระบบ]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php' ?>

</head>
<body>

    <!-- navbar for admin -->
    <?php include 'admin/nav_login.php' ?>

    <div class="container mt-5">
        <?php include 'php/search.php'?>
    </div>

    <!-- card -->
    <div class="container">
        <h3 class="d-flex justify-content-center font-weight-bold">สถิติของระบบอัพเดตเรียลไทม์!</h3>
    </div>

    <div class="mb-5 mt-5">
        <?php include 'admin/statistics.php' ?>
    </div>

    <!-- footer -->
    <?php include 'php/footer.php' ?>

    <!-- script -->
    <?php include 'php/script.php' ?>

</body>
</html>
