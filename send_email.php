<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'ralphfrncisco@gmail.com';
        $mail->Password   = 'kegwvhjmyzsfnnkh'; // Remove spaces
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Safer: use your Gmail as sender
        $mail->setFrom('ralphfrncisco@gmail.com', 'Portfolio Contact Form');
        $mail->addReplyTo($_POST['email_address'], $_POST['user_name']);
        $mail->addAddress('ralphfrncisco@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = 'New Message from Portfolio Contact Form';
        $mail->Body    = "
            <h3>Contact Form Message</h3>
            <strong>Name:</strong> {$_POST['user_name']}<br>
            <strong>Email:</strong> {$_POST['email_address']}<br>
            <strong>Phone:</strong> {$_POST['phone_number']}<br><br>
            <strong>Message:</strong><br>{$_POST['message']}
        ";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
