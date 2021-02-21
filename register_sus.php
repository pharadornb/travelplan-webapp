<?php
//session_start();
include("php/dBver2.php");


$fullname = $_POST['fullname'];
$birthday = $_POST['birthday'];
$username = $_POST['username'];
$password = $_POST['password'];
//$confrimpassword = $_POST['confrimpassword'];
$email = $_POST['email'];

//$file = $_FILES["image"];
if(isset($_FILES['image'])){
    $image_name = basename($_FILES["image"]["name"]);
    $image_size = $_FILES["image"]["size"];
    $image_tmp = $_FILES["image"]["tmp_name"];
    $target_dir = "images/member/";
    $target_file = $target_dir . $image_name;
    
    // Check if file already exists
    if (!(file_exists($target_file))) {                   
        $sql = "insert into (name, email, username, password, role, image_thumbnail, created_at, user_type_id)
                values ('$fullname','$email','$username','$password','tourist','$image_name','$birthday',2)";
        if($conn->query($sql) === TRUE){
            move_uploaded_file($image_tmp, $target_file);
            header("location: login.php");
        }else{
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลล้มเหลว1')";
        echo "</script>";
        }
    }else{
        $sql = "insert into (name,email,username,password,role,image_thumbnail,created_at,user_type_id)
                values ('$fullname','$email','$username','$password','tourist','$image_name','$birthday',2)";
        if($conn->query($sql) === TRUE){
            header("location: login.php");
        }else{
        echo "<script type='text/javascript'>";
        echo "alert('เพิ่มข้อมูลล้มเหลว2')";
        echo "</script>";
        }
    }



}
    
  




$conn->close();



?>
