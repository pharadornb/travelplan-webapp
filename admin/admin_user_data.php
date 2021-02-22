<div class="container mb-4" align="center">
    <table id="table-mytable example" class="table table-bordered table-striped ">
        <thead align="center">
        <th>วันที่สร้างบัญชี</th>
        <th>ชื่อผู้ใช้งาน</th>
        <th>ชื่อ-สกุล</th>
        <th>อีเมล์</th>
        <th>จัดการ</th>
        </thead>
        <tbody>
        <?php

        include_once('functions.php');
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

<!--            date_default_timezone_set("Asia/Bangkok");-->
<!--            echo date_default_timezone_get();-->
            <tr>
                <td align="center"><?php echo $row['created_at']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
<!--                <td align="center"><a href="manage_user_update.php?id=--><?php //echo $row['id']; ?><!--" class="btn btn-primary">จัดการบัญชี</a></td>-->
                <td align="center"><a href="admin_user_delete.php?del=<?php echo $row['id']; ?>" class="btn btn-danger">ลบบัญชี</a></td>
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
                echo "<li class='page-item'><a class='page-link' href='admin_user.php?page=".$j."' class='btn btn-success mr-1'>$j</a></li>";
            }
            ?>
        </ul>
    </nav>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>