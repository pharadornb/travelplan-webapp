<?php


define('DB_SERVER', 'mysql-19614-0.cloudclusters.net:19614');
define('DB_USER', 'TravelPlan2021');
define('DB_PASS', 'jYtKQ2Y1VZz1');
define('DB_NAME', 'TravelPlan2021');

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
        $result = mysqli_query($this->dbcon, "SELECT * FROM tourist_attractions WHERE id = '$userid'");
        return $result;
    }

    public function update($firstname, $lastname, $email, $phonenumber,	$address, $userid) {
        $result = mysqli_query($this->dbcon, "UPDATE tourist_attractions SET
                firstname = '$firstname',
                lastname = '$lastname',
                email = '$email',
                phonenumber = '$phonenumber',
                address = '$address'
                WHERE id = '$userid'
            ");
        return $result;
    }

    public function delete($id) {
        $deleterecord = mysqli_query($this->dbcon, "DELETE FROM tourist_attractions WHERE id = $id");
        return $deleterecord;
    }

}


?>

