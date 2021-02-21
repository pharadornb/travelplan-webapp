<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a href="index.php"><img src="images/logo/logo-application.png" width="35px"></a>&nbsp;&nbsp;
    <a class="navbar-brand" href="index.php">ระบบวางแผนท่องเที่ยว(Travel Planing)</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#manage_travel_place">&nbsp;จัดการสถานที่ท่องเที่ยว </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#manage_users">&nbsp;จัดการผู้ใช้งาน </a>
            </li>
            <li class="nav-item">
                <?php //echo "<a class='nav-link' href='tourist.php?id=" . $_SESSION['user_id'] . "'> &nbsp;บัญชีผู้ใช้</a>"; ?>
            </li>
            <li class="nav-item ist-group-item-action list-group-item-danger mr-1 mb-1">
                <a class="nav-link" href="index.php" id="logout"><i class="fas fa-sign-out-alt"></i>&nbsp;ออกจากระบบ</a>
            </li>
        </ul>
    </div>
</nav>

