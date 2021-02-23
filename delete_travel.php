<?php SESSION_START(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<?php


include 'php/dbconnect.php';

//Connect dB
$conn = new mysqli($hostname, $username, $password, $database);
$conn->query("SET NAMES UTF8");

//Check dB die

if ($conn->connect_error){
    die('Could not connect:'.$conn->connect_error);
    }
    
    if($_REQUEST['id'] != "") //ถ้า ค่า del_id ไม่เท่ากับค่าว่างเปล่า
{
   $id = $_REQUEST['id'];
   $sql= "DELETE FROM myplan WHERE ID = '$id';";
 $rs=$conn->query($sql);
  


 echo "<script>";
 echo "setTimeout(function(){
       swal({
           title:'ลบข้อมูลสำเร็จ!!',
           text:'ระบบวางแผนการท่องเที่ยว',
           type:'success'
       },function(){
           window.location = 'travel_plan.php';
       }) ; 
     },1) ;";

 echo "</script>";

}
$conn->close();

?>