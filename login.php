<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[เข้าสู่ระบบ]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php' ?>

</head>
<body>

<?php include 'php/navbar.php' ?>

<div class="mt-5" align="center">
    <img src="images/logo/logo-application.png" alt="" width="120px" height="150px">

    <form action="login_sus.php" method="POST" style="max-width: 300px; margin: auto;">
        <div class="form-group">
            <h4 class="d-flex justify-content-center font-weight-bold mt-4"> + เข้าสู่ระบบวางแผนท่องเที่ยว + </h4>
            <input type="text" class="form-control mt-4" name="username" id="username" placeholder="ชื่อผู้ใช้"
                   maxlength="15" required>
            <input type="password" class="form-control mt-2" name="password" id="password" placeholder="รหัสผ่าน"
                   maxlength="20" required>
            <center><input type="submit" value="Login" name="bt-login"
                           class="bt-lg btn btn-primary mt-3 mb-2 btn-block"></center>
            <a href="register1.php"><u>ยังไม่มีชื่อบัญชีผู้ใช้?</u></a>
        </div>
    </form>
    <p><i>//ทดสอบระบบของผู้ใช้</i> username: <b>user</b> password: <b>5678</b><br/>
    <i>//ทดสอบระบบของผู้ดูแลระบบ</i> username: <b>admin</b> password: <b>admin1234</b></p>
</div>


<?php include 'php/script.php'?>
</body>
</html>