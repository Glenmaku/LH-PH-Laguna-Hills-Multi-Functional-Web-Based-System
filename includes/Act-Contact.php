<?php
require_once('connection.php');
$Fullname   = $_POST['Fullname'];
$Email      = $_POST['Email'];
$Number     = $_POST['Number'];
$Subject    = $_POST['Subject'];
$Messages   = $_POST['Messages'];

// Use backticks for table and column names
$contact_sql = "INSERT INTO `contact_us` (`Full_Name`,`Email_Address`, `Cellphone_Number`, `Subject`, `Message`) values('$Fullname','$Email','$Number','$Subject','$Messages')";

$contact_result = mysqli_query($con,$contact_sql);

// Check if query was successful
if (!$contact_result) {
    echo "Error: " . $contact_sql . "<br>" . mysqli_error($con);
}
?>