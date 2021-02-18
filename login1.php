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
</head>
<body class="bg-lg">
    <center>
    <div class="ct">
        <img src="img/logo-application.png" alt="" width="120px" height="150px" style="margin-top: 40px;">

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
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
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];

            include('include/config_db.php');

            $sql = "SELECT (username, password) FROM user WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;  
                header("location: index.php");
            }else{
                alert('Invalid username or password');
            }
        }
    ?>

    <!--script cdn-->
    <script href="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>