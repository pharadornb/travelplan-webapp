<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[หน้าแรก]-ระบบวางแผนท่องเที่ยว</title>

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
    <a href="index.php"><img src="images/logo/logo-application.png" width="35px"></a>&nbsp;&nbsp;
    <a class="navbar-brand" href="index.php">ระบบวางแผนท่องเที่ยว(Travel Planing)</a>
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
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#media">&nbsp;สื่อประชาสัมพันธ์</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">&nbsp;ติดต่อเรา</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_travel.php">&nbsp;แพลนของฉัน</a>
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

    <!-- carousel -->
    <?php include 'php/carousel.php'?>

    <!-- search -->
    <div class="container mt-2">
        <?php include 'php/search.php'?>
    </div>
    <div class="container-fluid mt-3 mb-4">
    <!-- card -->
    
     <div id="travel"></div>
    <div class="container mt-2">
        <h3 class="d-flex justify-content-center font-weight-bold">+ สถานที่ท่องเที่ยวที่น่าสนใจ +</h3>
    </div>

    <div class="container">
    <div class="row">

       <?php

        include 'php/dBver1.php';

        $sql = "SELECT * FROM tourist_attractions ORDER BY id ";
        //$conn red tag. don't worry php stupid
        $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)) {

            echo "<div class='col-12 col-lg-4 col-md-6 mt-3'>";
                echo "<div class='card' style='width: 100%'>";
                    echo "<img class='card-img-top img-fluid' src='images/tourist/" .$row['image_thumbnail']. "'/>" ;
                        echo "<div class='card-body'> <center><h5 class='card-title font-weight-bold'>" .$row['name']. "</h5></center>";
                        echo "<h6 class='font-weight-bold'><i class='fas fa-thumbtack'></i>&nbsp;&nbsp;" . $row['location']. "</h6>";
                        echo "<p class='card-text text-desc-truncate'>" . $row['description']. "</p>";
                        echo "<center><a href='detail.php?id=".$row['id']."'class='btn btn-primary'>เพิ่มเติม</a>&nbsp;&nbsp;&nbsp;<a href='add_travel.php?id=".$row['id']."'class='btn btn-primary'>เพิ่มลงแพลนท่องเที่ยว</a></center><br />";
                        echo "</div></div></div>";
                      
            }
        ?>

    </div>
</div>

   
    </div>

    <!-- youtube -->
    <div id="media"></div>
    <div class="container-fluid mt-4">
        <?php include 'php/youtude.php'?>
    </div>

    <!-- contact -->
    <div id="contact"></div>
    <div class="container-fluid mt-5" >
        <center><h3 class="font-weight-bold">+ ติดต่อเรา +</h3></center>
    </div>

    <div class="container-fluid mt-5" >
        <?php include 'php/dev.php'?>
    </div>

    <!-- footer -->
    <div class="mt-4">
        <?php include 'php/footer.php'?>
    </div>

    <script src="javascript/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        //card hover jquery
        $(document).ready(function() {
            console.log("document is ready");
            $(".card").hover(
                function() {
                    $(this).addClass('shadow-lg').css('cursor', 'pointer');
                }, function() {
                    $(this).removeClass('shadow-lg');
                }
            );
        });
    </script>

<!-- script -->
<?php include 'php/script.php'?>
</body>
</html>