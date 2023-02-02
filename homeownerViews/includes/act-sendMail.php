<?php
require_once 'connection.php';

if(isset($_POST['MTitle']) && isset($_POST['MCompose'])&& isset($_POST['Musername'])) {
    $message_name = $_POST['Mname'];
    $message_username = $_POST['Musername'];
    $title = $_POST['MTitle'];
    $compose = $_POST['MCompose'];

    if (empty($title) || empty($compose)) {
        echo 'Error: All fields are required';
    } else {
        $query = "INSERT INTO message_tb (Homeowner_Username,Homeowner_Full_Name, message_title, email_desc) VALUES (' $message_username','$message_name','$title', '$compose')";
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

