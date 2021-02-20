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
            <img src="img/logo-application.png" alt="" width="120px" height="150px" style="margin-top: 40px;">
            <br><br><h3>+ สมัครสมาชิกระบบวางแผนท่องเที่ยว +</h3><br><br>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" id="formR" onsubmit="check()">
                <p>ชื่อ-สกุล:</p>
                <input type="text" name="fullname" id="fullname" placeholder="Fullname"  onkeypress="showHint(event)" required> 
                <br>
                <p id="fn"></p>
                <p>วัน/เดือน/ปีเกิด:</p>
                <input type="date" name="birthday" id="birthday" required>
                <br><br>
                ชื่อผู้ใช้:
                <br><br>
                <input type="text" name="username" id="username" placeholder="Username"  required>
                <br><br>
                รหัสผ่าน:
                <br><br>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <p id="fp"></p>
                ยืนยันรหัสผ่าน:
                <br><br>
                <input type="password" name="confrimpassword" id="confrimpassword" placeholder="Confrim Password" required>
                <p id="fpc"></p>
                Email:
                <br><br>
                <input type="email" name="email" placeholder="E-mail" id="email" maxlength="25" required>
                <br><br>
                <input type="file" name="photo" id="photo">
                <br><br>
                <input type="submit" value="สมัครสมาชิก" name="bt-rg1" id="bt-rg1">
                <br><br>
        </form>
        </div>
    </center>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = $_REQUEST['fullname'];
            $birthday = $_REQUEST['birthday'];
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $confrimpassword = $_REQUEST['confrimpassword'];
            $email = $_REQUEST['email'];


            if( !ereg("^[ก-์]+$", $fullname ) ){

            }
            if(preg_match_all('/[A-z]/',  $password) >= 1 || preg_match_all('/[ก-ฮ]/',  $password) >= 1){
                if(strlen($password) >= 9){
                    if(strcmp($password, $confrimpassword)==0){
                        
                    }
                }
            }
            

        }
    ?>
    <!--script cdn-->
    <script src="script/scriptregister.js"></script>
    <script href="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>