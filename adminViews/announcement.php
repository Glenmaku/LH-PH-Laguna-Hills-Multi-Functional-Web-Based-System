<div class="all-announcement">
    <div class="announcement-menu">
        <div class="announcement-title">
            <h1>ANNOUNCEMENT</h1>
        </div>
    </div>

    <div class="announcement-area">
        <div class="add-announcement">
            <button class="add-announcement-btn" data-bs-toggle="modal" data-bs-target="#addAnnouncement"><i class="fa-solid fa-plus"></i> New Announcement</button>
        </div>

        <div class="current-announcement">

        </div>
    </div>

    <div class="modal fade" id="addAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addUserModalLabel">Add New Announcement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="adminViews/includes/announcementSubmit.php" id="add-announcement" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="announcementTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="announcementTitle" name="announcementTitle" placeholder=" Enter your Title" required>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="announcementDescription" name="announcementDescription" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label><br>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="imgAnnouncement">Upload</label>
                            <input type="file" class="form-control" id="imgAnnouncement" name="imgAnnouncement">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="announcement-submit-btn" id="announcement-submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(e) {
            $("#add-announcement").on('submit', (function(e) {
                e.preventDefault();
                $.ajax({
                    url: "adminViews/includes/announcementSubmit.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data, status) {
                        $('#addAnnouncement').modal("hide");
                    },
                    error: function() {}
                });
            }));
        });

        
    </script>