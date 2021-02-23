<?php

include_once('admin/admin_crud_func.php');

$insertdata = new DB_con();

if (isset($_POST['insert'])) {
    $fname = $_POST['name'];
    $flocation = $_POST['location'];
    $flatitude = $_POST['lat_value'];
    $flogitude = $_POST['lon_value'];
    $fdescription = $_POST['description'];

    $fimage_thumbnail = $_FILES['image_thumbnail']['name'];
    $target_path = "images/tourist/".$fimage_thumbnail;

    $file_tmp = $_FILES['image_thumbnail']['tmp_name'];



    $sql = $insertdata->insert($fname, $flocation, $flatitude, $flogitude, $fimage_thumbnail, $fdescription);

    if ($sql) {
        move_uploaded_file($file_tmp, $target_path);
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ!');</script>";
        echo "<script>window.location.href='admin_travel.php'</script>";
    } else {
        echo "<script>alert('ไม่สามารถเพิ่มได้! โปรดลองใหม่อีกครั้ง!');</script>";
        echo "<script>window.location.href='admin_travel_insert.php'</script>";
    }
}

?>

<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[เพิ่มสถานที่ท่องเที่ยว]-ระบบวางแผนท่องเที่ยว</title>
    <?php include 'php/header.php' ?>
</head>
<body>
<?php if($_SESSION['user_id'] == 1){?>
<div class="container">
    <a href="admin_travel.php" class="btn btn-primary mt-3">กลับหน้าหลัก</a>
    <hr>
    <h2 class="mt-5" align="center" style="font-weight: bold;">เพิ่มข้อมูลสถานที่ท่องเที่ยว</h2>
    <hr>
    <form action="" method="post" enctype="multipart/form-data">
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
            <textarea name="description" cols="30" rows="10" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <?php include 'admin/map_marks.php'?>
        </div>

        <div class="mb-3" align="center">
        <button type="submit" name="insert" class="btn btn-success">เพิ่มข้อมูลสถานที่ท่องเที่ยว</button>
        </div>
    </form>
</div>
<?php }else{ header("Location: error.php"); } ?>

<script type="text/javascript">
    $("#logout").click(function() {
        <?php session_destroy(); ?>
    });
</script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<?php include 'php/footer.php' ?>
</body>
</html>