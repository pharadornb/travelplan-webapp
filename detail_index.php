<?php SESSION_START(); ?>
<?php
    $id = $_GET["id"];
    include 'php/dBver2.php';

    $sql = "SELECT * FROM tourist_attractions WHERE id = '$id' ";
    //$conn red tag. don't worry php stupid
    $result = $conn->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[รายละเอียด]-ระบบวางแผนท่องเที่ยว</title>

    <!-- css -->
    <?php include 'php/header.php' ?>

</head>
<body>

   <!-- navbar -->
 <!-- navbar -->
 <?php include 'php/navbar.php'?>


    <?php
    
        //echo $sql;
        while ($row = mysqli_fetch_assoc($result)) {
            //echo $row["name"].$row["location"].$row["latitude"].$row["logitude"];

            echo "<div class='text-center mb-4'>" . "<br />";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . "<b>" . $row['location'] . "<b>" . "</p>" . "<br />";

            echo " <div class='container'>";

            echo "<img src='images/tourist/" . $row['image_thumbnail'] . "'class='img-rounded' alt='Cinque Terre' width='700' height='400'> ";
            echo "</div>";
            echo "<br /><br /><br />";

            echo "<div class='container'>";
            echo "<h4 align = 'justify'>" . $row['description'] . "</h4>";
            echo "</div>";

            echo "</div>";
        }

        $conn->close();

    include 'php/footer.php';
    include 'php/script.php';
    ?>

</body>
</html>