
<?php
include 'connection.php';

$title = $_POST['announcementTitle'];
$description = $_POST['announcementDescription'];

//image uploading
if ($_FILES['imgAnnouncement']['name']) {

    move_uploaded_file($_FILES['imgAnnouncement']['tmp_name'], "announcementUploads/" . $_FILES['imgAnnouncement']['name']);

    $img = "image/" . $_FILES['imgAnnouncement']['name'];
}

$sql = "INSERT INTO `announcement_tb`(`announcement_title`, `announcement_description`, `announcement_attachment`) VALUES ('$title', '$description','$img')";

mysqli_query($con, $sql);
?>
