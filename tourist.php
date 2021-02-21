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
        <li class="nav-item ">
            <a class="nav-link" href="add_travel.php">&nbsp;แพลนของฉัน</a>
        </li>
        
        <li class="nav-item active">
            <?php echo "<a class='nav-link' href='tourist.php?id=".$_SESSION['user_id']."'> &nbsp;บัญชีผู้ใช้</a>"; ?>
            
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
       $name  = $row["name"];
       $email  = $row["email"];
       $username  = $row["username"];
       $birth  = $row["birthday"];
       $pass  = $row["password"];
       $p = strlen($pass);   //หาความยาวของพาสเวิด
      
   }
    // echo "<img src='images/userphoto/".$image."'>";

    
?>

    <br /><br />
   <center>
    <div class="col-sm-8" >
            <div class="card text-center">
  
                <div class="card-header">
                    <h3>บัญชีผู้ใช้</h3>
                 </div>
                <div class="card-body">
                <div class="row">
                <div class="col-sm-4"><?php  echo "<img src='images/userphoto/".$image."'alt='' width='250px' height='250px' style='margin-top: 40px;'>"?> </div>
                
                <div class="col-sm-8">
                <br /><br /><br />
                <div class="text-center">
                <div class="row">  
                   <div class="col-sm-4">        
                    <th>ชื่อผู้ใช้งาน : </th>
                    </div>
                    <div class="col-sm-4">       
                    <td><?php echo $name?></td> 
                    </div>  
                </div>  
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>อีเมลล์ : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><?php echo $email?></td>
                    </div> 
                </div>  
            
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>วันเกิด : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><?php echo $birth ?></td>
                    </div>  
                </div>
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>Username : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><?php echo $username?></td>
                    </div> 
                </div>
                <div class="row">  
                    <div class="col-sm-4">        
                            <th>Password : </th>
                    </div> 
                    <div class="col-sm-4">       
                    <td><?php for($i=1;$i<=$p;$i++){
                        echo "*";
                        }
                        ?></td>
                    </div>  
                </div>                         
                </div>           
                </div>
                        
                       
                </div>
                </div>
                </div>

                <div class="card-footer text-muted">
                <a href="edit_user.php" class="btn btn-primary">แก้ไขข้อมูล</a>
                </div>
            </div>
        </div>
    </div>

</center>
    <div class="mt-4">
        <?php include 'php/footer.php'?>
    </div>
    
</body>
</html>