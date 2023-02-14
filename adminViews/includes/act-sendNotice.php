<?php
include "connection.php";

require_once 'PHPMailerAutoload.php';
require_once 'class.smtp.php';
require_once 'class.phpmailer.php';

$query ="SELECT *
FROM assigned_lot
JOIN owner_accounts ON assigned_lot.owner_username = owner_accounts.owner_username
JOIN association_dues ON assigned_lot.lot_id = association_dues.Lot_ID";

$result = mysqli_query($con, $query);
$email = mysqli_fetch_assoc($result)['owner_email'];

while ($row = mysqli_fetch_assoc($result)) {
    $email = $row['owner_email'];
    $name = $row['owner_fname'] . ' ' . $row['owner_lname'];
    $balance = $row['Balance'];
// set the email subject and message
$subject = 'Notice for Remaining Balance';
$message = "Dear $name,<br><br>
We hope this message finds you well. We are writing to remind you that there is currently a remaining balance on your account in the amount of $balance. As a valued customer, we kindly request that you settle this amount as soon as possible.<br><br>
Please note that failure to pay this balance may result in additional fees or the suspension of your account until the balance is cleared. We want to avoid any inconvenience or interruption in our service, so please do not hesitate to contact us if you have any questions or concerns.<br><br>
Thank you for your attention to this matter. We appreciate your business and look forward to continuing to serve you.<br><br>
Sincerely,<br>
Laguna Hills Homeowner Association";

if (mail($email, $subject, $message)) {
    echo 'Email sent successfully!';
} else {
    echo 'An error occurred while sending the email.';
}
}
?>