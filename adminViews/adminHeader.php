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
                        <span ><?php echo $Fname." ".$Lname?> </span><br>
                        <span>ADMIN</span>
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" onclick="change_pass()" id="btn_change-pass"><i class="fa-regular fa-circle-user"></i> My Account</a></li>
                <li><a class="dropdown-item" href="includes/Act-logout.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="modal fade" id="ResetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <form class="reset-pass-form">
                    <div class="modal-body m-3">
                        <h3 class="text-center">Change Password</h3>

                        <div class="alert alert-success alert-dismissible fade show " role="alert" id="reset-error">
                            Please enter your password to enable password update.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                        

                            <!--PALATANDAAN--> 
                            <input  name="admin_username" id="admin_username" value="<?php echo $username ?>" readonly hidden  >
                            <input name="adminview_id" id="adminview_id" value="<?php echo $adminid?>" readonly hidden> <!--PALATANDAAN--> 

                            <div class="form-group">
                                <label for="" class="fs-6 mb-2"><b>Old Password</b></label>
                                <input type="password" name="old_pass" id="old_pass" class="form-control mb-2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for=""class="fs-6 mb-2"><b>Enter Password</b></label>
                                <input type="password" name="new_pass" id="new_pass" class="form-control mb-2" placeholder="" disabled>
                            </div>
                            <div class="form-group" class="fs-6 mb-2" >
                                <label for="admin_email"><b>Confirm Password</b></label>
                                <input type="password" name="conf_pass" id="conf_pass" class="form-control mb-2" placeholder="" disabled>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                        <button type="button" class="btn btn-primary" id="btn_check_pass" name="btn_updateuserinfo" >Verify</button>
                    </div>
                    </form>
                </div>
            </div>
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



  function change_pass(){
    $('#btn_check_pass').on('click',function(){
        var old_pass = $("#old_pass").val();
        var admin_username = $("#admin_username").val();
        $.ajax({
                    type: "POST",
                    url: "adminViews/includes/act-check-password.php",
                    data: { old_pass: old_pass, admin_username:admin_username},
                    success: function(response) {

                        if (response === "success") {
                            document.getElementById("new_pass").disabled = false;
                            document.getElementById("conf_pass").disabled = false;
                            document.getElementById("btn_check_pass").outerHTML = '<button type="button" class="btn btn-primary" id="btn_update_pass" name="btn_updateuserpass" onclick="update_pass()">Update Password</button>';
                            document.getElementById("reset-error").innerHTML = "You can now enter your new password.";
                            document.getElementById("reset-error").classList.remove("alert-danger");
                             document.getElementById("reset-error").classList.add("alert-success");

                            }else if (response === "Please enter your password.") {
                            document.getElementById("reset-error").innerHTML = "Please enter your password.";
                            document.getElementById("reset-error").classList.add("alert-danger");
                            document.getElementById("reset-error").classList.remove("alert-success");
             

                            } else {
                            document.getElementById("reset-error").innerHTML = "Incorrect password. Please try again.";
                            document.getElementById("reset-error").classList.add("alert-danger");
                            document.getElementById("reset-error").classList.remove("alert-success");
}
                    }
                })
    });
    $('#ResetPasswordModal').modal("show");
}
function update_pass(){
  
        var new_pass = $("#new_pass").val();
        var conf_pass = $("#conf_pass").val();
        var admin_username = $("#admin_username").val();
        $.ajax({
    type: "POST",
    url: "adminViews/includes/act-update-password.php",
    data: { new_pass: new_pass, conf_pass: conf_pass, admin_username:admin_username},
    success:function(data){
   
        if (data === "success") {
            document.getElementById("reset-error").innerHTML = "You successfully updated your password.";
            document.getElementById("reset-error").classList.remove("alert-danger");
            document.getElementById("reset-error").classList.add("alert-success");

            $("#new_pass").val("");
            $("#old_pass").val("");
            $("#conf_pass").val("");
        }else if (data === "Both fields are required. Please try again.") {
            document.getElementById("reset-error").innerHTML = "Both fields are required. Please try again.";
            document.getElementById("reset-error").classList.add("alert-danger");
            document.getElementById("reset-error").classList.remove("alert-success");
            $("#new_pass").val("");
            $("#conf_pass").val("");

        }else if (data === "Passwords do not match. Please try again.") {
            document.getElementById("reset-error").innerHTML = "Passwords do not match. Please try again.";
            document.getElementById("reset-error").classList.add("alert-danger");
            document.getElementById("reset-error").classList.remove("alert-success");
            $("#new_pass").val("");
            $("#conf_pass").val("");

        }else if (data === "The password must be at least 8 characters and contain at least 2 numbers. Please try again.") {
            document.getElementById("reset-error").innerHTML = "The password must be at least 8 characters and contain at least 2 numbers. Please try again.";
            document.getElementById("reset-error").classList.add("alert-danger");
            document.getElementById("reset-error").classList.remove("alert-success");
            $("#new_pass").val("");
            $("#conf_pass").val("");

        }else{
            document.getElementById("reset-error").innerHTML = "An error occured. Please try again.";
            document.getElementById("reset-error").classList.add("alert-danger");
            document.getElementById("reset-error").classList.remove("alert-success");
            $("#new_pass").val("");
            $("#conf_pass").val("");

        }
    }
})
    }
</script>