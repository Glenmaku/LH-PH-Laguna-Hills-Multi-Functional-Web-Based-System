<!--JUST COPY THE CODE BETWEEN THE COMMENT AND PASTE IT TO THE HOMEOWNER BODY OR HEADER-->
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LH-PH: Homeowners</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymosus">
    <!--------- Stylesheet ------------>
    <link rel="stylesheet" href="assets/css/style.css"></link>
    <!--------- Icon ------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    
</head>

<body>

    <?php
        include 'homeownerViews/homeownerHeader.php';
        include 'homeownerViews/homeownerSidebar.php';
    ?>
   <div class="allContent">
   <div class="homeowner-message">
    <div class="email-area">
        <div class="homeowner-title">
            <h1>EMAILS</h1>
        </div>

        <div class="message-area">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2 " id="send-email" data-bs-toggle="modal" data-bs-target="#sendMailModal"><i class="fa-solid fa-feather"></i> Compose</button>
            </div>

            <div class="current-message" id="current-message">

            </div>
        </div>
    </div>

    <div class="announcement-panel">
        <div class="latest-announcement">
            <div class="announcement-header">
                <h5 class="announcementHeader-title">Announcement</h5>
            </div>


            <div class="homeowner-announcement" id="homeowner-announcement">


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
    $(document).ready(function() {
        var currentPage = localStorage.getItem("currentPage");
        if (!currentPage) {
            currentPage = 1;
        }
        displayAnnouncement(currentPage);
    });

    function displayAnnouncement(page) {
        localStorage.setItem("currentPage", page);
        var announcementData = "true";
        $.ajax({
            url: 'homeownerViews/includes/act-displayAnnouncement.php',
            type: 'post',
            data: {
                announcementSend: announcementData,
                page: page
            },
            success: function(data, status) {
                $('#homeowner-announcement').html(data);
            }
        });
    }

    function getPage(page) {
        displayAnnouncement(page);
    }
    //email area
    
//insert data
    function ownerCompose() {
        $(document).on('click', '#addMessage', function() {
            var MTitle = $('#emailTitle').val();
            var MCompose = $('#emailDescription').val();

            $.ajax({
                url: 'homeownerViews/includes/act-sendMail.php',
                method: 'post',
                data: {
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
   </div>
    
    <!--BOOTSTRAP SCRIPTS FOR MODALS-->
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="assets/js/ajax.js"></script>
</html>
