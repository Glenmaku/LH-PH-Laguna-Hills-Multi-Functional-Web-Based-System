<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Send Mail From Localhost</title>
    <!-- bootstrap cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <link rel="stylesheet" href="../adminViews/phpmailer/mailstyle.css">
    <!-- <link rel="stylesheet" href="phpmailer/sendmail_database.php/mailstyle.css"> -->
</head>
<style>
    .table_contactsss {
        min-height: 80vh;
        max-height: 100vh;
    }
</style>

<body>
    <div class="container">
        <div class="container-form">
            <div class="row">
                <div class="custom-switch button_section d-flex flex-row-reverse">
                    <div class="switch_label">
                        <div class="text_switch">Send to All</div>
                        <input id="s1d" type="checkbox" class="switch">
                        <label for="s1d">Switch</label>
                    </div>


                </div>
                <div class="col-lg mail-form">


                    <h1 class="text-center">
                        Send Email
                    </h1>

                    <!-- message -->
                    <form id="message-form">
                        <div class="form-group">
                            <!-- <label for="exampleFormControlInput1">Email address</label> -->
                            <span>Email address</span>
                            <input type="email" class="form-control emailadd_send" id="send_email" placeholder="name@example.com" required>
                        </div>

                        <div class="form-group">
                            <!-- <label for="subject">Subject</label> -->
                            <span>Subject</span>
                            <input type="subject" class="form-control emailadd_send" id="send_subject" placeholder="Subject" required>
                        </div>

                        <div class="info-msg"> <br></div>

                        <div class="form-group" id="txtareabox">
                            <textarea cols="80" rows="10" class="form-control textarea " name="message" id="message" placeholder="Compose your message.." required></textarea>
                        </div>
                        <div class="btn-container">
                            <button class="btn btn-success btn-lg btn-block">Send Email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid m3 table_contactsss">
        <h1>Messages</h1>
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="all-transaction-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true" onclick="get_ContactData()">Inquiries</button>

                <button class="nav-link" id="association-dues-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false" onclick="get_HomeMessage()">Homeowners Messages</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <!---->
            <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <div class=" input-group  mb-3 owner-search-add-area" style="justify-content: space-between;">
                    <input type="text" class="form-control" id="search-contacts" placeholder="Search Here...." style="width: 40px;">
                </div>
                <div class="" id="contact_table"></div>
            </div>
            <!---->
            <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                <div class=" input-group  mb-3 owner-search-add-area" style="justify-content: space-between;">
                    <input type="text" class="form-control" id="search-homemessage" placeholder="Search Here...." style="width: 40px;">
                </div>
                <div class="" id="messagess_table"></div>
                <!---->
            </div>

        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0"> </div>

            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
        </div>
    </div>

    </div>

    <div class="modal fade viewOwnersModal" id="viewOwnersModal" name="viewOwnersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content" id="eventsss">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body" id="scrolls">
                    <form>
                        <input name="ownerview_ids" id="ownerview_ids">
                        <input name="views_username" id="views_username">
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="view_fname">First Name</label>
                            <input type="text" name="view_fname" id="Sview_fname" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="view_lname">Last Name</label>
                            <input type="text" name="view_lname" id="view_lname" class="form-control" placeholder="" readonly>
                        </div>
                        <!--   <div class="input-group  mb-3"hidden>
                            <label class="input-group-text" for="view_gender">Gender</label>
                            <input type="text" name="view_gender" id="view_gender" class="form-control" placeholder="" readonly>
                        </div>-->
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="birthdate">Birthdate</label>
                            <input type="text" name="view_birthdate" id="view_birthdate" class="form-control" placeholder="" readonly>
                        </div><br>
                        <h5>Contact Details</h5>
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="view_email">Email Address</label>
                            <input type="text" name="view_email" id="view_email" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="view_cpnum">Cellphone Number</label>
                            <input type="text" name="view_cpnum" id="view_cpnum" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="view_telnum">Telephone Number</label>
                            <input type="text" name="view_telnum" id="view_telnum" class="form-control" placeholder="" readonly>
                        </div>
                        <div class="input-group  mb-3">
                            <label class="input-group-text" for="view_add">Home Address</label>
                            <textarea type="text" name="view_add" id="view_add" class="form-control" placeholder="" readonly></textarea>
                        </div>
                        <br>
                        <h5>Assign Lots</h5>
                        <button id="btn_qqq" class="btn_qqq" name="view_button" type="button" onclick="display_assignedlot_table_record()" hidden>VIEW</button>
                        <div id="owner_assignedlots"></div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btn_close">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../adminViews/phpmailer/link.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script>
        $(function() {
            var messagevar = $("#message");
            var emailvar = $("#send_email");
            var subjectvar = $("#send_subject");
            $("#message-form").submit(function(e) {
                e.preventDefault();
                var form = this;
                $(".info-msg").text('sending email...');

                $.ajax({
                    url: '../adminViews/phpmailer/one_emailHandler.php',

                    method: 'POST',
                    data: {
                        message: messagevar.val(),
                        email: emailvar.val(),
                        subject: subjectvar.val()
                    },
                }).done(function(response) {
                    $(".info-msg").html(response);
                    // $(".info-msg").html(response);
                    // $(".info-msg").html("<button class='message-sent-btn'>Message Sent</button>");
                    setTimeout(function() {
                        $(".info-msg").hide();
                    }, 5000);
                })
            })
        })

        //       $("#s1d").change(function() {
        //     if(this.checked) {
        //         show_email_all();
        //     } else if(!this.checked) {
        //         show_email_one(); }
        // });
        // function show_email_all(){  
        //     $.ajax({
        //         url:"./adminViews/phpmailer/sendmail_database/sendmail_database.php",
        //         method:"post",
        //         data:{record:1},
        //         success:function(data){
        //             $('.container').html(data);
        //             console.log(data);
        //         }
        //     });
        // }

        // function show_email_one(){  
        //     $.ajax({
        //         url:"../../adminViews/sendmail_email.php",
        //         method:"post",
        //         data:{record:1},
        //         success:function(data){
        //             $('.container').html(data);
        //             console.log(data);
        //         }
        //     });
        // }
        $(document).ready(function() {

            var currentPage = localStorage.getItem("currentPage");
            if (!currentPage) {
                currentPage = 1;
            }
            get_ContactData(currentPage);
            get_HomeMessage(currentPage);
        });

        //    function get_ContactData(){
        //    var get_ContactData="true";
        //    $.ajax({
        //       url:"adminViews/includes/Act-getContact_Us.php",
        //       type:"post",
        //       data:{ get_ContactData:get_ContactData},
        //       success:function(data, status){
        //          $("#contact_table").html(data);
        //       }
        //    });
        // }
        function get_ContactData(page) {
            localStorage.setItem("currentPage", page);
            var get_ContactData = "true";
            $.ajax({
                url: 'adminViews/includes/Act-getContact_Us.php',
                type: 'post',
                data: {
                    get_ContactData_Rec: get_ContactData,
                    page: page
                },
                success: function(data, status) {
                    $("#contact_table").html(data);
                }
            });
        }

        function Get_Contact_Table(page) {
            get_ContactData(page);
        }
        ///////////////////////////////////////

        function get_HomeMessage(page) {
            localStorage.setItem("currentPage", page);
            var get_HomeMessages = "true";
            $.ajax({
                url: 'adminViews/includes/Act-getHome_Messages.php',
                type: 'post',
                data: {
                    get_HomeMessages_Rec: get_HomeMessages,
                    page: page
                },
                success: function(data, status) {
                    $("#messagess_table").html(data);
                }
            });
        }

        function Get_HomeMessages_Table(page) {
            get_HomeMessage(page);
        }

        $(document).ready(function() {
            load_data_get_ContactData();
            load_data_get_HomeMessages();

            function load_data_get_ContactData(allconsquery) {
                $.ajax({
                    url: "adminViews/includes/Act-search-getContactData.php",
                    method: "POST",
                    data: {
                        allconsquery: allconsquery
                    },
                    success: function(data) {
                        $("#contact_table").html(data);
                    }
                });
            }

            $('#search-contacts').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data_get_ContactData(search);
                } else {
                    load_data_get_ContactData();
                }
            });
            //////////////////////
            function load_data_get_HomeMessages(allmessquery) {
                $.ajax({
                    url: "adminViews/includes/Act-search-getHomeMessages.php",
                    method: "POST",
                    data: {
                        allmessquery: allmessquery
                    },
                    success: function(data) {
                        $("#messagess_table").html(data);
                    }
                });
            }

            $('#search-homemessage').keyup(function() {
                var search = $(this).val();
                if (search != '') {
                    load_data_get_HomeMessages(search);
                } else {
                    load_data_get_HomeMessages();
                }
            });
        });



        function get_owner_contact(viewusername) { // to show the current data
            $('#views_username').val(viewusername);
            // $('#ownerview_name').val(viewname);

            $.post("adminViews/includes/Act-ViewOwnerContact.php", {
                viewusername: viewusername
            }, function(data, status) {
                var views = JSON.parse(data);
                $('#view_fname').val(views.owner_fname);
                $('#view_lname').val(views.owner_lname);
                $('#views_username').val(views.owner_username);
                $('#view_email').val(views.owner_email);
                //   $('#view_gender').val(view.owner_gender);
                $('#view_birthdate').val(views.owner_birthdate);
                $('#view_cpnum').val(views.owner_mobile);
                $('#view_telnum').val(views.owner_telephone);
                $('#view_add').val(views.owner_address);
            });
            $('#viewOwnersModal').modal('show');
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>
</body>

</html>