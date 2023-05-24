<?php
require('all_functions.php');
// require('./adminViews/phpmailer/functions.php');

$conn = dbConnection();

$message = $_POST['message'];

$fetch_users_sql = "SELECT * FROM owner_accounts";
$fetch_result = mysqli_query($conn, $fetch_users_sql);

while ($user = mysqli_fetch_assoc($fetch_result)) {
    sendEmail($user['owner_email'], $user['owner_username'], $message);
}