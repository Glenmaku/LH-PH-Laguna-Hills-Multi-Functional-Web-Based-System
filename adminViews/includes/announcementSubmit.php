<?php
// Check if the form was submitted
if (isset($_POST['announcementTitle'])) {
    // Get the form data
    $title = $_POST['announcementTitle'];
    $description = $_POST['announcementDescription'];
    // File handling
    $file = $_FILES['imgAnnouncement'];
    $fileName = $_FILES['imgAnnouncement']['name'];
    $fileTmpName = $_FILES['imgAnnouncement']['tmp_name'];
    $fileSize = $_FILES['imgAnnouncement']['size'];
    $fileError = $_FILES['imgAnnouncement']['error'];
    $fileType = $_FILES['imgAnnouncement']['type'];
    // Get the file extension
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // Allowed file types
    $allowed = array('jpg', 'jpeg', 'png');
    // Check if the file type is allowed
    if (in_array($fileActualExt, $allowed)) {
        // Check for any errors
        if ($fileError === 0) {
            // Check if the file size is within the limit
            if ($fileSize < 1000000) {
                // Give the file a unique name
                $fileNameNew = $fileName;
                // Set the file destination
                $fileDestination = "uploads/" . $fileNameNew;
                // Move the file to the destination
                move_uploaded_file($fileTmpName, $fileDestination);
                // Connect to the database
                include 'connection.php';
                // Insert the data into the database
                $query = "INSERT INTO announcement_tb (announcement_title, announcement_description, announcement_attachment) VALUES ('$title', '$description', '$fileNameNew')";
                mysqli_query($con, $query);

                mysqli_close($con);

                echo "success";
                exit;
            } else {
                echo "File size is too large";
                exit;
            }
        } else {
            echo "There was an error uploading your file";
            exit;
        }
    } else {
        echo "Invalid file type";
        exit;
    }
} else {
    echo "Form data not submitted";
    exit;
}
?>
