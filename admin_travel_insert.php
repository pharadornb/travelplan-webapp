<?php

include_once('admin/admin_crud_func.php');

$insertdata = new DB_con();

if (isset($_POST['insert'])) {
    $fname = $_POST['name'];
    $flocation = $_POST['location'];
    $flatitude = $_POST['latitude'];
    $flogitude = $_POST['logitude'];
    $fimage_thumbnail = $_POST['image_thumbnail'];
    $fdescription = $_POST['description'];
    $fallow = $_POST['allow'];
    $fmode = $_POST['mode'];

    $sql = $insertdata->insert($fname, $flocation, $flatitude, $flogitude, $fimage_thumbnail, $fdescription, $fallow, $fmode);

    if ($sql) {
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ!');</script>";
        echo "<script>window.location.href='admin_travel.php'</script>";
    } else {
        echo "<script>alert('ไม่สามารถเพิ่มได้! โปรดลองใหม่อีกครั้ง!');</script>";
        echo "<script>window.location.href='admin_travel_insert.php'</script>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[เพิ่มสถานที่ท่องเที่ยว]-ระบบวางแผนท่องเที่ยว</title>

    <?php include 'php/header.php' ?>

<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">-->
</head>
<body>

<div class="container">
    <a href="admin_travel.php" class="btn btn-primary mt-3">กลับหน้าหลัก</a>
    <hr>
    <h1 class="mt-5" align="center">เพิ่มข้อมูลสถานที่ท่องเที่ยว</h1>
    <hr>
    <form action="" method="post">
<!--        $fname = $_POST['name'];-->
<!--        $flocation = $_POST['location'];-->
<!--        $flatitude = $_POST['latitude'];-->
<!--        $flogitude = $_POST['logitude'];-->
<!--        $fimage_thumbnail = $_POST['image_thumbnail'];-->
<!--        $fdescription = $_POST['description'];-->
<!--        $fallow = $_POST['allow'];-->
<!--        $fmode = $_POST['mode'];-->
        <div class="mb-3">
            <label for="name" class="form-label" style="font-weight: bold">ชื่อสถานที่ท่องเที่ยว :</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label" style="font-weight: bold">ชื่อตำแหน่งที่ตั้ง(อำเภอ, จังหวัด) :</label>
            <input type="text" class="form-control" name="location" required>
        </div>
        <div class="mb-3">
            <label for="image_thumbnail" class="form-label" style="font-weight: bold">รูปภาพประกอบ :</label>
            <input type="file" class="form-control" name="image_thumbnail" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label" style="font-weight: bold">คำอธิบายสถานที่ท่องเที่ยว :</label>
            <textarea name="address"cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <?php ?>>
        </div>
        <button type="submit" name="insert" class="btn btn-success">Insert</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>