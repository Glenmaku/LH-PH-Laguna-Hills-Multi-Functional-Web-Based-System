<div class="owner-record">
    <div class="record-title">
        <h1>HOMEOWNER RECORDS</h1>
    </div>
    <section class="record-content"><!--SECTION NG BUONG CONTENT-->

        <div><!--PINAKA TOP- hingin saken layout Searchbar, Add new account button - -->
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" value="<?php if (isset($_GET['search'])) {
                                                                echo $_GET['search'];
                                                            } ?>" class="form-control" placeholder="Search Data">

                    <button type="Submit" id="search_owner_data">Search</button>
                </div>
            </form>


            <button data-bs-toggle="modal" data-bs-target="#assignlotmodal" id="btn_assign_owner_lot" class="btn_assign_owner_lot" name="btn_assign_owner_lot">Assign Owner Lot</button>
            <button data-bs-toggle="modal" data-bs-target="#owneraddaccountmodal" id="btn_add_owner_acc" class="btn_add_owner_acc" name="btn_add_owner_acc">ADD ACCOUNT +</button>


        </div>
        <div><!--DISPLAY NG MGA ALERTS HERE-->
            <!--success update-->
            <?php
            if (isset($_GET['successupdate'])) {
                $Message = $_GET['successupdate'];
                $Message = "Information Successfully Updated.";
            ?>
                <div><?php echo $Message ?></div>
            <?php
            }
            ?>

            <!--success delete-->
            <?php
            if (isset($_GET['successdelete'])) {
                $Message = $_GET['successdelete'];
                $Message = "Successfully deleted information.";
            ?>
                <div><?php echo $Message ?></div>
            <?php
            }
            ?>
        </div>

        <p id="delete-message" class="text-dark"></p>
        <div id="owneraccounttable"></div>

        <button><i class=""></i>Download</button>
    </section>
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--button to open a pdf to be downloaded-->
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!-- POP UP MODALSSS-->

    <!--ASSIGN LOT MODAL-->
    <div class="modal fade" id="assignlotmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Assign Lot</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <p id="message-assignlot" class="text-dark"></p>
                <form><!--container-->
                    <div><!--FOR OWNER LAST USERNAME FIELD-->
                        <label for="">Owner Username</label>
                        <select name="ownerusername" id="ownerusername" class="ownerusername">

                        </select>
                    </div>
                    <div><!--FOR OWNER lot_id FIELD-->
                        <label for="">PROPERTY</label>
                        <input list="blkandlots" name="property" id="property" class="property" placeholder="property" />
                        <datalist id="blkandlots">
                            <option value="blk1lot1"></option>
                            <option value="blk1lot2"></option>
                            <option value="blk1lot3"></option>
                            <option value="blk1lot4"></option>
                            <option value="blk1lot5"></option>
                            <option value="blk1lot6"></option>
                            <option value="blk1lot7"></option>
                            <option value="blk1lot8"></option>
                            <option value="blk1lot9"></option>
                            <option value="blk1lot10"></option>
                            <option value="blk1lot11"></option>
                            <option value="blk1lot12"></option><!--END FOR BLOCK 1-->
                            <option value="blk2lot1"></option>
                            <option value="blk2lot2"></option>
                            <option value="blk2lot3"></option>
                            <option value="blk2lot4"></option>
                            <option value="blk2lot5"></option>
                            <option value="blk2lot6"></option>
                            <option value="blk2lot7"></option>
                            <option value="blk2lot8"></option>
                            <option value="blk2lot9"></option>
                            <option value="blk2lot10"></option>
                            <option value="blk2lot11"></option>
                            <option value="blk2lot12"></option>
                            <option value="blk2lot13"></option>
                            <option value="blk2lot14"></option>
                            <option value="blk2lot15"></option>
                            <option value="blk2lot16"></option>
                            <option value="blk2lot17"></option>
                            <option value="blk2lot18"></option>
                            <option value="blk2lot19"></option>
                            <option value="blk2lot20"></option>
                            <option value="blk2lot21"></option>
                            <option value="blk2lot22"></option>
                            <option value="blk2lot23"></option>
                            <option value="blk2lot24"></option>
                            <option value="blk2lot25"></option>
                            <option value="blk2lot26"></option>
                            <option value="blk2lot27"></option>
                            <option value="blk2lot28"></option>
                            <option value="blk2lot29"></option>
                            <option value="blk2lot30"></option>
                            <option value="blk2lot31"></option>
                            <option value="blk2lot32"></option>
                            <option value="blk2lot33"></option>
                            <option value="blk2lot34"></option>
                            <option value="blk2lot35"></option>
                            <option value="blk2lot36"></option>
                            <option value="blk2lot37"></option>
                            <option value="blk2lot38"></option>
                            <option value="blk2lot39"></option>
                            <option value="blk1lot12"></option>
                            <option value="blk2lot40"></option><!--END FOR BLOCK 2-->
                            <option value="blk3lot1"></option>
                            <option value="blk3lot2"></option>
                            <option value="blk3lot3"></option>
                            <option value="blk3lot4"></option>
                            <option value="blk3lot5"></option>
                            <option value="blk3lot6"></option>
                            <option value="blk3lot7"></option>
                            <option value="blk3lot8"></option>
                            <option value="blk3lot9"></option>
                            <option value="blk3lot10"></option>
                            <option value="blk3lot11"></option>
                            <option value="blk3lot12"></option>
                            <option value="blk3lot13"></option>
                            <option value="blk3lot14"></option>
                            <option value="blk3lot15"></option>
                            <option value="blk3lot16"></option>
                            <option value="blk3lot17"></option>
                            <option value="blk3lot18"></option>
                            <option value="blk3lot19"></option>
                            <option value="blk3lot20"></option>
                            <option value="blk3lot21"></option>
                            <option value="blk3lot22"></option>
                            <option value="blk3lot23"></option>
                            <option value="blk3lot24"></option>
                            <option value="blk3lot25"></option>
                            <option value="blk3lot26"></option>
                            <option value="blk3lot27"></option>
                            <option value="blk3lot28"></option>
                            <option value="blk3lot29"></option>
                            <option value="blk3lot30"></option>
                            <option value="blk3lot31"></option>
                            <option value="blk3lot32"></option>
                            <option value="blk3lot33"></option>
                            <option value="blk3lot34"></option>
                            <option value="blk3lot35"></option><!--END FOR BLOCK 3-->
                            <option value="blk4lot1"></option>
                            <option value="blk4lot2"></option>
                            <option value="blk4lot3"></option>
                            <option value="blk4lot4"></option>
                            <option value="blk4lot5"></option>
                            <option value="blk4lot6"></option>
                            <option value="blk4lot7"></option>
                            <option value="blk4lot8"></option>
                            <option value="blk4lot9"></option>
                            <option value="blk4lot10"></option>
                            <option value="blk4lot11"></option>
                            <option value="blk4lot12"></option>
                            <option value="blk4lot13"></option>
                            <option value="blk4lot14"></option><!--END FOR BLOCK 4-->
                            <option value="blk5lot1"></option>
                            <option value="blk5lot2"></option>
                            <option value="blk5lot3"></option>
                            <option value="blk5lot4"></option>
                            <option value="blk5lot5"></option>
                            <option value="blk5lot6"></option>
                            <option value="blk5lot7"></option>
                            <option value="blk5lot8"></option>
                            <option value="blk5lot9"></option>
                            <option value="blk5lot10"></option>
                            <option value="blk5lot11"></option>
                            <option value="blk5lot12"></option>
                            <option value="blk5lot13"></option>
                            <option value="blk5lot14"></option>
                            <option value="blk5lot15"></option>
                            <option value="blk5lot16"></option>
                            <option value="blk5lot17"></option>
                            <option value="blk5lot18"></option>
                            <option value="blk5lot19"></option>
                            <option value="blk5lot20"></option>
                            <option value="blk5lot21"></option>
                            <option value="blk5lot22"></option>
                            <option value="blk5lot23"></option>
                            <option value="blk5lot24"></option>
                            <option value="blk5lot25"></option>
                            <option value="blk5lot26"></option>
                            <option value="blk5lot27"></option><!--END FOR BLOCK 5-->
                            <option value="blk6lot1"></option><!--END FOR BLOCK 6-->
                        </datalist>
                    </div>
                    <div><!--FOR OWNERSHIP FIELD-->
                        <label for="">OWNERSHIP</label>
                        <input type="checkbox" class="ownership" name="ownership" id="ownership" value="homeowner">Homeowner
                        <input type="checkbox" class="ownership" name="ownership" id="ownership" value="Lotowner">Lot owner
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Close</button>
                        <button type="reset" value="reset" id="reset">Reset</button>
                        <button type="button" name="assignlot_button" class="assignlot_button" id="assignlot_button">Assign Property</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--INSERT OWNER ACCOUNT MODAL-->
    <div class="modal fade" id="owneraddaccountmodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Owner Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <p id="message-addowner" class="text-dark"></p>
                <form><!--container-->
                    <div><!--FOR OWNER FIRSTNAME FIELD-->
                        <label for="">First Name</label>
                        <input name="owner_fname" id="owner_fname" placeholder="First Name">
                    </div>
                    <div><!--FOR OWNER LASTNAME FIELD-->
                        <label for="">Last Name</label>
                        <input name="owner_lname" id="owner_lname" placeholder="Last Name">
                    </div>
                    <div><!--FOR OWNER EMAIL FIELD-->
                        <label for="">Email Address</label>
                        <input type="email" name="owner_email" id="owner_email" placeholder="owner@email.com">
                    </div>
                    <div><!--FOR OWNER USERNAME FIELD-->
                        <label for="">Username</label>
                        <input name="owner_username" id="owner_username" value="" readonly>
                        <button id="usernamegenerate" name="usernamegenerate" type="button" hidden>Generate</button>

                    </div>

                    <div><!--FOR OWNER PASSWORD FIELD-->
                        <label for="">Password</label>
                        <input name="owner_password" id="owner_password" value="" placeholder="password">
                        <button id="passgenerate" name="passgenerate" onclick="getPassword()" type="button">Generate</button>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Close</button>

                        <button type="reset" value="reset" id="reset">Reset</button>
                        <button type="button" name="addowner_button" class="addowner_button" id="addowner_button">Add Account</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Update Modal -->

    <div class="modal fade" id="updateOwnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Update Account Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <p id="message-updateowner" class="text-dark"></p>
                <form>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="up_owner_username">Username</label>
                            <input type="text" name="up_owner_username" id="up_owner_username" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="up_owner_fname">First Name</label>
                            <input type="text" name="up_owner_fname" id="up_owner_fname" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="up_owner_lname">Last Name</label>
                            <input type="text" name="up_owner_lname" id="up_owner_lname" class="form-control" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="up_owner_email">Email</label>
                            <input type="text" name="up_owner_email" id=up_owner_email class="form-control" placeholder="">
                        </div>
                    </div>
                    <input name="ownerupdate_id" id="ownerupdate_id" type="hidden">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Close</button>
                        <button type="button" class="btn btn-primary" id="btn_updateowneracc" name="btn_updateowneracc" onclick="updateownerInfo()">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DeleteModal -->

    <div class="modal fade" id="deleteOwnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <div class="mo dal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                        <button type="button" class="btn btn-danger" name="btn_deleteowneracc" id="btn_deleteowneracc">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- View Modal -->

    <div class="modal fade viewOwnerModal" id="viewOwnerModal" name="viewOwnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content" id="eventsss">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="scrolls">
                    <form>
                        <input name="ownerview_id" id="ownerview_id" readonly hidden>
                        <input name="view_username" id="view_username" readonly hidden>
                        <div class="form-group">
                            <label for="view_fname">First Name</label>
                            <input type="text" name="view_fname" id="view_fname" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="view_lname">Last Name</label>
                            <input type="text" name="view_lname" id="view_lname" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="view_gender">Gender</label>
                            <input type="text" name="view_gender" id="view_gender" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="birthdate">Birthdate</label>
                            <input type="text" name="view_birthdate" id="view_birthdate" class="form-control" placeholder="" readonly>
                        </div><br>
                        <h5>Contact Details</h5>
                        <div class="form-group">
                            <label for="view_email">Email Address</label>
                            <input type="text" name="view_email" id="view_email" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="view_cpnum">Cellphone Number</label>
                            <input type="text" name="view_cpnum" id="view_cpnum" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="view_telnum">Telephone Number</label>
                            <input type="text" name="view_telnum" id="view_telnum" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="view_add">Home Address</label>
                            <textarea type="text" name="view_add" id="view_add" class="form-control" placeholder="" readonly></textarea>
                        </div>
                        <br>
                        <h5>Assign Lots</h5>
                        <button id="btn_qq" class="btn_qq" name="view_button" type="button" onclick="display_assignedlot_table_record()" hidden>VIEW</button>
                        <div id="owner_assignedlots"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--BOOTSTRAP SCRIPTS FOR MODALS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    <!--ETO JQUERY BAKA MERON NA U NETO-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--DISPLAY TABLE-->
    <script>
        $(document).ready(function() {
            display_owner_table_record();
            display_assignedlot_table_record();
            Insert_addowner_record();
            get_Username();
            Assign_Lots();
            get_Usernames();
            delete_owner_record();


        });
        $(document).on('click', '#addowner_button', function() {});
        //DISPLAY TABLE
        function display_owner_table_record() {
            var displayOwnerData = "true";
            $.ajax({
                url: 'adminViews/includes/Act-display-owner-records.php',
                type: 'post',
                data: {
                    displayOwnerSend: displayOwnerData
                },
                success: function(data, status) {
                    $('#owneraccounttable').html(data);
                }
            });
        }

        //GET USERNAME FOR INSERTING OWNER ACCOUNT
        function get_Username() {
            $(document).on('click', '#usernamegenerate', function() {
                $.ajax({
                    method: "post",
                    url: "adminViews/includes/username.php",
                    success: function(data) {
                        $("#owner_username").val(data);
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
            document.getElementById('owner_password').value = owner_password;
        }
        //INSERTING OWNER ACCOUNT
        function Insert_addowner_record() {
            $(document).on('click', '#addowner_button', function() {
                var OFname = $('#owner_fname').val();
                var OLname = $('#owner_lname').val();
                var OEmail = $('#owner_email').val();
                var OUsername = $('#owner_username').val();
                var OPassword = $('#owner_password').val();
                $.ajax({
                    url: 'adminViews/includes/Act-AddOwner.php',
                    method: 'post',
                    data: {
                        OwnerFname: OFname,
                        OwnerLname: OLname,
                        OwnerEmail: OEmail,
                        OwnerUsername: OUsername,
                        OwnerPassword: OPassword
                    },
                    success: function(data) {
                        $('#message-addowner').html(data);
                        $('#owneraddaccountmodal').modal('show');
                        $('reset').trigger('click');
                        $('#usernamegenerate').trigger('click');
                        display_owner_table_record();
                    }
                })
            })
            $(document).on('click', '#btn_close', function() {
                $('form').trigger('reset');
                $('#message-addowner').html('');
            })
            $(document).on('click', '#reset', function() {
                $('#usernamegenerate').trigger('click');
            })
            $(document).on('click', '#btn_add_owner_acc', function() {
                $('#usernamegenerate').trigger('click');
            })
        }

        //GETTING USERNAMES FOR ASSIGNING LOTS
        function get_Usernames() {
            $('.btn_assign_owner_lot').on('click', function() {
                $.ajax({
                    method: "post",
                    url: "adminViews/includes/username-assign.php",
                    success: function(data) {
                        $("#ownerusername").html(data);

                    }
                });
            });
        }

        //ASSIGNING LOTS TO ACCOUNTS
        function Assign_Lots() {
            $(document).on('click', '#assignlot_button', function() {
                var LUsername = $('#ownerusername').val();
                var LProperty = $('#property').val();
                //var LOwnership = $('#ownership').val();
                var OwnerType = [];
                $('.ownership').each(function() {
                    if ($(this).is(":checked")) {
                        OwnerType.push($(this).val());
                    }
                });
                OwnerType = OwnerType.toString();
                $.ajax({
                    url: 'adminViews/includes/Act-AssignLot.php',
                    method: 'post',
                    data: {
                        LotUsername: LUsername,
                        LotProperty: LProperty,
                        OwnerType: OwnerType,
                    },
                    success: function(data) {
                        $('#message-assignlot').html(data);
                        $('#assignlotmodal').modal('show');
                        $('reset').trigger('click');
                        $('#usernameupdate').trigger('click');
                        display_owner_table_record();
                    }
                })
            })
            $(document).on('click', '#btn_close', function() {
                $('form').trigger('reset');
                $('#message-assignlot').html('');
            })
        }

        //SCRIPTS FOR UPDATING ACCOUNT BUTTONS
        function get_owner_record(updateownerid) { // to show the current data
            $('#ownerupdate_id').val(updateownerid);
            $.post("adminViews/includes/Act-UpdateOwner.php", {
                updateownerid: updateownerid
            }, function(data, status) {
                var owner = JSON.parse(data);
                $('#up_owner_fname').val(owner.owner_fname);
                $('#up_owner_lname').val(owner.owner_lname);
                $('#up_owner_username').val(owner.owner_username);
                $('#up_owner_email').val(owner.owner_email);
            });
            $('#updateOwnerModal').modal("show");
        }

        function updateownerInfo() { // updating the data
            var up_owner_fname = $('#up_owner_fname').val();
            var up_owner_lname = $('#up_owner_lname').val();
            var up_owner_username = $('#up_owner_username').val();
            var up_owner_email = $('#up_owner_email').val();
            var ownerupdate_id = $('#ownerupdate_id').val();

            $.post('adminViews/includes/Act-UpdateOwner.php', {
                    up_owner_fname: up_owner_fname,
                    up_owner_lname: up_owner_lname,
                    up_owner_username: up_owner_username,
                    up_owner_email: up_owner_email,
                    ownerupdate_id: ownerupdate_id
                },
                function(data, status) {
                    $('#updateOwnerModal').modal('show');
                    $('#message-updateowner').html(data);
                    display_owner_table_record();
                });
        }

        //DELETE OWNER RECORDS
        function delete_owner_record() {
            $(document).on('click', '#btn_delete_owner_acc', function() {
                var Delete_Owner_ID = $(this).attr('data-id2');
                $(document).on('click', '#btn_deleteowneracc', function() {
                    $.ajax({
                        url: 'adminViews/includes/Act-DeleteAdmin.php',
                        method: 'post',
                        data: {
                            DeleteOwner: Delete_Owner_ID
                        },
                        success: function(data) {
                            $('#deleteOwnerModal').modal('hide');
                            $('#delete-message').html(data); //.hide(5000);
                            display_owner_table_record();
                        }
                    })
                })
            })
        }


        //SCRIPT FOR VIEWING ACCOUNT BUTTONS   
        function get_owner_info(viewid) { // to show the current data
            $('#ownerview_id').val(viewid);
            // $('#ownerview_name').val(viewname);
            $.post("adminViews/includes/Act-ViewOwner.php", {
                viewid: viewid
            }, function(data, status) {
                var view = JSON.parse(data);
                $('#view_fname').val(view.owner_fname);
                $('#view_lname').val(view.owner_lname);
                $('#view_username').val(view.owner_username);
                $('#view_email').val(view.owner_email);
                $('#view_gender').val(view.owner_gender);
                $('#view_birthdate').val(view.owner_birthdate);
                $('#view_cpnum').val(view.owner_mobile);
                $('#view_telnum').val(view.owner_telephone);
                $('#view_add').val(view.owner_address);
            });
            $('#viewOwnerModal').modal("show");
            $('#btn_qq').trigger("click");

        }

        //$(document).ready(function() {
        //$('.btn_view_owner_acc').on('click', function() {
        //   $('#viewOwnerModal').modal('show');
        //  $tr = $(this).closest('tr');
        //  var data = $tr.children("td").map(function() {
        //     return $(this).text();
        //   }).get();
        //   console.log(data);
        //   $('#ownerview_id').val(data[0]);
        // });
        //  });

        //DISPLAY ASSIGNED LOT TABLE
        function display_assignedlot_table_record() {

            $(document).on('click', '#btn_qq', function() {
                var VUsername = $('#view_username').val();
                var displayLotData = "true";
                $.ajax({
                    url: 'adminViews/includes/Act-display-assignedlot-records.php',
                    type: 'post',
                    data: {
                        displayLotSend: displayLotData,
                        VUsername: VUsername
                    },
                    success: function(data, status) {
                        $('#owner_assignedlots').html(data);

                    }
                });

                //  $.post('includes/Act-display-assignedlot-records.php', {
                // VUsername      : VUsername ,})
            })
        }
        $("#scrolls").scroll(function() {
            $('#btn_qq').trigger("click");
        });
        $("#eventsss").hover(function() {
            $('#btn_qq').trigger("click");
        });
    </script>

</div>