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
            <li class="nav-item">
        
            <?php echo "<a class='nav-link' href='tourist.php?id=".$_SESSION['user_id']."'> &nbsp;บัญชีผู้ใช้</a>"; ?>
            
            </li>
            <li class="nav-item ist-group-item-action list-group-item-success mr-1 mb-1">
                <a class="nav-link" href="login.php">&nbsp;<i class="fas fa-user"></i>&nbsp;ออกจากระบบ</a>
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

    <!-- card -->
    <div id="travel"></div>
    <div class="container mt-4">
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

</body>
</html>