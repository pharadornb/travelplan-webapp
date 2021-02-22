<?php

include_once('admin/admin_crud_func.php');

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($id);

    if ($sql) {
        echo "<script>alert('Record Deleted Successfully!');</script>";
        echo "<script>window.location.href='admin_travel.php'</script>";
    }
}

?>