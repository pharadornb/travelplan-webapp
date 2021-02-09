<!DOCTYPE html>
<html lang="en">
<head>

  <title>TravelPlaning</title>

  <?php include 'header.php';?>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
<?php include 'navbar.php';?>


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
