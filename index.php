<!DOCTYPE html>
<html lang="en">
<head>

  <title>[หน้าแรก]-ระบบวางแผนท่องเที่ยว</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- bom add -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../beta/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="../beta/css/animate.css">
  <link rel="stylesheet" href="../beta/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../beta/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../beta/css/magnific-popup.css">
  <link rel="stylesheet" href="../beta/css/aos.css">
  <link rel="stylesheet" href="../beta/css/ionicons.min.css">
  <link rel="stylesheet" href="../beta/css/bootstrap-datetimepicker.min.css">
  <link rel="stylesheet" href="../beta/css/nouislider.css">
  <link rel="stylesheet" href="../beta/css/flaticon.css">
  <link rel="stylesheet" href="../beta/css/icomoon.css">
  <link rel="stylesheet" href="../beta/css/style.css">


  <style>
   

    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/B1.png" alt="Image">
         
      </div>

      <div class="item">
        <img src="img/B2.png" alt="Image">
        
      </div>
      <div class="item">
        <img src="img/B3.png" alt="Image">
        
      </div>
      <div class="item">
        <img src="img/B4.png" alt="Image">
        
      </div>
      <div class="item">
        <img src="img/B5.png" alt="Image">
        
      </div>
      <div class="item">
        <img src="img/B6.png" alt="Image">
        
      </div>
      <div class="item">
        <img src="img/B7.png" alt="Image">
        
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
   

</div>
  
<div class="container text-center">    
  <h3>TravelPlaning</h3><br>

  <div class="container">    
  <div class="row">
    <?php  include 'include/config_db.php';
    
    

     $sql = "SELECT * FROM tourist_attractions ORDER BY id ";
      $result = mysqli_query($conn, $sql);

    
      while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
    
       

       
        echo "<div class='col-sm-4'>";
        echo "<div class='panel panel-primary'>";
        echo "<div class='panel-heading'>".$row['name']."</div>";
        echo "<div class='panel-body'><img src='img/" .$row['image_thumbnail']. 
        "'width='300' height='250' ></div>" ;
    

        echo "<div class='panel-footer'>".$row['location']."</div>";
        echo "<button class='btn btn-primary my-2 my-sm-0' type='submit'>Detail</button>";
         echo"</div> </div>";

        
    
        
        echo "</td>";
        
        echo "</tr>";
         }
       ?>



    
       

 

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

<nav>
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo">วางแผนท่องเที่ยว</label>
        <ul>
            <li><a href="#">หน้าแรก</a></li>
            <li><a href="#">สถานที่</a></li>
            <li><a href="#">ทริป</a></li>
            <li><a href="#">ติดต่อเรา</a></li>
            <li><a class="active" href="#">เข้าสู๋ระบบ</a></li>
        </ul>
    </nav>
    <section></section>
