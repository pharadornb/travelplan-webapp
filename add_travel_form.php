
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

   $sql = "SELECT * FROM tourist_attractions WHERE id = '$id'";
   $result = mysqli_query($conn, $sql);
  
   while($row = mysqli_fetch_assoc($result)) {
    $_SESSION["image"] = $row["image_thumbnail"];
       $_SESSION["name"]  = $row["name"];
       $_SESSION["location"]  = $row["location"];
       $_SESSION["id"] = $row["id"];
     
    
      
   }
?>
<br /><br />
 <center>
    <div class="col-sm-8" >
            <div class="card text-center">
    
                <div class="card-header">
                    <h3>เพิ่มลงแพลนท่องเที่ยว</h3>
                 </div>
                <div class="card-body">
                <div class="row">
                <div class="col-sm-5"><?php  echo "<img src='images/tourist/".$_SESSION["image"]."'alt='' width='350px' height='250px' style='margin-top: 40px;'>"?> </div>
                
                <div class="col-sm-7">
                <form method="post" action="add_travel.php">  
                <br />
                <div class="text-center">
                <div class="row">  
                   <div class="col-sm-4">        
                    <th>ชื่อสถานที่ : </th>
                    </div>
                    <div class="col-sm-4">       
                    <td><input type="text" name="name" value ="<?php echo $_SESSION["name"];?>"></td> 
                    </div>  
                </div>  
                <br />
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>ตำแหน่งที่ตั้ง : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><input type="text" name="location" value ="<?php echo $_SESSION["location"];?>"></td>
                    </div> 
                </div>  
                <br />
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>ชื่อรูปภาพ : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><input type="text" name="image" value ="<?php echo $_SESSION["image"];?>"/></td>
                    </div>  
                </div>
                <br />
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>วันที่เดินทาง : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><input type="date" name="day"  ></td>
                    </div> 
                </div>
                <br />
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>งบประมาณการเดินทาง : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><input type="text" name="budget" ></td>
                    </div>  
                </div>   
                <br />
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>NOTE : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><textarea  name="note" ></textarea></td>
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
                <br />
                </div>
            </div>
        </div>
    </div>


    <div class="mt-4">
        <?php include 'php/footer.php'?>
    </div>
  
</body>
</html>




