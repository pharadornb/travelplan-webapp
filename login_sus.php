
<?php SESSION_START(); ?>

<body>
<?php 
   include 'include/config_db.php';

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
                  header("location:index.php");
              }      
          }
  } else{
    
      header("location:login.php");
     
  }
  mysqli_close($conn);
  ?>
