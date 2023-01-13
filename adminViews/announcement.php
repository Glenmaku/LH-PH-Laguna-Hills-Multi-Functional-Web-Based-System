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
                <div class="modal-body">
                    <form id="announcement-form" enctype='multipart/form-data'>
                        <div class="mb-3">
                            <label for="announcementTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="announcementTitle" placeholder=" Enter your Title" required>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="announcementDescription" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label><br>
                        </div>
                        <div class="input-group mb-3">

                            <input type="file" class="form-control" id="attachmentFile">
                            <input type="hidden" name="hidden_upload_folder" id="hidden_upload_folder">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" id="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="announcement-submit-btn" id="announcement-submit-btn" onclick="">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script>
       

    </script>