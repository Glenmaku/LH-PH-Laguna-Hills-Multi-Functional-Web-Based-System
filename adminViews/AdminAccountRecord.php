<?php require_once('includes/connection.php');
$sql = "select * from admin_accounts";
$data = mysqli_query($con, $sql);
?>

<div class="record-account">
    <div class="record-title">
        <h1>ADMIN RECORDS</h1>
    </div>
    <section class="record-content accountContent"><!--SECTION NG BUONG CONTENT-->
        <div class=" input-group input-group-sm mb-3 search-add-area">
            <input type="text" class="form-control" id="search-account-admin" placeholder="Search Here....">
            <button id="add-account"><a name="AddAdminAccount" data-bs-toggle="modal" data-bs-target="#adminAddAccountModal"><i class="fa-solid fa-user-plus"></i> Add New Account</a></button> <br><br>
        </div>

        <div id="display-admin"></div>
        <div class="download">
            <form action="../PDF/pdf_gen.php" method="POST" target="_blank">
                <button type="submit" name="btn_pdf" class="btn btn-success" target="_blank"><i class="fa-solid fa-download"></i> Download PDF</button>
            </form>
        </div>
    </section>
</div>


<!-- Add Admin Modal -->
<div class="modal fade adminAddAccountModal" id="adminAddAccountModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Owner Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <p id="message-addAdmin" class="text-dark"></p>
                <form><!--container-->
                    <div class="input-group  mb-3">
                        <span class="input-group-text" id="basic-addon1">First Name</span>
                        <input class="form-control" name=" admin_fname" id="admin_fname" placeholder="First Name">
                    </div>
                    <div class="input-group  mb-3"><
                        <span class="input-group-text" id="basic-addon1">Last Name</span>
                        <input class="form-control" name="admin_lname" id="admin_lname" placeholder="Last Name">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text" id="basic-addon1">Email</span>
                        <input class="form-control" type="email" name="admin_email" id="admin_email" placeholder="owner@email.com">
                    </div>
                    <div class="input-group  mb-3">
                        <span class="input-group-text" id="basic-addon1">Username</span>
                        <input class="form-control" name="aadmin_username" id="aadmin_username" value="" readonly>
                        <button id="usernamegenerate" name="usernamegenerate" type="button" hidden>Generate</button>

                    </div>

                    <div class="input-group  mb-3">
                        <span class="input-group-text" id="basic-addon1">Password</span>
                        <input class="form-control" name="admin_password" id="admin_password" value="" placeholder="Password">
                        <span class="input-group-text"><button class="btn" id="passgenerate" name="passgenerate" onclick="getPassword()" type="button"><i class="fa-solid fa-rotate"></i></button></span>

                    </div>
                    <div class="modal-footer" style="justify-content: space-between;">
                        <button class="btn btn-danger" type="reset" value="reset" id="reset">Reset</button>
                        <button type="button" name="addAdmin_button" class="addAdmin_button btn btn-success" id="addAdmin_button">Add Account</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- update Modal-->
<div class="modal fade updateAdminModal" id="updateAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Account Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <p id="message-updateAdmin" class="text-dark"></p>
                    <div class="input-group  mb-3 ">
                        <label class="input-group-text" for="up_admin_username">Username</label>
                        <input type="text" name="up_admin_username" id="up_admin_username" class="form-control" disabled>
                    </div>
                    <div class="input-group  mb-3">
                        <label class="input-group-text" for="up_admin_fname">First Name</label>
                        <input type="text" name="up_admin_fname" id="up_admin_fname" class="form-control" placeholder="">
                    </div>
                    <div class="input-group  mb-3">
                        <label class="input-group-text" for="up_admin_lname">Last Name</label>
                        <input type="text" name="up_admin_lname" id="up_admin_lname" class="form-control" placeholder="">
                    </div>

                    <div class="input-group  mb-3">
                        <label class="input-group-text" for="up_admin_email">Email</label>
                        <input type="text" name="up_admin_email" id=up_admin_email class="form-control" placeholder="">
                    </div>
                </div>
                <input name="adminUpdate_id" id="adminUpdate_id" type="hidden">
                <div class="modal-footer" style="justify-content: space-between;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                    <button type="button" class="btn btn-success" id="btn_updateAdminAcc" name="btn_updateAdminAcc" onclick="updateAdminInfo()">Save Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal-->

<div class="modal fade" id="deleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>

                <form>
                    <div class="modal-body">
                        <input type="hidden" name="ownerdelete_id" id="ownerdelete_id">
                        <p>Are you sure you want to delete this account?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                        <button type="button" class="btn btn-danger" name="btn_deleteAdminAcc" id="btn_deleteAdminAcc">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!--SCRIPT FOR add Admin-->
<script>
    $(document).ready(function() {
        displayAdminData();
        Insert_admin_record();
        get_Username();
        delete_owner_record();
    });

    $(document).ready(function() {
        var currentPage = localStorage.getItem("currentPage");
        if (!currentPage) {
            currentPage = 1;
        }
        displayAdminData(currentPage);
    });

    function displayAdminData(page) {
        localStorage.setItem("currentPage", page);
        var displayData = "true";
        $.ajax({
            url: 'adminViews/includes/displayAdminAccounts.php',
            type: 'post',
            data: {
                displaySend: displayData,
                page: page
            },
            success: function(data, status) {
                $('#display-admin').html(data);
            }
        });
    }

    function getAdminPage(page) {
        displayAdminData(page);
    }

    //GET USERNAME FOR INSERTING OWNER ACCOUNT
    function get_Username() {
        $(document).on('click', '#usernamegenerate', function() {
            $.ajax({
                method: "post",
                url: "adminViews/includes/adminUsername.php",
                success: function(data) {
                    $("#aadmin_username").val(data);
                    console.log(data);
                }
            });
        });
    }
    //GETTING THE PASSWORD AUTOGENERATE
    function getPassword() {
        const chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%";
        let passwordLength = 8;
        let owner_password = '';
        for (let i = 0; i < passwordLength; i++) {
            let randomNumber = Math.floor(Math.random() * chars.length);
            owner_password += chars.substring(randomNumber, randomNumber + 1);
        }
        document.getElementById('admin_password').value = owner_password;
    }
    //INSERTING OWNER ACCOUNT
    function Insert_admin_record() {
        $(document).on('click', '#addAdmin_button', function() {
            var AFname = $('#admin_fname').val();
            var ALname = $('#admin_lname').val();
            var AEmail = $('#admin_email').val();
            var AUsername = $('#aadmin_username').val();
            var APassword = $('#admin_password').val();
            $.ajax({
                url: 'adminViews/includes/Act-AddAdmin.php',
                method: 'post',
                data: {
                    AdminFname: AFname,
                    AdminLname: ALname,
                    AdminEmail: AEmail,
                    AdminUsername: AUsername,
                    AdminPassword: APassword
                },
                success: function(data) {
                    $('#message-addAdmin').html(data);
                    $('#adminAddAccountModal').modal('show');
                    $('reset').trigger('click');
                    $('#usernamegenerate').trigger('click');
                    displayAdminData(page);
                }
            })
        })
        $(document).on('click', '#btn_close', function() {
            $('form').trigger('reset');
            $('#message-addAdmin').html('');
        })
        $(document).on('click', '#reset', function() {
            $('#usernamegenerate').trigger('click');
        })
        $(document).on('click', '#add-account', function() {
            $('#usernamegenerate').trigger('click');
        })
    };
    // UPDATE
    function get_admin_record(updateAdminId) { // to show the current data
        $('#adminUpdate_id').val(updateAdminId);
        $.post("adminViews/includes/Act-UpdateAdmin.php", {
            updateAdminId: updateAdminId
        }, function(data, status) {
            var admin = JSON.parse(data);
            $('#up_admin_fname').val(admin.admin_fname);
            $('#up_admin_lname').val(admin.admin_lname);
            $('#up_admin_username').val(admin.admin_username);
            $('#up_admin_email').val(admin.admin_email);
        });
        $('#updateAdminModal').modal("show");
    }

    function updateAdminInfo() { // updating the data
        var up_admin_fname = $('#up_admin_fname').val();
        var up_admin_lname = $('#up_admin_lname').val();
        var up_admin_username = $('#up_admin_username').val();
        var up_admin_email = $('#up_admin_email').val();
        var adminUpdate_id = $('#adminUpdate_id').val();

        $.post('adminViews/includes/Act-UpdateAdmin.php', {
            up_admin_fname: up_admin_fname,
            up_admin_lname: up_admin_lname,
            up_admin_username: up_admin_username,
            up_admin_email: up_admin_email,
            adminUpdate_id: adminUpdate_id
            },
            function(data, status) {
                $('#updateAdminModal').modal('show');
                $('#message-updateAdmin').html(data);
                displayAdminData();
            });
    }
//Delete
    function delete_owner_record() {
            $(document).on('click', '#btn_deleteAdminAcc', function() {
                var Delete_Admin_ID = $(this).attr('data-id2');
                $(document).on('click', '#btn_deleteAdminAcc', function() {
                    $.ajax({
                        url: 'adminViews/includes/Act-DeleteAdmin.php',
                        method: 'post',
                        data: {
                            DeleteAdmin: Delete_Admin_ID
                        },
                        success: function(data) {
                            $('#deleteAdminModal').modal('hide');
                            $('#delete-message').html(data); //.hide(5000);
                            displayAdminData();
                        }
                    })
                })
            })
        }

    // SEARCH BAR
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "adminViews/includes/searchAdmin.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#display-admin').html(data);
                }
            });
        }
        $('#search-account-admin').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>