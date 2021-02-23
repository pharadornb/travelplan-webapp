<?php SESSION_START(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[บัญชีผู้ใช้]-ระบบวางแผนท่องเที่ยว</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>

    <!-- css -->
    <?php include 'php/header.php' ?>

</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a href="index_login.php"><img src="images/logo/logo-application.png" width="35px"></a>&nbsp;&nbsp;
    <a class="navbar-brand" href="index_login.php">ระบบวางแผนท่องเที่ยว(Travel Planing)</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <a class="nav-link" href="index_login.php">&nbsp;หน้าแรก</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="index_login.php">&nbsp;เพิ่มสถานที่ลงแพลน</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="travel_plan.php">&nbsp;แพลนของฉัน</a>
            </li>

            <li class="nav-item active">
                <?php echo "<a class='nav-link' href='tourist.php?id=" . $_SESSION['user_id'] . "'> &nbsp;บัญชีผู้ใช้</a>"; ?>

            </li>
            <li class="nav-item ist-group-item-action list-group-item-danger mr-1 mb-1">
                <a class="nav-link" href="index.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
            </li>

        </ul>
    </div>
</nav>

<?php

include 'php/dbconnect.php';

//Connect dB
$conn = new mysqli($hostname, $username, $password, $database);
$conn->query("SET NAMES UTF8");

//Check dB die
if ($conn->connect_error) {
    die('Could not connect: ' . $conn->connect_error);
}

$id = $_GET["id"];
$sql = "SELECT * FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
$image = $row["image_thumbnail"];
$name = $row["name"];
$email = $row["email"];
$username = $row["username"];
$birth = $row["birthday"];
$pass = $row["password"];
$p = strlen($pass);   //หาความยาวของพาสเวิด

if($image == null)


// echo "<img src='images/userphoto/".$image."'>";


?>

<center>
    <div class="col-lg-8 mb-4 mt-4"><br /><br />
        <div class="card text-center">
            <div class="card-header">
                <h3><b>บัญชีผู้ใช้</b></h3>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-lg-4"><?php echo "<img src='images/member/" . $image . "'alt='' class='img-responsive' width='75%'>" ?> </div>                  
                  <div class="col-lg-8 mt-5">
                            <div class="container" align="left">
                                <div class="row">
                                    <div class="col-12 mt-2 mb-2">
                                        <h6><b>ชื่อผู้ใช้ระบบ : </b><?php echo $username ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2 mb-2">
                                        <h6><b>ชื่อ-สกุลนักท่องเที่ยว : </b><?php echo $name ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2 mb-2">
                                        <h6><b>อีเมลล์นักท่องเที่ยว : </b><?php echo $email ?></h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 mt-2 mb-2">
                                        <h6><b>ว/ด/ป. เกิดนักท่องเที่ยว : </b><?php echo $birth ?></h6>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--        <div class="card-footer text-muted">-->
        <div class="mb-3 mt-3">
            <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModal<?php echo $row['id'] ?>">
                แก้ไขข้อมูล
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $id ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>แก้ไขข้อมูล</h4> &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="edit_user.php?id=<?php echo $row["id"] ?>" method="POST">


                            <div class="form-group">
                                <label for="name"><span class="glyphicon glyphicon-user"></span>ชื่อผู้ใช้งาน :</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       value="<?php echo $name ?>">
                            </div>

                            <div class="form-group">
                                <label for="email"><span class="glyphicon glyphicon-user"></span>อีเมลล์ :</label>
                                <input type="email" class="form-control" name="email" id="email"
                                       value="<?php echo $email ?>">
                            </div>


                            <div class="form-group">
                                <label for="birth"><span class="glyphicon glyphicon-user"></span>วันเกิด :</label>
                                <input type="date" class="form-control" name="birth" id="birth"
                                       value="<?php echo $birth ?>">
                            </div>

                            <div class="form-group">
                                <label for="username"><span class="glyphicon glyphicon-user"></span>Username :</label>
                                <input type="text" class="form-control" name="username" id="username"
                                       value="<?php echo $username ?>">
                            </div>

                            <div class="form-group">
                                <label for="birth"><span class="glyphicon glyphicon-user"></span>Password :</label>
                                <input type="password" class="form-control" name="password" id="password" value="" title="กรอกทุกครั้งเมื่อข้อมูลเปลี่ยน!!!!" required>
                                <input type="checkbox" onclick="myFunction()"> แสดงรหัสผ่าน


                                <script>
                                    function myFunction() {
                                        var x = document.getElementById("password");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                </script>
                            </div>


                            <button type="submit" class="btn btn-primary btn-primary btn-block"><span class="glyphicon glyphicon-off"></span>แก้ไข
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก
                        </button>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div><br />
    <div class="mt-4">
        <?php include 'php/footer.php' ?>
    </div>
</body>
</html>