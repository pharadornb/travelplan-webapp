<?php
    SESSION_START();
    include 'php/header.php';
    include 'php/dBver2.php';

    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        //$pass = md5($_POST['password']);
        $pass = md5($_POST['password']);


// echo $sql;
// echo $rs;

    mysqli_query($conn, "SET names TIS620");
    mysqli_query($conn, "SET character_set_result=tis620");
    mysqli_query($conn, "SET character_set_client='tis620'");
    mysqli_query($conn, "SET character_set_connection='tis620'");

    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass' ";
    $result = mysqli_query($conn, $sql);
//echo $sql;
// echo $result;


    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['user_type_id'] == 1) {
                $_SESSION['Username'] = $row["username"];
                $_SESSION['user_id'] = $row["id"];
                echo "<script>";
                echo "setTimeout(function(){
                      swal({
                          title:'เข้าสู่ระบบสำเร็จ!!',
                          text:'ยินดีต้อนรับผู้ดูแล เข้าสู่ระบบวางแผนการท่องเที่ยว..',
                          type:'success'
                      },function(){
                          window.location = 'admin.php';
                      }) ; 
                    },50) ;";
                echo "</script>";

            } else if ($row['user_type_id'] == 2) {
                $_SESSION['Username'] = $row["username"];
                $_SESSION['user_id'] = $row["id"];

                echo "<script>";
                echo "setTimeout(function(){
                      swal({
                          title:'เข้าสู่ระบบสำเร็จ!!',
                          text:'ยินดีต้อนรับนักท่องเที่ยว เข้าสู่ระบบวางแผนการท่องเที่ยว..',
                          type:'success'
                      },function(){
                          window.location = 'index_login.php';
                      }) ; 
                    },50) ;";
                echo "</script>";
            }
        }
    } else {


        echo "<script>";
        echo "setTimeout(function(){
          swal({
              title:'เข้าสู่ระบบไม่สำเร็จ!!',
              text:'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง! โปรดลองใหม่อีกครั้ง!',
              type:'error'
          },function(){
              window.location = 'login.php';
          }) ; 
        },50) ;";

        echo "</script>";


    }
    mysqli_close($conn);
}
?>
