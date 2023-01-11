<div class="record-account">
    <div class="record-title">
        <h1>ACCOUNT RECORDS</h1>
    </div>
    <section class="record-content accountContent"><!--SECTION NG BUONG CONTENT-->
        <button id="add-account"><a name="AddAdminAccount" data-bs-toggle="modal" data-bs-target="#addAdminAccount"><i class="fa-solid fa-user-plus"></i> Add New Account</a></button> <br><br>
        <div id="display-admin"></div>
    </section>
</div>


<!-- Add Admin Modal -->
<div class="modal fade" id="addAdminAccount" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="addUserModalLabel">Add Admin User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="firstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter first name" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter last name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email address">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass" placeholder="Enter password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="submit-btn" onclick="addAdmin()">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- update Modal-->
<div class="modal fade" id="updateAdminModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Information</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
                    <label for="updatefirstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="updatefirstname">
                </div>
                <div class="mb-3">
                    <label for="updatelastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="updatelastname">
                </div>
                <div class="mb-3">
                    <label for="updateemail" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="updateemail">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="updateusername" disabled>
                </div>
                <div class="mb-3">
                    <label for="updatepass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="updatepass">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="submit-btn">Submit</button>
                <input type="hidden" id="hiddendata">
            </div>
      </div>
    </div>
  </div>
</div>




<!--SCRIPT FOR add Admin-->
<script>
    $(document).ready(function(){
        displayData();
    });
    function  displayData(){
        var displayData = "true";
        $.ajax({
            url: '/adminViews/includes/displayData.php',
            type: 'post',
            data:{
                displaySend: displayData
            },
            success:function(data, status){
                $('#display-admin').html(data);
            }
        });
    }

    function addAdmin() {
        var fname = $('#firstname').val();
        var lname = $('#lastname').val();
        var email = $('#email').val();
        var user = $('#username').val();
        var pass = $('#pass').val();

        $.ajax({
            url: "/adminViews/includes/Act-AddAdmin.php",
            type: 'post',
            data: {
                fnameSend: fname,
                lnameSend: lname,
                emailSend: email,
                userSend: user,
                passSend: pass
            },
            success:function(data, status){
                //console.log(status);
                displayData();
            }
            
        });
    }

    function deleteUser(deleteid) {
        $.ajax({
            url: '/adminViews/includes/Act-DeleteAdmin.php',
            type: 'post',
            data:{
                deleteSend: deleteid
            },
            success:function(data, status){
                displayData();
            }
        })
    }

    function getDetails(updateid){
        $('#hiddendata').val(updateid);

        $.post("/adminViews/includes/Act-UpdateAmin.php",{updateid:updateid},function(data, status){
                var admin = JSON.parse(data);
                $('#updatefirstname').val(admin.admin_fname);
                $('#updatelastname').val(admin.admin_lname);
                $('#updateemail').val(admin.admin_email);
                $('#updateusername').val(admin.admin_username);
                $('#updatepass').val(admin.admin_password);
            });

        $('#updateAdminModal').modal("show");

    }
</script>


<!--SCRIPT FOR VIEW ACCOUNT-->
<script>
    $(document).ready(function() {
        $('.btn_view_admin_acc').on('click', function() {
            $('#adminviewmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#adminview_id').val(data[0]);

        });
    });
</script>
</div>