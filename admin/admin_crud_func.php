<?php


include 'php/dbconnect_object.php';

class DB_con {

    function __construct() {
        $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        $conn->set_charset("utf8");
        $this->dbcon = $conn;

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL : " . mysqli_connect_error();
        }
    }

    public function insert($fname, $flocation, $flatitude, $flogitude, $fimage_thumbnail, $fdescription) {
        $result = mysqli_query($this->dbcon, "INSERT INTO tourist_attractions(name, location, latitude, logitude, image_thumbnail, description) 
                                                VALUES('$fname', '$flocation', '$flatitude', '$flogitude', '$fimage_thumbnail', '$fdescription')");
        return $result;
    }

    public function fetchdata2() {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tourist_attractions ORDER BY id DESC");
        return $result;
    }

    public function fetchdata($start_from, $num_per_page) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tourist_attractions ORDER BY id DESC LIMIT $start_from, $num_per_page");
        return $result;
    }


    public function fetchonerecord($userid) {
        $result = mysqli_query($this->dbcon, "SELECT * FROM tourist_attractions WHERE id = $userid");
        return $result;
    }

    public function update($userid, $fname, $flocation, $flatitude, $flogitude, $fimage_thumbnail, $fdescription, $mode, $allow) {
        $result = mysqli_query($this->dbcon, "UPDATE tourist_attractions SET
                name = '$fname',
                location = '$flocation',
                latitude = $flatitude,
                logitude = $flogitude,
                image_thumbnail = '$fimage_thumbnail',
                description = '$fdescription',
                mode = '$mode',
                allow = '$allow'
                WHERE id = $userid
            ");
        return $result;
    }

    public function delete($id) {
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tourist_attractions WHERE id = $id");
        return $deleterecord;
    }

}


?>

