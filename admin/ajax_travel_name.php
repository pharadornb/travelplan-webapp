<?php include '../admin/dbconnect.php';?>
<h1 align="left"><i class="fas fa-route"></i></h1>
<h4 class="card-title" style="font-weight: bold;">
    <?php
    $sql = "SELECT name, location FROM tourist_attractions ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['name'];
    ?>
</h4>
<p class="card-text">
    " @
    <?php
    $sql = "SELECT name, location FROM tourist_attractions ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['location'];
    ?> "
</p>