<?php include 'php/dBver2.php'; ?>
<div class="container-fluid">
    <div class="row my-4">
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header" align="center" style="font-weight: bold">สถิติผู้ใช้งานในระบบ</h5>
                <div class="card-body">
                        <div id="ajax_user_count"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header" align="center" style="font-weight: bold">สมาชิกใหม่ล่าสุดของเรา!!</h5>
                <div class="card-body">
                    <div id="ajax_user_name"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header" align="center" style="font-weight: bold">สถิติสถานที่ท่องเที่ยว</h5>
                <div class="card-body">
                    <div id="ajax_travel_count"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="card">
                <h5 class="card-header" align="center" style="font-weight: bold">สถานที่ใหม่ล่าสุดของเรา!!</h5>
                <div class="card-body">
                    <div id="ajax_travel_name"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="javascript/ajax_statistic.js"></script>