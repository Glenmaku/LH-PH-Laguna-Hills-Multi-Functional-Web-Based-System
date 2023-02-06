<?php
session_start();
if (!empty($_SESSION['owner_I_D'])) {
    $username = $_SESSION['owner_username'];
    $ownerid = $_SESSION['owner_I_D'];
    $Fname = $_SESSION['owner_fName'];
    $Lname= $_SESSION['owner_lName'];
    $Email= $_SESSION['owner_email'];
    

} else{
    header("location:index.php");
    exit();
}
?>
<div class="homeowner-message">
    <div class="email-area">
        <div class="homeowner-title">
            <h1>MESSAGE</h1>
        </div>

        <div class="message-area">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2 " id="send-email" data-bs-toggle="modal" data-bs-target="#sendMailModal"><i class="fa-solid fa-feather"></i> Compose</button>
            </div>

            <div class="current-message" id="current-message">

            </div>
        </div>
    </div>

</div>

<div class="modal" tabindex="-1" id="sendMailModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="addUserModalLabel">New Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="myform">
                <div class="modal-body">
                    <div class="mb-3">
                    <input type="text" class="form-control" id="message_name" name="message_name" value="<?php echo $Fname." ".$Lname?>" hidden>
                    <input type="text" class="form-control" id="message_username" name="message_username" value="<?php echo $username?>" hidden>
                        <input type="text" class="form-control" id="emailTitle" name="emailTitle" placeholder="Enter a Title" required>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="emailDescription" name="emailDescription" placeholder="Compose a email here" id="floatingTextarea2" style="height: 200px" required></textarea>
                        <label for="floatingTextarea2">Compose a email here</label><br>
                    </div>
                </div>
                <div class="modal-footer" style="justify-content: space-between;">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-success" id="addMessage"><i class="fa-solid fa-paper-plane" name="send"></i> Send Email</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    //announcement area
    $(document).ready(function() {
        displayMessage();
        ownerCompose();
    });
    
    //email area
    
//insert data
    function ownerCompose() {
        $(document).on('click', '#addMessage', function() {
            var Mname = $('#message_name').val();
            var Musername = $('#message_username').val();
            var MTitle = $('#emailTitle').val();
            var MCompose = $('#emailDescription').val();

            $.ajax({
                url: 'homeownerViews/includes/act-sendMail.php',
                method: 'post',
                data: {
                    Musername:Musername,
                    Mname:Mname,
                    MTitle: MTitle,
                    MCompose: MCompose
                },
                success: function(data) {
                    $('#sendMailModal').modal('hide');
                    $('form').trigger('reset');
                    displayMessage();
                }
            });
        });
    }

//show table of message
$(document).ready(function() {
        var messageCurrentPage = localStorage.getItem("messageCurrentPage");
        if (!messageCurrentPage) {
            messageCurrentPage = 1;
        }
        displayAnnouncement(messageCurrentPage);
    });

    function displayMessage(messagePage) {
        localStorage.setItem("messageCurrentPage", messagePage);
        var messageData = "true";
        $.ajax({
            url: 'homeownerViews/includes/act-displayMessage.php',
            type: 'post',
            data: {
                messageSend: messageData,
                messagePage: messagePage
            },
            success: function(data, status) {
                $('#current-message').html(data);
            }
        });
    }

    function getMessagePage(messagePage) {
        displayMessage(messagePage);
    }
</script>