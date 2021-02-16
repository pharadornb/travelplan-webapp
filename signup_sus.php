
<?php SESSION_START(); ?>

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
  


      header("location:login.php");
     
 
  mysqli_close($conn);
  ?>