<div class="admin-header">
    <nav class="admin-head">
        <div class="date-timezone">
            <span>
                <?php
                date_default_timezone_set("Asia/Manila");
                echo " " . date("D");
                echo " | " . date("h:i A");
                ?>
            </span>
        </div>

        <div class="admin-profile">
            <div class="btn-group">
                <button type="button" class="btn header-btn" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile">
                        <div class="admin-pic">
                            <img src="assets/images/user-icon.jpg">
                        </div>
                        <div class="admin-desc">
                            <span>Glen Mark Dela Cruz</span><br>
                            <span>RESIDENT</span>
                        </div>
                    </div>
                </button>
                <ul class="dropdown-menu dropdown-menu-end ">
                    <li><a class="dropdown-item" href="#">My Information</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
            </div>

        </div>
    </nav>
</div>