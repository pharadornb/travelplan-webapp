<!DOCTYPE html>
<html lang="en">
<head>
  <title>detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>


<?php
  $id =$_GET["id"];
 $hostname = "mysql-19614-0.cloudclusters.net:19614";
 $username = "TravelPlan2021";
 $password = "jYtKQ2Y1VZz1";
 $database = "TravelPlan2021";

 //Connect dB
 $conn = new mysqli($hostname, $username, $password, $database);
 $conn->query("SET NAMES UTF8");

 //Check dB die
 if ($conn->connect_error) {
     die('Could not connect: ' . $conn->connect_error);
 }
 $sql = "SELECT * FROM tourist_attractions WHERE id = '$id' ";
 $result = $conn->query($sql);

//echo $sql;
while($row = mysqli_fetch_assoc($result)) {
 //echo $row["name"].$row["location"].$row["latitude"].$row["logitude"];

        echo "<div class='text-center mb-4'>";
        echo" <h2>".$row['name']."</h2>";
        echo"<p>".$row['location']."</p> ";      
      

      
        echo" <div class='container'>";
        
        echo "<img src='images/tourist/".$row['image_thumbnail']."'class='img-rounded' alt='Cinque Terre' width='500' height='350'> ";
        echo "</div>";
        echo "<br /><br /><br />";
     
        echo"  <div class='container'>";
        echo "<h4>".$row['description']."</h4>";
        echo "</div>";


        echo "</div>";
            
}

 $conn->close();

 ?>

 </body>
 </html>