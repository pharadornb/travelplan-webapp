<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[บัญชีผู้ใช้]-ระบบวางแผนท่องเที่ยว</title>


     <!-- css -->
     <?php include 'php/header.php'?>

<style>
    body {
        font-family: 'Kanit', sans-serif;
    }

    nav #topic_bold {
        font-weight: bold;
    }

    .col-example {
        padding: 1rem;
        background-color: #33b5e5;
        border: 2px solid #fff;
        color: #fff;
        text-align: center;
    }

    html {
        scroll-behavior: smooth;
    }
</style>

</head>
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
        <li class="nav-item active">
            <a class="nav-link" href="index_login.php">&nbsp;หน้าแรก</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#travel">&nbsp;สถานที่ท่องเที่ยวน่าสนใจ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#media">&nbsp;สื่อประชาสัมพันธ์</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">&nbsp;ติดต่อเรา</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="tourist.php">&nbsp;บัญชีผู้ใช้</a>
        </li>
        <li class="nav-item ist-group-item-action list-group-item-success mr-1 mb-1">
            <a class="nav-link" href="index.php">&nbsp;<i class="fas fa-user"></i>&nbsp;ออกจากระบบ</a>
        </li>
    
    </ul>
</div>
</nav>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
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
   $id = $_GET['id'];

   $sql = "SELECT * FROM users WHERE id = '$id'";
   $result = mysqli_query($conn, $sql);
  
   while($row = mysqli_fetch_assoc($result)) {
       $image = $row["image_thumbnail"];
      // $name  = $row["name"];

   }
    // echo "<img src='images/userphoto/".$image."'>";

    //<?php echo "<p>ชื่อผู้ใช้  : ".$name."</p>"; 
?>
<div class="container" max-width ="960px" text-center= "mb-4">
    <br /><br />
  <h3>บัญชีผู้ใช้</h3>
  


  <div class="row">
  <div class="col-sm-6"> <?php  echo "<img src='images/userphoto/".$image."'alt='' width='120px' height='150px' style='margin-top: 40px;'></div>"?> 
  <div class="col-sm-6">........เดี๋ยวมาต่อ พรุ่งนี้ 21/2/2564 3.56 น........</div>
  </div>
  </div>
 
    <div class="mt-4">
        <?php include 'php/footer.php'?>
    </div>
    
</body>
</html>