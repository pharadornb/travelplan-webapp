<?php

include 'php/header.php';
include("php/dBver2.php");

if (isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $birthday = $_POST['birthday'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    if (isset($_FILES['image'])) {
        $image_name = basename($_FILES["image"]["name"]);
        $image_size = $_FILES["image"]["size"];
        $image_tmp = $_FILES["image"]["tmp_name"];
        $target_dir = "images/member/";
        $target_file = $target_dir . $image_name;
        $upload = 0;
        if (file_exists($target_file) == 1) {
            $upload = 1;
        }
    }


    if ($upload == 1) {
        $sql = "INSERT INTO users (name, email, username, password, image_thumbnail, birthday, user_type_id)
        VALUES ('$fullname','$email','$username','$password','$image_name','$birthday',2)";

        if (mysqli_query($conn, $sql)) {

            echo "<script>";
            echo "setTimeout(function(){
                      swal({
                          title:'สมัครสมาชิกสำเร็จ!!',
                          text:'ยินดีต้อนรับเข้าสู่ระบบวางแผนการท่องเที่ยว.. โปรดเข้าสู่ระบบ',
                          type:'success'
                      },function(){
                          window.location = 'login.php';
                      }) ; 
                    },1000) ;";

            echo "</script>";

        } else {

            echo "<script>";
            echo "setTimeout(function(){
                      swal({
                          title:'สมัครสมาชิกไม่สำเร็จ',
                          text:'โปรดกรอกข้อมูลใหม่! แล้วลองอีกครั้ง!',
                          type:'error'
                      },function(){
                          //window.location = 'register1.php';
                      }) ; 
                    },1000) ;";

            echo "</script>";

        }
    } else {
        $sql = "INSERT INTO users (name, email, username, password, image_thumbnail, birthday, user_type_id)
        VALUES ('$fullname','$email','$username','$password','$image_name','$birthday',2)";

        if (mysqli_query($conn, $sql)) {
            move_uploaded_file($image_tmp, $target_file);
            echo "<script>";
            echo "setTimeout(function(){
                      swal({
                          title:'สมัครสมาชิกสำเร็จ!!',
                          text:'ยินดีต้อนรับเข้าสู่ระบบวางแผนการท่องเที่ยว.. โปรดเข้าสู่ระบบ',
                          type:'success'
                      },function(){
                          window.location = 'login.php';
                      }) ; 
                    },1000) ;";

            echo "</script>";

        } else {

            echo "<script>";
            echo "setTimeout(function(){
                      swal({
                          title:'สมัครสมาชิกไม่สำเร็จ',
                          text:'โปรดกรอกข้อมูลใหม่! แล้วลองอีกครั้ง!',
                          type:'error'
                      },function(){
                          //window.location = 'register1.php';
                      }) ; 
                    },1000) ;";

            echo "</script>";

        }
    }


    $conn->close();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[สมัครสมาชิก]-ระบบวางแผนท่องเที่ยว</title>
</head>

<body class="bg-lg">

<?php include 'php/navbar.php' ?>

<div class="container">
    <div class="rg-div-1" align="center">
        <img src="images/logo/logo-application.png" width="120px" height="150px" class="mt-4">
        <h4 class="mt-3 mb-5"><b>+ สมัครสมาชิกระบบวางแผนท่องเที่ยว +</b></h4>
    </div>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">ชื่อ-สกุล :</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" title="กรุณากรอกชื่อ-นามสกุลของท่าน!!" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">วัน/เดือน/ปีเกิด :</label>
                    <input type="date" name="birthday" id="birthday" title="กรุณาใส่ข้อมูลวันเกิด" class="form-control"  required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">ชื่อผู้ใช้(Username) :</label>
                    <input type="text" name="username" id="username" maxlength="15" class="form-control" title="กรุณากรอกชื่อผู้ใช้(Username)!!"   required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">อีเมล์(Email) :</label>
                    <input type="email" name="email" id="email"  class="form-control" title="กรุณากรอกอีเมล์ให้ถูกต้องหรือกรอกใหม่(Email)!!" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">รหัสผ่าน(Password) :</label>
                    <input type="password" name="password" id="password" class="form-control" pattern="(?=.*\d)(?=.*[A-Za-zก-๏]).{8,}" title="ต้องมีตัวอักษรผสมด้วยและมี 8 ตัวขึ้นไป" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">ยืนยันรหัสผ่าน(Re-password) :</label>
                    <input type="password" name="confrimpassword" id="confrimpassword"  class="form-control" pattern="(?=.*\d)(?=.*[A-Za-zก-๏]).{8,}" title="ต้องมีตัวอักษรผสมด้วยและมี 8 ตัวขึ้นไป" onChange="checkPasswordMatch();" required>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-12 col-md-6">
                    <label for="name" class="form-label" style="font-weight: bold;">รูปภาพประจำตัว :</label>
                    <input type="file" name="image" id="image" accept="image/png, image/jpeg" class="form-control" onChange="previewImage();" title="กรุณาเพิ่มรูปภาพของท่าน!!" required>
                </div>
                <div class="mb-3 col-12 col-md-6">
                    <p style="color: #009432; font-weight: bold;"  id='message'></p>
                    <label for="image" id="pre"></label>
                </div>
            </div>

            <div class="row" align="center">
                <div class="mt-3 mb-3 col-12">
                    <input type="submit" value="สมัครสมาชิก" name="register" id="bt-rg1" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>
<!--script cdn-->
<script src="javascript/scriptregister.js"></script>
<script src="javascript/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>
