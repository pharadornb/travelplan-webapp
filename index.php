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
    <?php include 'php/navbar.php'?>

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

</body>
</html>