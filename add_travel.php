<?php SESSION_START(); ?>
<?php
    $id = $_GET["id"];
    include 'php/dBver2.php';

    $sql = "SELECT * FROM tourist_attractions WHERE id = '$id' ";
    //$conn red tag. don't worry php stupid
    $result = $conn->query($sql);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[รายละเอียดสถานที่ท่องเที่ยว]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php' ?>

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
            <?php echo "<a class='nav-link' href='tourist.php?id=".$_SESSION['user_id']."'> &nbsp;บัญชีผู้ใช้</a>"; ?>

            <li class="nav-item active">
                <a class="nav-link" href="add_travel.php">&nbsp;แพลนของฉัน</a>
            </li>

            </li>
            <li class="nav-item ist-group-item-action list-group-item-success mr-1 mb-1">
                <a class="nav-link" href="index.php">&nbsp;<i class="fas fa-user"></i>&nbsp;ออกจากระบบ</a>
            </li>
        </ul>
    </div>
</nav>

<body>
<br /><center><h3>แพลนของฉัน<h3></center><br />

<div class="container">
<a href="index_login.php" class="btn btn-success mb-3">เพิ่ม</a>


<table class = "table table-bordered table-stripted">
        <tr>
            <th>ลำดับที่</th>
            <th>ชื่อสถานที่</th>
            <th>ที่ตั้ง</th>
            <th>รูปภาพ</th>
            <th>จัดการข้อมูล</th>
        <tr> 
    </th>

    <tbody>

        <tr>
            <td>1</td>
            <td>aa</td>
            <td>korat</td>
            <td><img src = "images/tourist/Yamo.jpg" width=300px height=200px></td>

            <td>
                <button type="button" class="delete btn btn-danger" data-id="<?php echo $row['id']; ?>">ลบ</button>
                <button type="button" class="edit btn btn-primary" data-toggle="modal" data-target="#Editmodal" data-id="<?php echo $row['id']; ?>">แก้ไข</button>
            </td>

        </tr>
    </tbody>        
      
</table>
</center>
</body>

</html>
