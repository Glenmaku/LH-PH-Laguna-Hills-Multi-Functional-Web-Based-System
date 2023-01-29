<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

// require_once '../send_email/PHPMailerAutoload.php';
// require_once '../send_email/class.smtp.php';
// require_once '../send_email/class.phpmailer.php';

// require_once '../sendmail_database/PHPMailerAutoload.php';
// require_once '../sendmail_database/class.smtp.php';
// require_once '../sendmail_database/class.phpmailer.php';

require_once 'PHPMailerAutoload.php';
require_once 'class.phpmailer.php';
require_once 'class.smtp.php';

function dbConnection() {
    $conn = mysqli_connect('localhost', 'root', '', 'lhph');

    if (mysqli_errno($conn) > 0) {
        die('hey! you just killed the connection to the database');
    }
    return $conn;
}

function sendEmail($recipient_email, $recipient_fullname, $message){


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail = new PHPMailer;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'guyrx90@gmail.com';                     //SMTP username
    $mail->Password   = 'qhufcunapjtxzeop';                     //SMTP password
    $mail->SMTPSecure = 'tls';                                   //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;                                    
    $mail->isHTML(true);
    //Recipients
    $mail->setFrom('emailAddress@gmail.com', 'LHPH Emailer');

    $mail->addAddress($recipient_email, $recipient_fullname);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content                                 //Set email format to HTML
    $mail->Subject = 'Notification from Laguna Hills Philippines';
    $mail->Body = $message;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}