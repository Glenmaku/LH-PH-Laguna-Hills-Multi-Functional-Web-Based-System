<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function


require_once 'PHPMailerAutoload.php';
require_once 'class.smtp.php';
require_once 'class.phpmailer.php';


// function dbConnection() {
//     $conn = mysqli_connect('localhost', 'root', '', 'lhph');

//     if (mysqli_errno($conn) > 0) {
//         die('hey! you just killed the connection to the database');
//     }
//     return $conn;
// }

function Ow_user($acquired_email, $gen_code ){


//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail = new PHPMailer;
    $mail->isSMTP();   //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth   = true;       //Enable SMTP authentication
    $mail->Username   = 'guyrx90@gmail.com';  //SMTP username
    $mail->Password   = 'vfom dpix bdew mieh';    //SMTP password
    $mail->SMTPSecure = 'tls';    //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587;     
    $mail->isHTML(true);
    //Recipients
    $mail->setFrom('emailAddress@gmail.com', 'OTP LHPH Emailer');

    $mail->addAddress($acquired_email,);     //Add a recipient
    // $mail->addAddress('ellen@example.com');  //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');  //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

    //Content   //Set email format to HTML
    $mail->Subject = "Password Reset Code";
    $mail->Body = "Your password reset code is $gen_code";
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'A one time password was sent to your email';
} catch (Exception $e) {
    echo "An error occured while generating the code. Mailer Error: {$mail->ErrorInfo}";
}
}