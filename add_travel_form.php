
<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[เพิ่มแพลนท่องเที่ยว]-ระบบวางแผนท่องเที่ยว</title>


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
        <li class="nav-item active">
                <a class="nav-link" href="index_login.php">&nbsp;เพิ่มสถานที่ลงแพลน</a>
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

<?php
    include 'php/dbconnect.php';
    
   //Connect dB
   $conn = new mysqli($hostname, $username, $password, $database);
   $conn->query("SET NAMES UTF8");
  
   //Check dB die
   if ($conn->connect_error) {
       die('Could not connect: ' . $conn->connect_error);
   }
   $id = $_GET['id'];

   $sql = "SELECT * FROM tourist_attractions WHERE id = '$id'";
   $result = mysqli_query($conn, $sql);
  
   while($row = mysqli_fetch_assoc($result)) {
    $_SESSION["image"] = $row["image_thumbnail"];
       $_SESSION["name"]  = $row["name"];
       $_SESSION["location"]  = $row["location"];
       $_SESSION["id"] = $row["id"];
   }

?>
    <center>
        <div class="container-fluid">
        <div class="col-sm-8">
            <div class="card text-center mt-5">
                <div class="card-header">
                    <h3><b>เพิ่มลงแพลนท่องเที่ยว</b></h3>
                 </div>
                <div class="card-body">
                    <div class="row" align="center">
                        <div class="col-lg-6 mt-3" ><?php  echo "<img src='images/tourist/".$_SESSION["image"]."'alt='' width='80%' class='img-responsive' >"?> </div>
                            <div class="col-lg-6 ">
                                <form method="post" action="add_travel.php">

                                    <div class="row">
                                        <div class="col-12 mt-3" align="left">
                                            <label for="name" class="form-label" style="font-weight: bold">ชื่อสถานที่ :</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="name" class="form-control" value ="<?php echo $_SESSION["name"];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3" align="left">
                                            <label for="name" class="form-label" style="font-weight: bold">ตำแหน่งที่ตั้ง :</label>
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="name" class="form-control" value ="<?php echo $_SESSION["location"];?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3" align="left">
                                            <label for="name" class="form-label" style="font-weight: bold">วันที่เดินทาง : </label>
                                        </div>
                                        <div class="col-12">
                                            <input type="date" name="day"  class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3" align="left">
                                            <label for="name" class="form-label" style="font-weight: bold">งบประมาณการเดินทาง : </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-money-bill-alt"></i></span>
                                                </div>
                                                <input type="number" name="budget"  class="form-control" required>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">บาท</span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-3" align="left">
                                            <label for="name" class="form-label" style="font-weight: bold">บันทึกเพิ่มเติม : </label>
                                        </div>
                                        <div class="col-12" align="center">
                                            <textarea  name="note" rows="5" cols="500" class="form-control" required></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
                
                <div class="card-footer text-muted"><br />
                <input type="submit" name="submit" value="บันทึก"  class="btn btn-primary"> 
                
                <a href="index_login.php" input type="reset" class="btn btn-danger">ยกเลิก</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </center>
        <?php include 'php/footer.php'; include 'php/script.php'; ?>
</body>
</html>




