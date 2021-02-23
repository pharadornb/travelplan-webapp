
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a href="index.php"><img src="images/logo/logo-application.png" width="35px"></a>&nbsp;&nbsp;
    <a class="navbar-brand" href="index.php">ระบบวางแผนท่องเที่ยว(Travel Planing)</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
            <li class="nav-item ist-group-item-action list-group-item-success mr-1 mb-1">
            <a class="nav-link" href="login.php"  data-toggle="modal" data-target="#exampleModal">&nbsp;<i class="fas fa-user"></i>&nbsp;เข้าสู่ระบบ</a>

            </li>
            <li class="nav-item ist-group-item-action list-group-item-info mr-1 mb-1">
                <a class="nav-link" href="register1.php">&nbsp;<i class="fas fa-user-plus"></i>&nbsp;สมัครสมาชิก</a>
            </li>
        </ul>
       
    </div>
     <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>เข้าสู่ระบบ</h4> &nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        

                                    <div class="mt-5" align="center">
                    <img src="images/logo/logo-application.png" alt="" width="120px" height="150px">

                    <form action="login.php" method="POST" style="max-width: 300px; margin: auto;">
                        <div class="form-group">
                            <h4 class="d-flex justify-content-center font-weight-bold mt-4"> + เข้าสู่ระบบวางแผนท่องเที่ยว + </h4>
                            <input type="text" class="form-control mt-4" name="username" id="username" placeholder="ชื่อผู้ใช้"
                                maxlength="15" required>
                            <input type="password" class="form-control mt-2" name="password" id="password" placeholder="รหัสผ่าน"
                                maxlength="20" required>
                            <center><input type="submit" value="Login" name="login"
                                        class="bt-lg btn btn-primary mt-3 mb-2 btn-block"></center>
                            <a href="register1.php"><u>ยังไม่มีชื่อบัญชีผู้ใช้?</u></a>
                        </div>
                    </form>
                </div>
                          
                   
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> ยกเลิก
                        </button>

                       

                    </div>
                </div>
            </div>
        </div>
</nav>