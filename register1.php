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
</head>
<body class="bg-lg"> 
    <center>
        <div class="rg-div-1">
            <img src="images/logo/logo-application.png" alt="" width="120px" height="150px" style="margin-top: 40px;">
            <br><br><h3>+ สมัครสมาชิกระบบวางแผนท่องเที่ยว +</h3><br><br>
            <form action="register_sus.php" method="POST">
                <p>ชื่อ-สกุล:</p>
                <input type="text" name="fullname" id="fullname" placeholder="Fullname" class="ds-01" required> 
                <br>
                <?php if(isset($_SESSION['error_fullname'])) : ?>
                    <br>
                    <div class="nf">
                            <?php
                                echo $_SESSION['error_fullname'];
                                unset($_SESSION['error_fullname']);
                            ?>
                    </div>
                <?php endif ?>
                <br>
                <p>วัน/เดือน/ปีเกิด:</p>
                <input type="date" name="birthday" id="birthday" required>
                <br><br>
                ชื่อผู้ใช้:
                <br><br>
                <input type="text" name="username" id="username" class="ds-01" maxlength="15" placeholder="Username"  required>
                <br>
                <?php if(isset($_SESSION['error_username'])):?>
                    <br>
                    <div class="nf">
                            <?php
                                echo $_SESSION['error_username'];
                                unset($_SESSION['error_username']);
                            ?>
                    </div>
                <?php endif ?>
                <br>
                รหัสผ่าน:
                <br><br>
                <input type="password" name="password" id="password" class="ds-01" placeholder="Password" required>
                <br>
                <?php if(isset($_SESSION['error_password'])):?>
                    <br>
                    <div class="nf">
                            <?php
                                echo $_SESSION['error_password'];
                                unset($_SESSION['error_password']);
                            ?>
                    </div>
                <?php endif ?>
                <br>
                ยืนยันรหัสผ่าน:
                <br><br>
                <input type="password" name="confrimpassword" id="confrimpassword" class="ds-01" placeholder="Confrim Password" required>
                <br>
                <?php if(isset($_SESSION['error_confrimpassword'])):?>
                    <br>
                    <div class="nf">
                            <?php
                                echo $_SESSION['error_confrimpassword'];
                                unset($_SESSION['error_confrimpassword']);
                            ?>
                    </div>
                <?php endif ?>
                <br>
                Email:
                <br><br>
                <input type="email" name="email" placeholder="E-mail" class="ds-01" id="email" required>
                <br><br>
                <input type="file" name="image" id="image" accept="image/png, image/jpeg">
                <br><br>
                <input type="submit" value="สมัครสมาชิก" name="bt-rg1" id="bt-rg1">
                <br><br>
        </form>
        </div>
    </center>
    <!--script cdn--> 
    <!-- <script src="script/scriptregister.js"></script> -->
    <script href="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>
