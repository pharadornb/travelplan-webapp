<?php include '../php/dBver2.php';?>
<h1 align="left"><i class="fas fa-user"></i></h1>
<h4 class="card-title" style="font-weight: bold;">
    <?php
    $sql = "SELECT COUNT(*) as total FROM users";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['total'];
    ?>&nbsp;คน
</h4>
<p class="card-text">
    "กว่าๆ ที่สนใจในระบบของเรา"
</p>
