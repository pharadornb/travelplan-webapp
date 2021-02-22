<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[สมัครสมาชิก]-ระบบวางแผนท่องเที่ยว</title>
    <!--css cdn-->
    <link rel="stylesheet" href="css/styleLoginF.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&family=Sarabun:wght@300&display=swap" rel="stylesheet">

</head>
<body class="bg-lg"> 
    <center>
        <div class="rg-div-1">
            <img src="images/logo/logo-application.png" alt="" width="120px" height="150px" style="margin-top: 40px;">
            <br><br><h3 class="h-3"><b>+ สมัครสมาชิกระบบวางแผนท่องเที่ยว +</b></h3><br><br>
            <form action="register_sus.php" method="POST" enctype="multipart/form-data">
                <label for="" class="text-all">ชื่อ-สกุล</label><label for="" class="al1">(ภาษาไทย)</label>
                <br><br>
                <input type="text" name="fullname" id="fullname" placeholder="ชื่อ-สกุล(ภาษาไทย)"  pattern="^[ก-๏\s]+$" class="ds-01" title="กรุณาชื่อภาษาไทย" required> 
                <br>
                <br>
                <label for="" class="text-all">วัน/เดือน/ปีเกิด</label><label for="" class="al1">(*)</label>
                <br><br>
                <input type="date" class="ds-01" name="birthday" id="birthday" title="กรุณาใส่ข้อมูลวันเกิด" required>
                <br><br>
                <label for="" class="text-all">ชื่อผู้ใช้</label><label for="" class="al1">(*)</label>
                <br><br>
                <input type="text" name="username" id="username" class="ds-01" maxlength="15" placeholder="ชื่อผู้ใช้" title="กรุณากรอกชื่อผู้ใช้" onChange="checkUsernameMatch();" required>
                <br>
                <br> 
                <label for="" class="text-all">รหัสผ่าน</label><label for="" class="al1">(*)</label>
                <br><br>
                <input type="password" name="password" id="password" class="ds-01" pattern="(?=.*\d)(?=.*[A-Za-zก-๏]).{8,}" title="ต้องมีตัวอักษรผสมด้วยและมี 8 ตัวขึ้นไป" placeholder="รหัสผ่าน" required>
                <br><br>
                <label for="" class="text-all">ยืนยันรหัสผ่าน</label><label for="" class="al1">(*)</label>
                <br><br>
                <input type="password" name="confrimpassword" id="confrimpassword" pattern="(?=.*\d)(?=.*[A-Za-zก-๏]).{8,}" title="ต้องมีตัวอักษรผสมด้วยและมี 8 ตัวขึ้นไป" class="ds-01" placeholder="ยืนยันรหัสผ่าน" onChange="checkPasswordMatch();" required>
                <br><p id='message'></p>
                <label for="" class="text-all">Email</label><label for="" class="al1">(*)</label>
                <br><br>
                <input type="email" name="email" placeholder="E-mail" class="ds-01" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <br><br>
                <div class="img01">
                <input type="file" name="image" id="image" accept="image/png, image/jpeg" onChange="previewImage();">
                <br><label for="image" id="pre"></label>
                </div>
                <br><br>
                <input type="submit" value="สมัครสมาชิก" name="bt-rg1" id="bt-rg1">
                <br><br>
        </form>
        </div>
    </center>
    <!--script cdn--> 
    <script src="javascript/scriptregister.js"></script> 
    <script href="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>
