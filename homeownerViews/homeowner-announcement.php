<div class="owner-announcement">
    <div class="owner-announcement-title">
        <h1>ANNOUNCEMENT</h1>
    </div>
    <div class="owner-announcement-content">
        <div class="announcement-posted" id="announcement-posted">

        </div>
    </div>
</div>

<div class="modal fade modal-lg viewAnnouncement" id="viewAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="addUserModalLabel">Announcement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="view-announcement" enctype="multipart/form-data">
                <div class="modal-body">
                    
                    <input name="announce_view_id" id="announce_view_id" readonly hidden>
                    <h6>Date Posted</h6>
                    <p class="date" id="date"></p>
                    <h4 class="title" id="title"></h4>
                    <img id="img">
                    <h6>Description:</h6>
                    <h6 id="description"></h6>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-btn" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    // For pagination
    $(document).ready(function() {
        displayOwnerAnnouncement();
    });

    //View announcement
    function get_ownerAnnounce_info(announceOwner_id) { // to show the current data
        $('#announce_view_id').val(announceOwner_id);
        $.post("homeownerViews/includes/act-viewOwnerAnnouncement.php", {
            announceOwner_id: announceOwner_id
        }, function(data, status) {
            var announce = JSON.parse(data);
            $('#date').text(announce.announcement_date);
            $('#title').text(announce.announcement_title);
            $('#img').attr('src', announce.announcement_attachment);
            $('#description').text(announce.announcement_description);

        });
        $('#viewAnnouncement').modal("show");
    }

    $(document).ready(function() {
        var currentPage = localStorage.getItem("currentPage");
        if (!currentPage) {
            currentPage = 1;
        }
        displayAnnouncement(currentPage);
    });

    function displayOwnerAnnouncement(page) {
        localStorage.setItem("currentPage", page);
        var announcementOwnerData = "true";
        $.ajax({
            url: 'homeownerViews/includes/act-displayHomeAnnounce.php',
            type: 'post',
            data: {
                announcementOwnerSend: announcementOwnerData,
                page: page
            },
            success: function(data, status) {
                $('#announcement-posted').html(data);
            }
        });
    }

    function getPage(page) {
        displayOwnerAnnouncement(page);
    }
</script>