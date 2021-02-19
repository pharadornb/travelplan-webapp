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

    <!--interest of tourist-->
    <h4>
        <center><b>สถานที่ท่องเที่ยวที่น่าสนใจ</b></center>
    </h4><BR></BR>

    <!--card1-->
    <div class="container">
        <div class="row">
            <div class="col col-sm-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="images/tourist/KohChang.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">เกาะช้าง</h5>
                        <h6><b>ชลบุรี ประเทศไทย</b></h6>
                        <p class="card-text">ในช่วงฤดูที่เป็นต้นฝนปลายร้อนแบบนี้ อากาศก็เหมาะเป็นอย่างมากในการเดินทางไปตากลมชมวิวไกลสุดลูกหูลูกตาที่ทะเล</p>
                        <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <!--card2-->
            <div class="col col-sm-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="images/tourist/Khaoyai.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">อุทยานแห่งชาติเขาใหญ่</h5>
                        <h6><b>นครราชสีมา ประเทศไทย</b></h6>
                        <p class="card-text">อุทยานแห่งชาติเขาใหญ่หรือถนนธนะรัชต์ เป็นเส้นทางแห่งความสุขมีเสน่ห์ดึงดูดใจ</p>
                        <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <!--card3-->
            <div class="col col-sm-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="images/tourist/DoiInthanon.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">อุทยานแห่งชาติดอยอินทนนท์</h5>
                        <h6><b>เชียงใหม่ ประเทศไทย</b></h6>
                        <p class="card-text">ดอยอินทนนท์ อยู่ในจังหวัดเชียงใหม่ เป็นยอดเขาที่สูงที่สุดของประเทศไทย</p>
                        <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <!--card4-->
            <div class="col col-sm-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="images/tourist/Kohlarn.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">เกาะล้าน</h5>
                        <h6><b>พัทยา ชลบุรี ประเทศไทย</b></h6>
                        <p class="card-text">ทะเลแสนสวยน้ำใสแห่งพัทยา ที่อยู่ใกล้กรุงเทพเพียง 2 ชั่วโมง เป็นเกาะยอดนิยมของนักท่องเที่ยวที่ชื่นชอบ</p>
                        <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <!--card5-->
            <div class="col col-sm-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="images/tourist/KohChang.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">อุทยานแห่งชาติภูกระดึง</h5>
                        <h6><b>เลย ประเทศไทย</b></h6>
                        <p class="card-text">ภูกระดึง เป็นอุทยานแห่งชาติลำดับที่ 2 ของประเทศไทย ตั้งอยู่ในท้องที่ตำบลศรีฐาน อำเภอภูกระดึง จังหวัดเลย</p>
                        <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <!--card6-->
            <div class="col col-sm-4">
                <div class="card" style="width: 100%">
                    <img class="card-img-top" src="images/tourist/Lamsingh.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">หาดแหลมสิงห์</h5>
                        <h6><b>จันทบุรี ประเทศไทย</b></h6>
                        <p class="card-text">ชายหาดเงียบสงบของจันทบุรีที่เต็มไปด้วยโรงแรมรีสอร์ตน่าพักและร้านอาหารริมทะเล</p>
                        <a href="#" class="btn btn-primary">เพิ่มเติม</a>
                    </div>
                </div>
            </div>
            <!--card7-->
        <div class="col col-sm-4">
            <div class="card" style="width: 100%">
                <img class="card-img-top" src="images/tourist/Doisuthep.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">อุทยานแหงชาติดอยสุเทพ</h5>
                  <h6><b>เชียงใหม่ ประเทศไทย</b></h6>
                  <p class="card-text">วัดพระธาตุดอยสุเทพราชวรวิหาร เป็นวัดที่มีความสำคัญมากที่สุดของจังหวัดเชียงใหม่ ตั้งอยู่บนดอยสุเทพ ใกล้กับตัวเมืองเชียงใหม่  </p>
                  <a href="#" class="btn btn-primary">อ่านรายละเอียด</a>
                </div>
            </div>
        </div> 
        <!--card8-->
        <div class="col col-sm-4">
            <div class="card" style="width: 100%">
                <img class="card-img-top" src="images/tourist/Kohkood.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">เกาะกูด</h5>
                  <h6><b>ตราด ประเทศไทย</b></h6>
                  <p class="card-text">เกาะกูด มีขนาดใหญ่เป็นอันดับสองในตราด รองจากเกาะช้าง ได้รับการ ขนานนามว่า "อันดามันแห่งทะเลตะวันออก" </p>
                  <a href="#" class="btn btn-primary">อ่านรายละเอียด</a>
                </div>
            </div>
        </div>   
          <!--card9-->
        <div class="col col-sm-4">
            <div class="card" style="width: 100%">
                <img class="card-img-top" src="images/tourist/Chiangkan.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">เชียงคาน</h5>
                  <h6><b>เลย ประเทศไทย</b></h6>
                  <p class="card-text">เชียงคาน เมืองเล็กๆริมแม่น้ำโขงสุดชายแดนไทยเป็นอำเภอหนึ่งในจังหวัดเลย ที่คงยังคงไว้ซึ่งวัฒนธรรม ขนบประเพณี </p>
                  <a href="#" class="btn btn-primary">อ่านรายละเอียด</a>
                </div>
            </div>
        </div>  
        </div>
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