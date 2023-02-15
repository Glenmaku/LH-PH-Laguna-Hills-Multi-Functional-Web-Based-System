<?php
include 'connection.php';
require_once 'PHPMailerAutoload.php';
require_once 'class.smtp.php';
require_once 'class.phpmailer.php';

$lot_id = $_POST['Lot_ID'];

$query = "SELECT * FROM assigned_lot al
  JOIN association_dues ad ON al.lot_id = ad.Lot_ID
  JOIN owner_accounts oa ON al.owner_username = oa.owner_username
  WHERE al.lot_id = $lot_id";

$result = mysqli_query($con, $query);
$email = mysqli_fetch_assoc($result)['owner_email'];

while ($row = mysqli_fetch_assoc($result)) {
    $email = $row['owner_email'];
    $name = $row['owner_fname'] . ' ' . $row['owner_lname'];
    $balance = $row['Balance'];

    // send email to each owner
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'guyrx90@gmail.com'; //your gmail username
    $mail->Password = 'qhufcunapjtxzeop'; //your gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('yourgmail@gmail.com', 'Laguna Hills Homeowner Association');
    $mail->addAddress($email, $name);

    $mail->isHTML(true);

    $mail->Subject = 'Notice for Remaining Balance';
    $mail->Body = "Dear $name,<br><br>
    We hope this message finds you well. We are writing to remind you that there is currently a remaining balance on your account in the amount of $balance. As a valued customer, we kindly request that you settle this amount as soon as possible.<br><br>
    Please note that failure to pay this balance may result in additional fees or the suspension of your account until the balance is cleared. We want to avoid any inconvenience or interruption in our service, so please do not hesitate to contact us if you have any questions or concerns.<br><br>
    Thank you for your attention to this matter. We appreciate your business and look forward to continuing to serve you.<br><br>
    Sincerely,<br>
    Laguna Hills Homeowner Association";

    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'An error occurred while sending the email.';
    }
}
?>
