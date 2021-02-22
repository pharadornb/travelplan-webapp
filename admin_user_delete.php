<?php

include_once('admin/functions.php');

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $deletedata = new DB_con();
    $sql = $deletedata->delete($id);

    if ($sql) {
        echo "<script>alert('ลบข้อมูลผู้ใช้สำเร็จ!');</script>";
        echo "<script>window.location.href='admin_user.php'</script>";
    }
}

?>
