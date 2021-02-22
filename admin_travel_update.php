<?php

include_once('admin/admin_crud_func.php');

$updatedata = new DB_con();

if (isset($_POST['update'])) {
    $userid = $_GET['id'];
    $fname = $_POST['name'];
    $flocation = $_POST['location'];
    $flatitude = $_POST['lat_value'];
    $flogitude = $_POST['lon_value'];
    $fdescription = $_POST['description'];
    //$image_thumbnail = $_POST['image_thumbnail2'];
   // echo "image_thumbnail = " . $image_thumbnail;
  
 if(isset($_FILES['image_thumbnail'])){
        $fimage_thumbnail = $_FILES['image_thumbnail']['name'];
        $target_path = "images/tourist/".$fimage_thumbnail;
        $file_tmp = $_FILES['image_thumbnail']['tmp_name'];
    }

    //echo "$userid $fname $flocation $flatitude $flogitude $fdescription $fimage_thumbnail";

  
    $sql = $updatedata->update($userid, $fname, $flocation, $flatitude, $flogitude, $fimage_thumbnail, $fdescription);
    if ($sql) {
        move_uploaded_file($file_tmp, $target_path);
        echo "<script>alert('Updated Successfully!');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again!');</script>";
        echo "<script>window.location.href='admin_travel_update.php?id=$userid'</script>";
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
    <a href="admin_travel.php" class="btn btn-primary mt-3">กลับหน้าหลัก</a>
    <hr>
    <h1 class="mt-5">Update Page</h1>
    <hr>
    <?php

    $id = $_GET['id'];
    $updateuser = new DB_con();
    $sql = $updateuser->fetchonerecord($id);
    while($row = mysqli_fetch_array($sql)) {
        
    ?>
    <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight: bold">ชื่อสถานที่ท่องเที่ยว :</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>" required>
            </div>
            <div class="mb-3">
                <label for="location" class="form-label" style="font-weight: bold">ชื่อตำแหน่งที่ตั้ง(อำเภอ, จังหวัด) :</label>
                <input type="text" class="form-control" name="location" value="<?php echo $row['location'];?>" required>
            </div>
            <div class="mb-3">
                <label for="image_thumbnail" class="form-label" style="font-weight: bold">รูปภาพประกอบ :</label>
                <input type="file" class="form-control" name="image_thumbnail">
                <input type="hidden" class="form-control" name="image_thumbnail2">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label" style="font-weight: bold">คำอธิบายสถานที่ท่องเที่ยว :</label>
                <textarea name="description" cols="30" rows="10" class="form-control" required><?php echo $row['description'];?></textarea>
            </div>

            <div class="mb-3">
                <?php include 'admin/map_marks2_up.php'?>
            </div>
        <?php } ?>
        <button type="submit" name="update" class="btn btn-success">Update</button>
    </form>
</div>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

</body>
</html>