
<?php
include 'connection.php';

$title = $_POST['announcementTitle'];
$description = $_POST['announcementDescription'];

$path = 'adminViews/includes/uploadedFiles/'; 
$location = $path . $_FILES['imgAnnouncement']['name'];
//image uploading
if ($_FILES['imgAnnouncement']['name']) {

    move_uploaded_file($_FILES['imgAnnouncement']['tmp_name'], $location); 

    $img = "upload/" .$_FILES['imgAnnouncement']['name'];
}

$sql = "INSERT INTO `announcement_tb`(`announcement_title`, `announcement_description`, `announcement_attachment`) VALUES ('$title', '$description','$img')";

mysqli_query($con, $sql);
?>
