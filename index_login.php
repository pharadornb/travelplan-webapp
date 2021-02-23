<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>


    </head>
    <meta charset="UTF-8">
    <title>[หน้าแรก]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php' ?>

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="travel_plan.php">&nbsp;แพลนของฉัน</a>
            </li>
            <li class="nav-item">

                <?php echo "<a class='nav-link' href='tourist.php?id=" . $_SESSION['user_id'] . "'> &nbsp;บัญชีผู้ใช้</a>"; ?>

            </li>
            <li class="nav-item ist-group-item-action list-group-item-danger mr-1 mb-1">
                <a class="nav-link" href="index.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
            </li>

        </ul>
    </div>
</nav>

<!-- carousel -->
<?php include 'php/carousel.php' ?>

<!-- search -->
<div class="container mt-2">
    <?php include 'php/search.php' ?>
</div>

<div class="container-fluid mt-1">
    <!-- card -->

    <div id="travel"></div>
    <div class="container mb-4">
        <h3 class="d-flex justify-content-center font-weight-bold">+ สถานที่ท่องเที่ยวที่น่าสนใจ +</h3>
    </div>

    <div class="container">
        <div class="row">

            <?php


            $hostname = "mysql-19614-0.cloudclusters.net:19614";
            $username = "TravelPlan2021";
            $password = "jYtKQ2Y1VZz1";
            $database = "TravelPlan2021";

            try {
                $conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection faild: " . $e->getMessage();
                exit;
            }

            if(isset($_GET['page']))
            {
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $num_per_page = 6;
            $start_from = ($page-1)*6;


            //select db
            $sql = "SELECT * FROM tourist_attractions WHERE allow = 'on' ORDER BY created_at DESC LIMIT $start_from, $num_per_page";

            $stmt = $conn->query($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //print_r($result);


            foreach ($result as $row) {

                // $id = $row['id'];
                // $name = $row['name'];
                //$location = $row['location'];
                // $description = $row['description'];
                // $images = $row['image_thumbnail'];

                echo "<div class='col-12 col-lg-4 col-md-6 mt-3'>";
                echo "<div class='card' style='width: 100%'>";
                echo "<img class='card-img-top img-fluid' src='images/tourist/" . $row['image_thumbnail'] . "'/>";
                echo "<div class='card-body'><center><h5 class='card-title font-weight-bold'>" . $row['name'] . "</h5></center>";
                echo "<h6 class='font-weight-bold'><i class='fas fa-thumbtack'></i>&nbsp;&nbsp;" . $row['location'] . "</h6>";
                echo "<p class='card-text text-desc-truncate'>" . $row['description'] . "</p>";
                //echo "<center><a href='detail.php?id=".$row['id']."'class='btn btn-primary' >เพิ่มเติม</a>&nbsp;&nbsp;&nbsp;<a href='add_travel_form.php?id=".$row['id']."'class='btn btn-primary'>เพิ่มลงแพลนท่องเที่ยว</a></center><br />";

                //echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal' onclick='show()'> เพิ่มเติม </button>&nbsp;&nbsp;&nbsp;<a href='add_travel_form.php?id=".$row['id']."'class='btn btn-primary'>เพิ่มลงแพลนท่องเที่ยว</a></center>";
                echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal1" . $row['id'] . "'> เพิ่มเติม </button>  &nbsp;&nbsp;&nbsp;
                <a href='add_travel_form.php?id=" . $row['id'] . "'class='btn btn-success'>เพิ่มลงแพลนท่องเที่ยว</a></center>";

                ?>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1<?php echo $row['id'] ?>" tabindex="-1"
                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">รายละเอียดสถานที่ท่องเที่ยว</h5>
                            </div>
                            <div class="modal-body">
                                <?php
                                echo "<div class='text-center mb-4'>";
                                echo "<h2>" . $row['name'] . "</h2>";
                                echo "<p>" . "<b>" . $row['location'] . "<b>" . "</p>";

                                echo " <div class='container'>";

                                echo "<img src='images/tourist/" . $row['image_thumbnail'] . "'class='img-rounded' alt='Cinque Terre' width='100%'> ";
                                echo "</div>";

                                echo "<div class='container mt-3'>";
                                echo "<h5 align = 'justify'>" . "<b>คำอธิบาย : </b>" . $row['description'] . "</h5>";
                                echo "</div>";

                                echo "</div>";

                                ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary btn-secondary pull-left"
                                        data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ปิด
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php echo "</div></div></div>";
            }
            ?>

        </div>
    </div>
</div>

<div class="container-fluid mt-3 mb-4">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
            $sql2 = "SELECT * FROM tourist_attractions WHERE allow = 'on' ORDER BY created_at DESC";

            $stmt = $conn->query($sql2);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            //print_r($result);
            $i=0;
            foreach ($result as $row) {
                $i++;
            }
            $totalpage = ceil($i/6);
            for($j=1; $j<=$totalpage;$j++){
                echo "<li class='page-item'><a class='page-link' href='index_login.php?page=".$j."' class='btn btn-success mr-1'>$j</a></li>";
            }
            ?>
        </ul>
    </nav>
</div>


    <!-- youtube -->
    <div id="media"></div>
    <div class="container-fluid mt-4">
        <?php include 'php/youtude.php' ?>
    </div>

    <!-- contact -->
    <div id="contact"></div>
    <div class="container-fluid mt-5">
        <center><h3 class="font-weight-bold">+ ติดต่อเรา +</h3></center>
    </div>

    <div class="container-fluid mt-5">
        <?php include 'php/dev.php' ?>
    </div>

    <!-- footer -->
    <div class="mt-4">
        <?php include 'php/footer.php' ?>
    </div>

<!--    <script src="javascript/script.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->

    <!-- script -->
    <?php include 'php/script.php' ?>

    <script type="text/javascript">
        //card hover jquery
        $(document).ready(function () {
            console.log("document is ready");
            $(".card").hover(
                function () {
                    $(this).addClass('shadow-lg').css('cursor', 'pointer');
                }, function () {
                    $(this).removeClass('shadow-lg');
                }
            );
        });
    </script>

</body>
</html>