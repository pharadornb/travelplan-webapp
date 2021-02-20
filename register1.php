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
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <p>ชื่อ-สกุล:</p>
                <input type="text" name="fullname" id="fullname" placeholder="Fullname" class="ds-01" required> 
                <br>
                <p id="fn"></p>
                <p>วัน/เดือน/ปีเกิด:</p>
                <input type="date" name="birthday" id="birthday" required>
                <br><br>
                ชื่อผู้ใช้:
                <br><br>
                <input type="text" name="username" id="username" class="ds-01" maxlength="15" placeholder="Username"  required>
                <p id="fun"></p>
                รหัสผ่าน:
                <br><br>
                <input type="password" name="password" id="password" class="ds-01" placeholder="Password" required>
                <p id="fp"></p>
                ยืนยันรหัสผ่าน:
                <br><br>
                <input type="password" name="confrimpassword" id="confrimpassword" class="ds-01" placeholder="Confrim Password" required>
                <p id="fpc"></p>
                Email:
                <br><br>
                <input type="email" name="email" placeholder="E-mail" class="ds-01" id="email" required>
                <br><br>
                <input type="file" name="photo" id="photo" accept="image/png, image/jpeg">
                <br><br>
                <input type="submit" value="สมัครสมาชิก" name="bt-rg1" id="bt-rg1">
                <br><br>
        </form>
        </div>
    </center>
    <?php
   
    $hostname = "mysql-19614-0.cloudclusters.net:19614";
    $username = "TravelPlan2021";
    $password = "jYtKQ2Y1VZz1";
    $database = "TravelPlan2021";

    //Connect dB
    $conn = new mysqli($hostname, $username, $password, $database);
    $conn->query("SET NAMES UTF8");

    //Check dB die
    if ($conn->connect_error) {
        die('Could not connect: ' . $conn->connect_error);
    }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = $_REQUEST['fullname'];
            $birthday = $_REQUEST['birthday'];
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];
            $confrimpassword = $_REQUEST['confrimpassword'];
            $email = $_REQUEST['email'];

             

            $n = strlen($fullname);
            $pattern = "/[ก-์\s]/";
            $u = preg_match_all($pattern, $fullname);


            $sql = "SELECT (username) FROM user WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);


            //Check thai in fullname
            if($n==$u){
                //Check if the username is in the database or not.
                if(mysqli_num_rows($result) == 0){
                    //Check Number of characters > 8
                    if(strlen($password) >= 9){
                        //Check Letters in Password
                        if(preg_match_all('/[A-z]/',  $password) >= 1 || preg_match_all('/[ก-ฮ]/',  $password) >= 1){
                            //Check password = confrimpassword
                            if(strcmp($password, $confrimpassword)==0){
                                //------
                            }else{
                                echo "<script>";
                                echo "document.getElementById('fpc').innerHTML = '<p><div id=\"nf\">รหัสผ่านไม่ตรงกัน</div></p>';";
                                echo "</script>";
                            }
                        }else{
                            echo "<script>";
                            echo "document.getElementById('fp').innerHTML = '<p><div id=\"nf\">กรุณาใส่ตัวอักษรผสมเข้าไปด้วย</div></p>';";
                            echo "</script>";
                        }
                    }else{
                        echo "<script>";
                        echo "document.getElementById('fp').innerHTML = '<p><div id=\"nf\">กรุณากรอกให้เกิน 8 ตัวอักษร</div></p>';";
                        echo "</script>";
                    }
                }else{
                    echo "<script>";
                    echo "document.getElementById('fun').innerHTML = '<p><div id=\"nf\">มีชื่อผู้ใช้อยู่แล้ว</div></p>';";
                    echo "</script>";
                }
            }else{    
                echo "<script>";
                echo "document.getElementById('fn').innerHTML = '<p><div id=\"nf\">กรุณากรอกภาษาไทย</div></p>';";
                echo "</script>";
            } 

        }

        $conn->close();
    ?>
    <!--script cdn--> 
    <!-- <script src="script/scriptregister.js"></script> -->
    <script href="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</body>
</html>