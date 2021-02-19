<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>[หน้าแรก]-ระบบวางแผนท่องเที่ยว</title>


    <!-- css -->
    <?php include 'php/header.php'?>

    <style type="text/css">
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
    </style>

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
    <div class="container mt-5">
        <h3 class="d-flex justify-content-center font-weight-bold">+ สถานที่ท่องเที่ยวที่น่าสนใจ +</h3>
    </div>

    <div class="container-fluid mt-3 mb-5">
        <?php include 'php/card.php'?>
    </div>

    <!-- youtube -->
    <div class="container-fluid mt-5">
        <?php include 'php/youtude.php'?>
    </div>

    <!-- contact -->
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
        //toggle
        $(function(){
            $(".toggle").on("click", function(){

                if($(".item").hasClass("active")){
                    $(".item").removeClass("active");
                    $(this).find("a").html("<i class='fas fa-bars'></i>");
                }else{
                    $(".item").addClass("active");
                    $(this).find("a").html("<i class='fas fa-times'></i>");
                }
            })
        });
    </script>

    <script type="text/javascript">
        //card hover
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