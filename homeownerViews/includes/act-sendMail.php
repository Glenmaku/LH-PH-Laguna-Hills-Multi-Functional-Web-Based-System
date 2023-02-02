<?php
require_once 'connection.php';

if(isset($_POST['MTitle']) && isset($_POST['MCompose'])) {
    $title = $_POST['MTitle'];
    $compose = $_POST['MCompose'];

    if (empty($title) || empty($compose)) {
        echo 'Error: All fields are required';
    } else {
        $query = "INSERT INTO message_tb (message_title, email_desc) VALUES ('$title', '$compose')";
        if (mysqli_query($con, $query)) {
            echo "Message sent successfully";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
    mysqli_close($con);
} else {
    echo "Error: All fields are required";
}
?>

