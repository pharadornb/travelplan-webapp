<?php
session_start();

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

$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$username = $_POST['username'];
$password = $_POST['password'];
$confrimpassword = $_POST['confrimpassword'];
$email = $_POST['email'];

$file = $_FILES['image'];
$image_name = $file['name'];
$image_size = $file['size'];
$image_tmp = $file['tmp_name'];
$target_dir = "uploads/";
$target_file = $target_dir . basename($image_name);

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
            if(preg_match_all('/[A-z]/',  $password) >= 1 || preg_match_all('/[ก-์]/',  $password) >= 1){
                //Check password = confrimpassword
                if(strcmp($password, $confrimpassword)==0){
                    $sql = "insert into (name,email,username,password,role,image_thumbnail,created_at,user_type_id)
                            values ('$fullname','$email','$username','$password','tourist','')";
                }else{
                    $_SESSION['error_confrimpassword'] = "รหัสผ่านไม่ตรงกัน";
                    header("location: register1.php");
                }
            }else{
                $_SESSION['error_password'] = "กรุณาใส่ตัวอักษรผสมเข้าไปด้วย";
                header("location: register1.php");
            }
        }else{
            $_SESSION['error_password'] = "กรุณากรอกให้เกิน 8 ตัวอักษร";
            header("location: register1.php");
        }
    }else{
        $_SESSION['error_username'] = "มีชื่อผู้ใช้อยู่แล้ว";
        header("location: register1.php");
    }
}else{    
    $_SESSION['error_fullname'] = "กรุณากรอกภาษาไทย";
    header("location: register1.php");
} 

$conn->close();



?>
