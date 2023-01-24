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
    $(document).ready(function() {
        var currentPage = localStorage.getItem("currentPage");
        if (!currentPage) {
            currentPage = 1;
        }
        displayMessageData(currentPage);
    });

    function displayMessageData(page) {
        localStorage.setItem("currentPage", page);
        var messageData = "true";
        $.ajax({
            url: 'homeownerViews/includes/act-displayAnnouncement.php',
            type: 'post',
            data: {
                messageSend: messageData,
                page: page
            },
            success: function(data, status) {
                $('#current-message').html(data);
            }
        });
    }

    function getMessagePage(page) {
        displayMessageData(page);
    }
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
                    $('#adminAddAccountModal').modal('hide');
                }
            });
        });
    }
</script>