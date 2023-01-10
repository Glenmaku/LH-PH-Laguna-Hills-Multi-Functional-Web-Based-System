<div class="record-account">
    <div class="record-title">
        <h1>ACCOUNT RECORDS</h1>
    </div>
    <section class="record-content accountContent"><!--SECTION NG BUONG CONTENT-->
        <button id="add-account"><a name="AddAdminAccount" data-bs-toggle="modal" data-bs-target="#addAdminAccount"><i class="fa-solid fa-user-plus"></i> Add New Account</a><!--ETO UNG BUTTON PATUNGO SA ADD ACCOUNT PAGAWA NALANG NA BUTTON IF DI KERI --></button>
    </section>
</div>
</form>
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
                    <input type="email" class="form-control" id="firstname" placeholder="Enter first name" required>
                </div>
                <div class="mb-3">
                    <label for="lastname" class="form-label">Last Name</label>
                    <input type="email" class="form-control" id="lastname" placeholder="Enter last name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email address">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="email" class="form-control" id="username">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="email" class="form-control" id="pass" placeholder="Enter password" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                <button type="button" id="submit-btn" onclick="addAdmin()">Submit</button>
            </div>
        </div>
    </div>
</div>

<!--SCRIPT FOR add Admin-->
<script>
    function addAdmin() {
        var fname = $('#firstname').val();
        var lname = $('#lastname').val();
        var email = $('#email').val();
        var user = $('#username').val();
        var pass = $('#pass').val();

        $.ajax({
            url: "includes/Act-Admin.php",
            type: 'post',
            data: {
                fnameSend: fname,
                lnameSend: lname,
                emailSend: email,
                userSend: user,
                passSend: pass
            },
            success: function(data, status)
            
        })
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