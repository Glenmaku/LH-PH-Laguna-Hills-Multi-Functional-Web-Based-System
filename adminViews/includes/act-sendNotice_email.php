<?php
include 'connection.php';
require("../phpmailer/act-sendNotice.php");

$username = $_POST['username'];

$query = "SELECT oa.owner_email, oa.owner_fname, oa.owner_lname, ad.Balance FROM assigned_lot al
  JOIN association_dues ad ON al.lot_id = ad.Lot_ID
  JOIN owner_accounts oa ON al.owner_username = oa.owner_username
  WHERE al.owner_username = $username";

$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $email = $row['owner_email'];
    $name = $row['owner_fname'] . ' ' . $row['owner_lname'];
    $balance = $row['Balance'];

    // send email to each owner
    
    $subject = 'Notice for Remaining Balance';
    $message = "Dear $name,<br><br>
    We hope this message finds you well. We are writing to remind you that there is currently a remaining balance on your account in the amount of $balance. As a valued customer, we kindly request that you settle this amount as soon as possible.<br><br>
    Please note that failure to pay this balance may result in additional fees or the suspension of your account until the balance is cleared. We want to avoid any inconvenience or interruption in our service, so please do not hesitate to contact us if you have any questions or concerns.<br><br>
    Thank you for your attention to this matter. We appreciate your business and look forward to continuing to serve you.<br><br>
    Sincerely,<br>
    Laguna Hills Homeowner Association";

}
sendEmail($email, $subject, $message );
?>