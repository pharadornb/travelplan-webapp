<?php SESSION_START(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php include 'php/header.php'?>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<?php



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

$name = $_SESSION["name"];
$location = $_SESSION["location"];
$image =$_SESSION["image"];
$date = $_POST["day"];
$budget = $_POST["budget"];
$note = $_POST["note"];

$sql = "INSERT INTO  myplan (name,location,image_thumbnail,date,budget,note)
VALUES ('$name','$location','$image','$date','$budget','$note')" ;

$rs=$conn->query($sql);



echo "<script>";
                echo "setTimeout(function(){
                      swal({
                          title:'เพิ่มข้อมูลลงแพลนท่องเที่ยวสำเร็จ!!',
                          text:'ระบบวางแผนการท่องเที่ยว',
                          type:'success'
                      },function(){
                          window.location = 'travel_plan.php';
                      }) ; 
                    },1000) ;";

                echo "</script>";

$conn->close();





?>

</body>
</html>

