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

    <!-- topic card -->
    <div class="container mt-5">
        <h3 class="d-flex justify-content-center font-weight-bold">+ สถานที่ท่องเที่ยวที่น่าสนใจ +</h3>
    </div>

    <!-- card -->
    <div class="container-fluid mt-3 mb-5">
        <?php include 'php/card.php'?>
    </div>


        <center>
            <iframe width="800" height="400"
                src="https://www.youtube.com/embed/sxXcudQKU64"></iframe>
        </center></BR></BR>  
        
        
        <h2><center>ติดต่อเรา</center></h2>
        
        
            <table style="width: 100%" align="center" com-md-3>
        <tr>
            <th><br><img src ="img/C3.png"  width="100 px"></th>
            <th><br><img src ="img/C3.png"  width="100 px"></th>
            <th><br><img src ="img/C4.png"  width="100 px"></th>
            <th><br><img src ="img/C4.png"  width="100 px"></th>
            
         </tr>
        
         <tr>
            <th><h5>นายภราดร บุญร่วม</h5>นักพัฒนา</th>
            <th><h5>นายชิดชันษา วรชิน</h5>นักพัฒนา</th>
            <th><h5>นางสาววราพรรณ วัฒนศิริสุวรรณ</h5>นักพัฒนา</th>
            <th><h5>นางสาวณัชชา พิทักษ์ธีรังกูร</h5>นักพัฒนา</th>
        
         </tr>
        </table>
        
        
        <footer class="footer">
            <div class="container">
                <div class ="row">
                    <div class="footer-col">
        
                       <h4><center>TravelPlan2563</h4></center>
                
                    </div>
        </footer>

    <!-- script -->
    <?php include 'php/footer.php'?>

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