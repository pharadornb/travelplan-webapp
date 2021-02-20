
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

    $user =$_POST['username'];
    $pass =$_POST['password'];


      // echo $sql;
      // echo $rs;
       
      mysqli_query($conn,"SET names TIS620");
      mysqli_query($conn,"SET character_set_result=tis620");
      mysqli_query($conn,"SET character_set_client='tis620'");
      mysqli_query($conn,"SET character_set_connection='tis620'");
  
      $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass' ";
      $result = mysqli_query($conn, $sql);
     //echo $sql;
    // echo $result;
  
  
  if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
              if($row['user_type_id'] == 1) { 
                  $_SESSION['Username']=$row["username"];
                  $_SESSION['user_id']=$row["id"];

                  
                  header("location:admin.php");
                  
              } else if($row['user_type_id'] == 2) {
                $_SESSION['Username']=$row["username"];
                $_SESSION['user_id']=$row["id"];
                echo  "<script>" ;
                echo "setTimeout(function(){
                  swal({
                      title:'Login สำเร็จ!!',
                      text:'ระบบวางแผนการท่องเที่ยว',
                      type:'success'
                  },function(){
                      window.location = 'index_login.php';
                  }) ; 
                },1000) ;" ;
            
                echo  "</script>" ;
                  //header("location:index.php");
              }      
          }
  } else{


    echo  "<script>" ;
    echo "setTimeout(function(){
      swal({
          title:'Username หรือ Password ไม่ถูกต้อง!!',
          text:'ระบบวางแผนการท่องเที่ยว',
          type:'error'
      },function(){
          window.location = 'login.php';
      }) ; 
    },1000) ;" ;

    echo  "</script>" ;

     
  }
  mysqli_close($conn);
  ?>
