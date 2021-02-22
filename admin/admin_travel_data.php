<div class="container mb-4" align="center">
<table id="table-mytable example" class="table table-bordered table-striped ">
        <thead align="center">
        <th>#</th>
        <th>วันที่สร้าง</th>
        <th>ชื่อสถานที่ท่องเที่ยว</th>
        <th>สถานที่</th>
        <th>ละติจูด</th>
        <th>ลองติจูด</th>
        <th>ระงับ</th>
<!--        <th>โหมด</th>-->
        <th colspan="2">จัดการ</th>
        </thead>
        <tbody>
        <?php

        include_once('admin/admin_crud_func.php');
        $fetchdata = new DB_con();

        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }else{
            $page = 1;
        }

        $num_per_page = 5;
        $start_from = ($page-1)*5;

        $sql = $fetchdata->fetchdata($start_from, $num_per_page);

        while($row = mysqli_fetch_array($sql)) {
            ?>

            <tr>
                <td align="center"><?php echo $row['id']; ?></td>
                <td><?php $date = date_create($row['created_at'], timezone_open('Asia/Bangkok')); echo date_format($date, 'Y-m-d H:i:sP'); ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><?php echo $row['latitude']; ?></td>
                <td><?php echo $row['logitude']; ?></td>
                <td><?php echo $row['allow']; ?></td>
<!--                <td>--><?php //echo $row['mode']; ?><!--</td>-->
                <td align="center"><a href="admin_travel_update.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">แก้ไข</a></td>
                <td align="center"><a href="admin_travel_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">ลบ</a></td>
            </tr>

            <?php
        }
        ?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php
            $sql2 = $fetchdata->fetchdata2();
            $i=0;
            while($row = mysqli_fetch_array($sql2)) {
                $i++;
            }
            $totalpage = ceil($i/$num_per_page);
            //echo $totalpage;
            for($j=1; $j<=$totalpage;$j++){
                echo "<li class='page-item'><a class='page-link' href='admin_travel.php?page=".$j."' class='btn btn-success mr-1'>$j</a></li>";
            }
            ?>
        </ul>
    </nav>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
