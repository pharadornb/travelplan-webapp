<!--SELECT name, created_at FROM users ORDER BY id DESC LIMIT 1-->
<!--<h4 class="card-title">-->
<!--    ประหยัด จันทร์อังคารพุธ-->
<!--</h4>-->
<!--<p class="card-text">-->
<!--    " 21/02/2564 22:27"-->
<!--</p>-->
<?php include '../php/dBver2.php';?>
<h4 class="card-title" style="font-weight: bold;">
    คุณ
    <?php
    $sql = "SELECT name, created_at FROM users ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['name'];
    ?>
</h4>
<p class="card-text">
    "
    <?php
    $sql = "SELECT name, created_at FROM users ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['created_at'];
    ?> "
</p>