<?php
    SESSION_START();
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
    <title>[รายละเอียด]-ระบบวางแผนท่องเที่ยว</title>

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
            <li class="nav-item ">
                <a class="nav-link" href="index_login.php">&nbsp;หน้าแรก</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="travel_plan.php">&nbsp;แพลนของฉัน</a>
            </li>
           
            <li class="nav-item">
            <?php echo "<a class='nav-link' href='tourist.php?id=".$_SESSION['user_id']."'> &nbsp;บัญชีผู้ใช้</a>"; ?>
            
            </li>
            <li class="nav-item ist-group-item-action list-group-item-danger mr-1 mb-1">
                <a class="nav-link" href="index.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
            </li>
        </ul>
    </div>
</nav>

    <?php
    
        //echo $sql;
        while ($row = mysqli_fetch_assoc($result)) {
            //echo $row["name"].$row["location"].$row["latitude"].$row["logitude"];

            echo "<div class='text-center mb-4'>" . "<br />";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . "<b>" . $row['location'] . "<b>" . "</p>" . "<br />";

            echo " <div class='container'>";

            echo "<img src='images/tourist/" . $row['image_thumbnail'] . "'class='img-rounded' alt='Cinque Terre' width='700' height='400'> ";
            echo "</div>";
            echo "<br /><br /><br />";

            echo "<div class='container'>";
            echo "<h4 align = 'justify'>" . $row['description'] . "</h4>";
            echo "</div>";

            echo "</div>";
        }

        $conn->close();

    ?>


  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>



    <?php include 'php/footer.php';
    include 'php/script.php';  ?>
</body>
</html>