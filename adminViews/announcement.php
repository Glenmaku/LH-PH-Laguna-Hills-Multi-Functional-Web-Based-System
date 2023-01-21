<div class="all-announcement">
    <div class="announcement-menu">
        <div class="announcement-title">
            <h1>ANNOUNCEMENT</h1>
        </div>
    </div>

    <div class="announcement-area">
        <div class="input-group input-group-sm mb-3 add-announcement">
            <input type="text" class="form-control" id="search-announcement" placeholder="Search Here....">
            <button id="add-announcement-btn" data-bs-toggle="modal" data-bs-target="#addAnnouncement"><i class="fa-solid fa-plus"></i> New Announcement</button>
        </div>

        <div class="current-announcement" id="current-announcement">

        </div>
    </div>
</div>
    <!-- Add new Announcement Modal -->
    <div class="modal fade" id="addAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addUserModalLabel">Add New Announcement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="add-announcement" enctype="multipart/form-data">
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
<!-- View Modal -->
<div class="modal fade modal-lg" id="viewAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <h4 class="title" id="title" style="text-align: center;"></h4>
                    <img id="img" src="adminViews/includes/announcementFileView.php?=<?php $announce['announcement_attachment']; ?>" alt="">
                    <p id="description"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close-btn" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- update Modal -->
<div class="modal fade" id="updateAnnouncement" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="addUserModalLabel">Update Announcement</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="add-announcement" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="announcementTitle" class="form-label">Title</label>
                            <input type="text" class="form-control" id="updateAnnouncementTitle" name="updateAnnouncementTitle" placeholder=" Enter your Title" required>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" id="updateAnnouncementDescription" name="updateAnnouncementDescription" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Description</label><br>
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="UpdateImgAnnouncement">Upload</label>
                            <input type="file" class="form-control" id="UpdateImgAnnouncement" name="UpdateImgAnnouncement">
                        </div>
                    </div>
                    <input name="update_announce_id" id="update_announce_id" type="hidden">
                    <div class="modal-footer">
                        <button type="button" id="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="announcement-submit-btn" id="announcement-submit-btn" onclick="updateAnnounceInfo()">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- DeleteModal -->

<div class="modal fade deleteAnnounceModal" id="deleteAnnounceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <form>
                <div class="modal-body">
                    <input type="hidden" name="announceDelete_id" id="announceDelete_id">
                    <p>Are you sure you want to delete this account?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="btn_close">Cancel</button>
                    <button type="button" class="btn btn-danger" name="btn_deleteAnnounce" id="btn_deleteAnnounce">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>







<script type="text/javascript">
    $(document).ready(function() {
        delete_announce_record();

    });
    $(document).ready(function() {
        //add new announcement
        $("#add-announcement").submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: 'adminViews/includes/announcementSubmit.php',
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    // Process the response
                    if (data.indexOf("success") !== -1) {
                        // Clear the form fields
                        $("#announcementTitle").val('');
                        $("#announcementDescription").val('');
                        $("#imgAnnouncement").val('');
                        // Close the modal
                        $('#addAnnouncement').modal('hide');
                        // Show a success message
                        displayAnnouncement();
                    } else {
                        // Show an error message
                        alert('Error: ' + data);
                    }
                }
            });
        });
    });

    //View announcement
    function get_announce_info(announce_id) { // to show the current data
        $('#announce_view_id').val(announce_id);
        $.post("adminViews/includes/Act-ViewAnnouncement.php", {
            announce_id: announce_id
        }, function(data, status) {
            var announce = JSON.parse(data);
            $('#date').text(announce.announcement_date);
            $('#title').text(announce.announcement_title);
            $('#img').attr('src', announce.announcement_attachment);
            $('#description').text(announce.announcement_description);

        });
        $('#viewAnnouncement').modal("show");
    }
    // update announcement
    function get_announce_record(update_announce_id) { // to show the current data
            $('#update_announce_id').val(update_announce_id);
            $.post("adminViews/includes/Act-UpdateAnnounce.php", {
                update_announce_id: update_announce_id
            }, function(data, status) {
                var announce = JSON.parse(data);
                $('#updateAnnouncementTitle').val(announce.announcement_title);
                $('#UpdateImgAnnouncement').val(announce.announcement_attachment);
                $('#updateAnnouncementDescription').val(announce.announcement_description);
            });
            $('#updateAnnouncement').modal("show");
        }

        function updateAnnounceInfo() { // updating the data
            var updateAnnouncementTitle = $('#updateAnnouncementTitle').val();
            var UpdateImgAnnouncement = $('#UpdateImgAnnouncement').val();
            var updateAnnouncementDescription = $('#updateAnnouncementDescription').val();
            var update_announce_id = $('#update_announce_id').val();

            $.post('adminViews/includes/Act-UpdateAnnounce.php', {
                updateAnnouncementTitle: updateAnnouncementTitle,
                UpdateImgAnnouncement: UpdateImgAnnouncement,
                updateAnnouncementDescription: updateAnnouncementDescription,
                update_announce_id: update_announce_id
                },
                function(data, status) {
                    $('#updateAnnouncement').modal('show');
                    $('#message-updateAnnounce').html(data);
                    displayAnnouncement();
                });
        }








    //Delete announcement
    function delete_announce_record() {
        $(document).on('click', '#btn_delete_announce', function() {
            var Delete_announce_ID = $(this).attr('data-id2');
            $(document).on('click', '#btn_deleteAnnounce', function() {
                $.ajax({
                    url: 'adminViews/includes/Act-DeleteAnnounce.php',
                    method: 'post',
                    data: {
                        DeleteAnnounce: Delete_announce_ID
                    },
                    success: function(data) {
                        $('#deleteAnnounceModal').modal('hide');
                        displayAnnouncement();
                    }
                })
            })
        })
    }

    // For pagination
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
            url: 'adminViews/includes/displayNewAnnouncement.php',
            type: 'post',
            data: {
                announcementSend: announcementData,
                page: page
            },
            success: function(data, status) {
                $('#current-announcement').html(data);
            }
        });
    }

    function getPage(page) {
        displayAnnouncement(page);
    }

    // For Search int the table
    $(document).ready(function() {

        load_data();

        function load_data(query) {
            $.ajax({
                url: "adminViews/includes/searchAnnouncement.php",
                method: "POST",
                data: {
                    query: query
                },
                success: function(data) {
                    $('#current-announcement').html(data);
                }
            });
        }
        $('#search-announcement').keyup(function() {
            var search = $(this).val();
            if (search != '') {
                load_data(search);
            } else {
                load_data();
            }
        });
    });
</script>