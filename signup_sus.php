<?php SESSION_START(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    </head>
    <body>


<?php 
   include 'include/config_db.php';
    
       
      mysqli_query($conn,"SET names TIS620");
      mysqli_query($conn,"SET character_set_result=tis620");
      mysqli_query($conn,"SET character_set_client='tis620'");
      mysqli_query($conn,"SET character_set_connection='tis620'");
  
    
     
     $name = ($_POST['fullname']);
     $user = ($_POST['username']);
     $pass = ($_POST['password']);
     $email = ($_POST['email']);




      $sql = "INSERT INTO  users(name,username,password,email,user_type_id) VALUES('$name','$user','$pass','$email','2')";
      $result = mysqli_query($conn, $sql);
    //echo $sql;
    // echo $result;
 


     //header("location:signup_success.php");
     
 
  mysqli_close($conn);
  ?>

<script>
    setTimeout(function(){
      swal({
          title:"สมัครสมาชิกสำเร็จ",
          text:"ระบบวางแผนการท่องเที่ยว",
          type:"success"
      },function(){
          window.location = "login.php";
      }) ; 
    },1000) ;
    </script>



    
  </body>
  </html>


