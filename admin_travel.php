<?php session_start();?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[จัดการสถานที่ท่องเที่ยว]-ระบบวางแผนท่องเที่ยว</title>
    <?php include 'php/header.php' ?>
</head>
<body>

<?php if($_SESSION['user_id'] == 1){?>
<?php include 'admin/nav_login.php' ?>

<div class="container mt-4 mb-4">
    <h3 class="d-flex justify-content-center font-weight-bold">+ จัดการสถานที่ท่องเที่ยว +</h3>
</div>

<div class="container mt-4 mb-4">
    <?php include 'admin/admin_travel_data.php' ?>
</div>

<?php include 'php/footer.php' ?>
<?php include 'php/script.php' ?>

    <script type="text/javascript">
        $("#logout").click(function() {
            <?php session_destroy(); ?>
        });
    </script>

<?php }else{ header("Location: error.php"); } ?>
</body>
</html>
