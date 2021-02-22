<?php
    SESSION_START();
    include 'php/header.php';
    include 'php/dBver2.php';

    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];


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

<?php include 'php/nav_login_sys.php' ?>

<div class="mt-5" align="center">
    <img src="images/logo/logo-application.png" alt="" width="120px" height="150px">

    <form action="" method="POST" style="max-width: 300px; margin: auto;">
        <div class="form-group">
            <h4 class="d-flex justify-content-center font-weight-bold mt-4"> + เข้าสู่ระบบวางแผนท่องเที่ยว + </h4>
            <input type="text" class="form-control mt-4" name="username" id="username" placeholder="ชื่อผู้ใช้"
                   maxlength="15" required>
            <input type="password" class="form-control mt-2" name="password" id="password" placeholder="รหัสผ่าน"
                   maxlength="20" required>
            <center><input type="submit" value="Login" name="login"
                           class="bt-lg btn btn-primary mt-3 mb-2 btn-block"></center>
            <a href="register1.php"><u>ยังไม่มีชื่อบัญชีผู้ใช้?</u></a>
        </div>
    </form>
    <p><i>//ทดสอบระบบของผู้ใช้</i> username: <b>user</b> password: <b>5678</b><br/>
        <i>//ทดสอบระบบของผู้ดูแลระบบ</i> username: <b>admin</b> password: <b>admin1234</b><br/>
        //สามารถเข้าสู่ระบบได้แล้ว<br/>
        //สามารถเข้าระบบแอดมินได้แล้ว<br/>
        //สามารถสมัครสมาชิกได้แล้ว<br/>
        //ยังไม่สามารถเพิ่มสถานที่ท่องเที่ยวได้
    </p>
</div>

<?php include 'php/script.php' ?>
</body>
</html>