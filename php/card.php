<div class="container">
    <div class="row">

       <?php

        $hostname = "mysql-19614-0.cloudclusters.net:19614";
        $username = "TravelPlan2021";
        $password = "jYtKQ2Y1VZz1";
        $database = "TravelPlan2021";

        $conn = mysqli_connect($hostname,$username,$password,$database);
        $conn->query("SET NAMES UTF8");

        $sql = "SELECT * FROM tourist_attractions ORDER BY id ";
        $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)) {

            echo "<div class='col-12 col-lg-4 col-md-6 mt-3'>";
                echo "<div class='card' style='width: 100%'>";
                    echo "<img class='card-img-top img-fluid' src='images/tourist/" .$row['image_thumbnail']. "'/>" ;
                        echo "<div class='card-body'> <center><h5 class='card-title font-weight-bold'>" .$row['name']. "</h5></center>";
                        echo "<h6 class='font-weight-bold'><i class='fas fa-thumbtack'></i>&nbsp;&nbsp;" . $row['location']. "</h6>";
                        echo "<p class='card-text'>" . $row['description']. "</p>";
                        echo "<center><a href='#' class='btn btn-primary'>เพิ่มเติม</a></center></div></div></div>";
            }
        ?>

    </div>
</div>
