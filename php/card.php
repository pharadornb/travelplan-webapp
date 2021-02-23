<div class="container">
    <div class="row">

       <?php
        include 'php/dBver1.php';

       if(isset($_GET['page']))
       {
           $page = $_GET['page'];
       }else{
           $page = 1;
       }
       $num_per_page = 6;
       $start_from = ($page-1)*6;

        $sql = "SELECT * FROM tourist_attractions WHERE allow = 'on' ORDER BY created_at DESC LIMIT $start_from, $num_per_page";
        //$conn red tag. don't worry php stupid
        $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)) {

            echo "<div class='col-12 col-lg-4 col-md-6 mt-3'>";
                echo "<div class='card' style='width: 100%'>";
                    echo "<img class='card-img-top img-fluid' src='images/tourist/" .$row['image_thumbnail']. "'/>" ;
                        echo "<div class='card-body'> <center><h5 class='card-title font-weight-bold'>" .$row['name']. "</h5></center>";
                            echo "<h6 class='font-weight-bold'><i class='fas fa-thumbtack'></i>&nbsp;&nbsp;" . $row['location']. "</h6>";
                                echo "<p class='card-text text-desc-truncate'>" . $row['description']. "</p>";
                                    echo "<a href='detail_index.php?id=".$row['id']."'class='btn btn-primary'>เพิ่มเติม</a>";
                            echo "</div></div></div>";
            }
        ?>

    </div>
</div>
