<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Include PHPMailer autoload.php file
require 'vendor/autoload.php';

// Create a new PHPMailer instance
$mail = new PHPMailer();

// SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com.';
$mail->SMTPAuth = true;
$mail->Username = 'nhlapob78@gmail.com';
$mail->Password = 'lhql lsby sper cqnj';
$mail->SMTPSecure = 'tls'; // Use TLS
$mail->Port = 587; // TLS port (usually 587)

// Email content
$mail->setFrom('nhlapob78@gmail.com', 'Banele');
$mail->addAddress('nhlapob78@gmail.com', 'Ndivhuwo');
$mail->Subject = 'Subject of your email';
$mail->isHTML(true);
$mail->Body = '<html>Your HTML email content here</html>';

if ($mail->send()) {
    echo 'Email sent successfully!';
} else {
    echo 'Email sending failed. Error: ' . $mail->ErrorInfo;
}
?>
