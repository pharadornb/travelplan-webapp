<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[เข้าสู่ระบบ]-ระบบวางแผนท่องเที่ยว</title>
    <!--css cdn-->
    <link rel="stylesheet" href="css/styleLoginF.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="javascript/showphoto.js"></script>
</head>
<body class="bg-lg">
    <center>
    <div class="ct">
   <img src="images/logo/logo-application.png" alt="" width="120px" height="150px" style="margin-top: 40px;">

        <form action="login_sus.php" method="POST">
            <div style="margin-top: 10%;">
                <h4>+เข้าสู่ระบบวางแผนท่องเที่ยว+</h4>
            </div>
            <div style="margin-top: 10%;">
                <p>ชื่อผู่้ใช้</p>
                <input type="text" name="username" id="username" placeholder="Username" maxlength="15" required>
                <br><br>
                <p>รหัสผ่าน</p>
                <input type="password" name="password" id="password" placeholder="Password" maxlength="20" required>
                <br><br>
                <input type="submit" value="Login" name="bt-login" class="bt-lg"><br><br>
                <a href="register1.php"><u>ยังไม่มีชื่อบัญชีผู้ใช้?</u></a>
                <br><br><br>
            </div>
    </form>
    </div>
    </center>