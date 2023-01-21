<?php
   include 'connection.php';
    // Retrieve update_announce_id from the AJAX post request
    $update_announce_id = $_POST["update_announce_id"];

    // Retrieve current data from the database based on update_announce_id
    $sql = "SELECT * FROM announcements WHERE id = '$update_announce_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $announce = $result->fetch_assoc();
        echo json_encode($announce);
    } else {
        echo "No data found";
    }

    // Update data in the database
    if (isset($_POST["updateAnnouncementTitle"])) {
        $updateAnnouncementTitle = $_POST["updateAnnouncementTitle"];
        $UpdateImgAnnouncement = $_POST["UpdateImgAnnouncement"];
        $updateAnnouncementDescription = $_POST["updateAnnouncementDescription"];
        $update_announce_id = $_POST["update_announce_id"];

        $sql = "UPDATE announcement_no SET announcement_title='$updateAnnouncementTitle', announcement_attachment='$UpdateImgAnnouncement', announcement_description='$updateAnnouncementDescription' WHERE id='$update_announce_id'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $con->error;
        }
    }

    $con->close();
?>
