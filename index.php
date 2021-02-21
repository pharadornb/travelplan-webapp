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

    <!-- search -->
    <div class="container mt-5">
        <?php include 'php/search.php'?>
    </div>

    <!-- card -->
    <div id="travel"></div>
    <div class="container mt-2">
        <h3 class="d-flex justify-content-center font-weight-bold">+ สถานที่ท่องเที่ยวที่น่าสนใจ +</h3>
    </div>

    <div class="container-fluid mt-3 mb-4">
        <?php include 'php/card.php'?>
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