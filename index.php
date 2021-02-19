<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>[หน้าแรก]-ระบบวางแผนท่องเที่ยว</title>

    <!--style css-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@200&display=swap" rel="stylesheet">
    <style>
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
    <div class="container mt-4 mb-4">
        <?php include 'php/search.php'?>
    </div>

    <!-- topic -->
    <div class="container mt-4 mb-2">
        <h4><center><b>+ สถานที่ท่องเที่ยวที่น่าสนใจ +</b></center></h4>
    </div>

    <div class="container mt-4 mb-2">
        <?php include 'php/card.php'?>
    </div>




    <BR><BR>

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
        

    <!--javascript-->
    <script href="script/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>