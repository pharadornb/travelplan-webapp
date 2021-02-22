<?php

include_once('functions.php');

$updatedata = new DB_con();

if (isset($_POST['update'])) {

    $userid = $_GET['id'];
    $fname = $_POST['name'];
    $flocation = $_POST['location'];
    $flatitude = $_POST['lat_value'];
    $flogitude = $_POST['lon_value'];
    $fdescription = $_POST['description'];

    $fimage_thumbnail = $_FILES['image_thumbnail']['name'];
    $target_path = "images/tourist/".$fimage_thumbnail;
    $file_tmp = $_FILES['image_thumbnail']['tmp_name'];

    $sql = $updatedata->update($fname, $flocation, $flatitude, $flogitude, $fimage_thumbnail, $fdescription);
    if ($sql) {
        echo "<script>alert('Updated Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='update.php'</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1 class="mt-5">Update Page</h1>
    <hr>
    <?php

    $userid = $_GET['id'];
    $updateuser = new DB_con();
    $sql = $updateuser->fetchonerecord($userid);
    while($row = mysqli_fetch_array($sql)) {
    ?>

    <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: bold">ชื่อสถานที่ท่องเที่ยว :</label>
                <input type="text" class="form-control" name="name" value="<?php $row['name']?>" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label" style="font-weight: bold">ชื่อตำแหน่งที่ตั้ง(อำเภอ, จังหวัด) :</label>
                <input type="text" class="form-control" name="location" value="<?php $row['location']?>" required>
            </div>
            <div class="mb-3">
                <label for="image_thumbnail" class="form-label" style="font-weight: bold">รูปภาพประกอบ :</label>
                <input type="file" class="form-control" name="image_thumbnail" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label" style="font-weight: bold">คำอธิบายสถานที่ท่องเที่ยว :</label>
                <textarea name="description" cols="30" rows="10" class="form-control" value="<?php $row['name']?>" required></textarea>
            </div>

            <div class="mb-3">
                <?php include 'admin/map_marks.php'?>
            </div>

        <?php } ?>
        <button type="submit" name="update" class="btn btn-success">Update</button>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>