
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php
  echo "<script>";
  echo "setTimeout(function(){
    swal({
        title:'กรุณาเข้าสู่ระบบก่อน!!',
        text:'กรุณากรอกชื่อผู้ใช้หรือรหัสผ่าน! โปรดลองใหม่อีกครั้ง!',
        type:'error'
    },function(){
        window.location = 'index.php';
    }) ; 
  },50) ;";

  echo "</script>";

 ?>

