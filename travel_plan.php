<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[แพลนของฉัน]-ระบบวางแผนท่องเที่ยว</title>


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
                <a class="nav-link" href="index_login.php">&nbsp;เพิ่มสถานที่ลงแพลน</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="travel_plan.php">&nbsp;แพลนของฉัน</a>
            </li>

<!--            <a href="index_login.php" input type="button" class="btn btn-success mt-3 mb-3 ml-2" >เพิ่มสถานที่ท่องเที่ยว</a>-->

            <li class="nav-item ">
                <?php echo "<a class='nav-link' href='tourist.php?id=".$_SESSION['user_id']."'> &nbsp;บัญชีผู้ใช้</a>"; ?>

            </li>
            <li class="nav-item ist-group-item-action list-group-item-danger mr-1 mb-1">
                <a class="nav-link" href="index.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
            </li>

        </ul>
    </div>
</nav>



<!--$_SESSION['user_id']-->


<?php

include 'php/dbconnect.php';

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo"Connection faild: ".$e->getMessage();
    exit;
}


 
//select db
$sql = "SELECT * FROM myplan WHERE users_id = " . $_SESSION['user_id'] ;

$stmt = $conn ->query($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

//print_r($result);
      
?>

<style>
    body {
        font-family: 'Kanit', sans-serif;
    }
</style>

<center>
<br />
    <h3><b>แพลนของฉัน</b></h3>
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


<table class="container table" width="860px">
  
  <tr>
  
    <th>ชื่อสถานที่</th>
    <th>ตำแหน่งที่ตั้ง</th>
    <th>ชื่อรูปภาพ</th>
    <th>วันที่เดินทาง</th>
    <th>งบประมาณการเดินทาง</th>
    <th>บันทึกเพิ่มเติม</th>
    <th>จัดการข้อมูล</th>
  
  </tr>
 
  <tr>  <!--เรียกค่าวนลูป-->

  
  <?php foreach($result as $val) {?>

 <tr><div class = 'text-center'>
 <th><?php echo $val["name"]?></th>
 <th><?php echo $val["location"]?></th>
 <th><?php  echo "<img src='images/tourist/".$val['image_thumbnail']."'alt='' width='140px' height='100px' style='margin-top: 40px;'>";?></th>
 <th><?php echo $val["date"]?> &nbsp;</th> 
 <th><?php echo $val["budget"]?></th>
 <th><?php echo $val["note"]?></th>
 </div>
<th>

  
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $val['ID']?>">
      แก้ไข
     </button>   
    
     <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1<?php echo $val['ID']?>">
     ลบ
     </button>   
    

    &nbsp;&nbsp;
     
     </th>

    </tr>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?php echo $val['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>แก้ไขข้อมูล</h4> &nbsp;&nbsp;&nbsp;&nbsp;
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form role="form" action="edit_travel.php?id=<?php echo $val["ID"]?>" method="POST">

            <div class="form-group">
              <label for="date"><span class="glyphicon glyphicon-user"></span>วันที่เดินทาง :</label>
              <input type="date" class="form-control" name="date" id="date" value="<?php echo $val["date"]?>">
            </div>

            <div class="form-group">
              <label for="budget"><span class="glyphicon glyphicon-user"></span>งบประมาณการเดินทาง :</label>
              <input type="text" class="form-control" name="budget" id="budget" value="<?php echo $val["budget"]?>">
            </div>


            <div class="form-group">
              <label for="note"><span class="glyphicon glyphicon-user"></span>NOTE :</label>
              <input type="text" class="form-control" name="note" id="note" value="<?php echo $val["note"]?>">
            </div>


            <button type="submit" class="btn btn-primary btn-primary btn-block"><span class="glyphicon glyphicon-off"></span>แก้ไข</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
         
         
        </div>
      </div>
    </div>
  </div>
</div>


   <!-- Modal -->
   <div class="modal fade" id="exampleModal1<?php echo $val['ID'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ลบข้อมูล</h5>
       
      </div>
      <div class="modal-body">
                
          คุณต้องการลบข้อมูลแพลนท่องเที่ยวสถานที่ชื่อ  " <?php echo $val["name"]?>" หรือไม่ ?


      </div>
      <div class="modal-footer">
      <button type="submit" class="btn btn-secondary btn-secondary pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก</button>
      <?php echo '<a href="delete_travel.php?id=' . $val['ID'] .'" input type="button" class="btn btn-danger" onclick="return c('.$val['ID'].')">ลบข้อมูล</a></td>'; ?>
        
      </div>
      <?php } ?>
    </div>
  </div>
</div>


</table>
   

<div class="mt-4">
        <?php include 'php/footer.php'?>
    </div>
    
</body>
</html>
