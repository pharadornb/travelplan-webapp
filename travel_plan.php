<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[บัญชีผู้ใช้]-ระบบวางแผนท่องเที่ยว</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
        <li class="nav-item ">
            <a class="nav-link" href="index_login.php">&nbsp;หน้าแรก</a>
        </li>
        <li class="nav-item active">
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

 
//select db
$sql = "SELECT*FROM myplan" ;

$query=mysqli_query($conn,$sql);
      
?>

<style>
    body {
        font-family: 'Kanit', sans-serif;
    }
</style>

<center>
<br />
    <h3>แพลนของฉัน</h3>
<br />    
 </center>

<style>

table {
  font-family: 'Kanit', sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>


<table> 
     
     <div class = "text-right">
    <a href="index_login.php" input type="button" class="btn btn-success" >เพิ่มสถานที่ท่องเที่ยว</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><br />
    </div>
  <tr>
    
    <th>ชื่อสถานที่</th>
    <th>ตำแหน่งที่ตั้ง</th>
    <th>ชื่อรูปภาพ</th>
    <th>วันที่เดินทาง</th>
    <th>งบประมาณการเดินทาง</th>
    <th>note</th>
    <th>จัดการข้อมูล</th>
  
  </tr>
  
  <tr>  <!--เรียกค่าวนลูป-->
    <?php foreach($query as $data){ ?>

<!--เรียกค่าที่อยากแสดง-->
    <tr>
    <div class = "text-center">
        <th><?php echo $data["name"] ?></th>
        <th><?php echo $data["location"] ?></th>
        <th><?php  echo "<img src='images/tourist/".$data['image_thumbnail']."'alt='' width='140px' height='100px' style='margin-top: 40px;'>"?></th>
        <th><?php echo $data["date"] ?></th>
        <th><?php echo $data["budget"] ?></th>
        <th><?php echo $data["note"] ?></th>
    </div>
<th>
<button type="button" class="btn btn-info " data-toggle="modal" data-target="#myModal">แก้ไข</button>
        <button type="button" class="btn btn-danger ">ลบ</a>
</th>
    </tr>
 <?php } ?>

</table>
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>
