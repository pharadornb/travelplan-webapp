<?php
    include 'config_db.php';

    //Sql manage
    $sql = "SELECT * FROM tourist_attractions";
    $result = $conn->query($sql);

    //array for json file declaration
    $response = array();

    //Sql Fetch data + add data to json file
    if ($result->num_rows > 0) {
        header("Content-Type: application/json; charset=utf-8");
        $i=0;
        while($row = $result->fetch_assoc()) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['name'] = $row['name'];
            $response[$i]['location'] = $row['location'];
            $response[$i]['latitude'] = $row['latitude'];
            $response[$i]['logitude'] = $row['logitude'];
            $i++;
        }

        echo json_encode($response, JSON_UNESCAPED_UNICODE);
    } else {
        echo "0 results";
    }

    //Sql connect close
    $conn->close();
?>
