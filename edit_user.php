<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[บัญชีผู้ใช้]-ระบบวางแผนท่องเที่ยว</title>


     <!-- css -->
     <?php include 'php/header.php'?>

<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<a href="index_login.php"><img src="images/logo/logo-application.png" width="35px"></a>&nbsp;&nbsp;
<a class="navbar-brand" href="index_login.php">ระบบวางแผนท่องเที่ยว(Travel Planing)</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item ">
            <a class="nav-link" href="index_login.php">&nbsp;หน้าแรก</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="travel_plan.php">&nbsp;แพลนของฉัน</a>
        </li>
        
        <li class="nav-item ">
            <?php echo "<a class='nav-link' href='tourist.php?id=".$_SESSION['user_id']."'> &nbsp;บัญชีผู้ใช้</a>"; ?>
            
            </li>
            <li class="nav-item ist-group-item-action list-group-item-danger mr-1 mb-1">
                <a class="nav-link" href="index.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
            </li>
    
    </ul>
</div>
</nav>


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
   $id = $_GET['id'];

   $sql = "SELECT * FROM users WHERE id = '$id'";
   $result = mysqli_query($conn, $sql);
  
   while($row = mysqli_fetch_assoc($result)) {
       $image = $row["image_thumbnail"];
       $name  = $row["name"];
       $email  = $row["email"];
       $username  = $row["username"];
       $birth  = $row["birthday"];
       $pass  = $row["password"];
       $p = strlen($pass);   //หาความยาวของพาสเวิด
      
   }
?>

<body>
   <center>
   <table align="center">
    <div class="text-center">
        <div class="row"> 

        <TR><TD> ชื่อผู้ใช้งาน : </TD></br>   
                <TD><input type="text" name="name" ></TD></TR> 
        <TR><TD> อีเมลล์ : 
                </TD><TD><input type="text" name="email" ></TD></TR>
        <TR><TD> วันเกิด :
                </TD><TD><input type="date" name="birthday"  ></TD></TR>
        <TR><TD> Username : 
                </TD><TD><input type="text" name="username" ></TD></TR>
        <TR><TD> Password : 
                </TD><TD><input type="text" name="password" ></TD></TR>
        <TR><TD> รูปภาพ : 
                </TD><TD><input type="file" name="upload" />

    
    <TR><TD><br />
    <td>
    <a href="tourist.php" input type="submit" class="btn btn-primary">บันทึก</a>
    <a href="edit_user.php" input type="reset" class="btn btn-danger">ยกเลิก</a></TD></TR>
    </TD><TD><BR>


        </div>  
    </div>                         
    
</div>   
</center>
</body>
