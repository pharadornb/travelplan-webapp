<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[หน้าแรก]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php'?>

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
                <a class="nav-link" href="index.php">&nbsp;หน้าแรก</a>
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
            <li class="nav-item ist-group-item-action list-group-item-success mr-1 mb-1">  

           
       
                <a class="nav-link" href="login.php"  data-toggle="modal" data-target="#exampleModal">&nbsp;<i class="fas fa-user"></i>&nbsp;เข้าสู่ระบบ</a>
            </li>
            <li class="nav-item ist-group-item-action list-group-item-info mr-1 mb-1">
                <a class="nav-link" href="register1.php"  >&nbsp;<i class="fas fa-user-plus"></i>&nbsp;สมัครสมาชิก</a>
            </li>
        </ul>
    </div>
</nav>
       
    <!-- carousel -->
    <?php include 'php/carousel.php'?>

    <!-- card -->
<!--    <div id="travel"></div>-->
<!--    <div class="container mt-5">-->
<!--        <h3 class="d-flex justify-content-center font-weight-bold"> + เลือกที่ใช่สำหรับคุณ + </h3>-->
<!--    </div>-->
<!---->
<!--    -->
<!--    <div class="container mt-2">-->
<!--        --><?php //include 'php/search.php' ?>
<!--    </div>-->

    <!-- card -->
    <div id="travel"></div>
    <div class="container mt-5">
        <h3 class="d-flex justify-content-center font-weight-bold">+ สถานที่ท่องเที่ยวอัพเดตใหม่ +</h3>
    </div>

    <div class="container-fluid mt-3 mb-4">
        <?php include 'php/card.php'?>
    </div>

    <div class="container-fluid mt-3 mb-4">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php
                $sql2 = "SELECT * FROM tourist_attractions WHERE allow = 'on' ORDER BY created_at DESC";
                $result = mysqli_query($conn, $sql2);
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                    $i++;
                }
                $totalpage = ceil($i/6);
                for($j=1; $j<=$totalpage;$j++){
                    echo "<li class='page-item'><a class='page-link' href='index.php?page=".$j."' class='btn btn-success mr-1'>$j</a></li>";
                }
                ?>
            </ul>
        </nav>
    </div>

    <!-- youtube -->
    <div id="media"></div>
    <div class="container-fluid mt-4">
        <?php include 'php/youtude.php'?>
    </div>

    <!-- contact -->
    <div id="contact"></div>
    <div class="container-fluid mt-5" >
        <h3 class="font-weight-bold d-flex justify-content-center">+ ติดต่อเรา +</h3>
    </div>

    <div class="container-fluid mt-5" >
        <?php include 'php/dev.php'?>
    </div>

    <!-- footer -->
    <div class="mt-4">
        <?php include 'php/footer.php'?>
    </div>

    <!-- script -->
    <?php include 'php/script.php'?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>ระบบวางแผนท่องเที่ยว</h4> &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        

                                    <div class="mt-5" align="center">
                    <img src="images/logo/logo-application.png" alt="" width="120px" height="150px">

                    <form action="login.php" method="POST" style="max-width: 300px; margin: auto;">
                        <div class="form-group">
                            <h4 class="d-flex justify-content-center font-weight-bold mt-4">  + เข้าสู่ระบบ + </h4>
                            <input type="text" class="form-control mt-4" name="username" id="username" placeholder="ชื่อผู้ใช้"
                                maxlength="15" required>
                            <input type="password" class="form-control mt-2" name="password" id="password" placeholder="รหัสผ่าน"
                                maxlength="20" required>
                            <center><input type="submit" value="Login" name="login"
                                        class="bt-lg btn btn-primary mt-3 mb-2 btn-block"></center>
                            <a href="register1.php"><u>ยังไม่มีชื่อบัญชีผู้ใช้?</u></a>
                        </div>
                    </form>
                </div>
                          
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก
                        </button>

                       

                    </div>
                </div>
            </div>
        </div>

        
</body>
</html>