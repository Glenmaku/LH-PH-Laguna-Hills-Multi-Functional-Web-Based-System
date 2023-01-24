<div class="owner-header">
    <nav class="owner-head">
        <div class="date-timezone" id="date-timezone">

        </div>

        <div class="dropdown homeowner-profile ">
            <a class="btn btn-secondary owner-side" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="profile">
                    <div class="owner-pic">
                        <img src="assets/images/user-icon.jpg">
                    </div>
                    <div class="owner-desc">
                        <span>Glen Mark Dela Cruz</span>
                        <span>RESIDENT</span>
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#"><i class="fa-regular fa-circle-user"></i> My Account</a></li>
                <li><a class="dropdown-item" onclick="get_user_info()" id="btn_setting_owner_acc" class="btn_setting_owner_acc"><i class="fa-solid fa-fingerprint"></i> Owner Information</a></li>
                <li><a class="dropdown-item" href="index.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>
        </div>

        
    </nav>
</div>


<div class="modal fade" id="settingOwnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <div id="message-updateownerinfo"></div>
                <form class="row g-3">
                    <input type="hidden" name="owner_username" id="owner_username" value="<?php echo $username ?>" readonly>
                    <input type="hidden" name="ownerview_id" id="ownerview_id" value="<?php echo $ownerid ?>" readonly>
                    <div class="col-12">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="owner_fname" id="owner_fname">
                    </div>
                    <div class="col-12">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="owner_lname" id="owner_lname">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="owner_birthdate" name="owner_birthdate">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">Gender</label>
                        <select id="inputState" class="form-select" name="owner_gender" id="owner_gender">
                            <option selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <h5>Contact Details</h5>
                    <div class="form-group">
                        <label for="owner_email">Email Address</label>
                        <input type="text" name="owner_email" id="owner_email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Cellphone Number</label>
                        <input type="number" name="owner_cpnum" id="owner_cpnum" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Telephone Number</label>
                        <input type="number" name="owner_telnum" id="owner_telnum" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="">Home Address</label>
                        <textarea name="owner_add" id="owner_add" class="form-control" placeholder=""></textarea>
                    </div>

            </div>
            <div class="modal-footer" style="justify-content: space-between;">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btn_close">Close</button>
                <button type="button" class="btn btn-success" id="btn_updateuserinfo" name="btn_updateuserinfo" onclick="updateuserinfo()">Save Data</button>
            </div>
            </form>
        </div>
    </div>
</div>


<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-12">
                    <label for="change-pass" class="form-label">Enter old password</label>
                    <input type="password" name="owner_pass" id="owner_pass" class="form-control" placeholder="">
                </div>
                <div class="col-12">
                    <label for="change-pass" class="form-label">Enter new password</label>
                    <input type="password" name="new_owner_pass" id="new_owner_pass" class="form-control" placeholder="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>









<script>
    //SCRIPTS FOR UPDATING ACCOUNT BUTTONS
    function get_user_info() { // to show the current data
        // $('#owner_username').val(ownerusername);
        //$('#ownerview_id').val(ownerid);
        var ownerusername = $('#owner_username').val();
        //var ownerid = $('#ownerview_id').val();

        $.post("includes/Act-OwnerInfo.php", {
            ownerusername: ownerusername
        }, function(data, status) {
            var owner = JSON.parse(data);

            $('#owner_fname').val(owner.owner_fname);
            $('#owner_lname').val(owner.owner_lname);
            $('#owner_gender').val(owner.owner_gender);
            $('#owner_birthdate').val(owner.owner_birthdate);

            $('#owner_email').val(owner.owner_email);
            $('#owner_cpnum').val(owner.owner_mobile);
            $('#owner_telnum').val(owner.owner_telephone);
            $('#owner_add').val(owner.owner_address);
        });
        $('#settingOwnerModal').modal("show");
    }

    function updateuserinfo() { // updating the data
        var ownerview_id = $('#ownerview_id').val();
        var owner_username = $('#owner_username').val();
        var owner_fname = $('#owner_fname').val();
        var owner_lname = $('#owner_lname').val();
        var owner_gender = $('#owner_gender').val();

        var owner_birthdate = $('#owner_birthdate').val();
        var owner_email = $('#owner_email').val();
        var owner_cpnum = $('#owner_cpnum').val();
        var owner_telnum = $('#owner_telnum').val();
        var owner_add = $('#owner_add').val();

        $.post('includes/Act-OwnerInfo.php', {

                ownerview_id: ownerview_id,
                owner_username: owner_username,
                owner_fname: owner_fname,
                owner_lname: owner_lname,
                owner_gender: owner_gender,
                owner_birthdate: owner_birthdate,
                owner_email: owner_email,
                owner_cpnum: owner_cpnum,
                owner_telnum: owner_telnum,
                owner_add: owner_add

            },
            function(data, status) {
                $('#settingOwnerModal').modal('show');
                $('#message-updateownerinfo').html(data);
            });
    }





// clock

setInterval(function() {
    var currentTime = new Date();
    var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
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