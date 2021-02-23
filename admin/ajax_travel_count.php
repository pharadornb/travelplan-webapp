<!--<h4 class="card-title">-->
<!--    45 แห่ง-->
<!--</h4>-->
<?php include '../admin/dbconnect.php';?>
<h1 align="left"><i class="fas fa-archway"></i></h1>
<h4 class="card-title" style="font-weight: bold;">
    <?php
    $sql = "SELECT COUNT(*) as total FROM tourist_attractions";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    echo $data['total'];
    ?>&nbsp;แห่ง
</h4>
<p class="card-text">
    "กว่าๆ ที่มีในคลังระบบของเรา"
</p>
