<div class="admin-header">
    <nav class="admin-head">
        <div class="date-timezone" id="date-timezone"></div>

        <div class="dropdown admin-profile ">
            <a class="btn btn-success admin-side" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile">
                    <div class="admin-pic">
                        <img src="assets/images/user-icon.jpg">
                    </div>
                    <div class="admin-desc">
                        <span>Ahanz Carl Fernandez</span>
                        <span>ADMIN</span>
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-circle-user"></i> My Account</a></li>
                <li><a class="dropdown-item" href="index.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>
        </div>
    </nav>
</div>

<script>
// clock

setInterval(function() {
    var currentTime = new Date();
    var days = ["Sun", "Mon", "Tue", "Wed", "Thur", "Fri", "Sat"];
    var day = days[currentTime.getUTCDay()];
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12;
    if (seconds < 10) {
      seconds = "0" + seconds;
    }
    if (minutes < 10) {
      minutes = "0" + minutes;
    }
    if (hours < 10) {
      hours = "0" + hours;
    }
    var clock = day + " | " + hours + ":" + minutes + ":" + seconds + " " + ampm;
    $("#date-timezone").text(clock);
  }, 1000);

</script>