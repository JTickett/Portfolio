<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


function sendEmail($firstName, $lastName, $email, $phone, $subject, $message) {

    $success = false;

    // Try and get the Email settings from the .env file
    try {
        require_once realpath(__DIR__ . "/../vendor/autoload.php");
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
        $dotenv->load();

        $smtpHost = $_ENV['SMTP_HOST'];
        $smtpPort = $_ENV['SMTP_PORT'];
        $smtpUsername = $_ENV['SMTP_USERNAME'];
        $smtpPassword = $_ENV['SMTP_PASSWORD'];

        $fromEmail = $_ENV['EMAIL_FROM'];
        $toEmail = $_ENV['EMAIL_TO'];
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }

    try {

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Set the SMTP settings
        $mail->isSMTP();
        $mail->Host = $smtpHost;
        $mail->SMTPAuth = true;
        $mail->Username = $smtpUsername;
        $mail->Password = $smtpPassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = $smtpPort;
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }

    try {
        // Set the email details
        $mail->setFrom($fromEmail, 'Portfolio Contact Form Submission');
        $mail->addAddress($toEmail);
        $mail->Subject = $subject;

        // Compile the message to be sent.
        $wholeMessage = "Name: " . $firstName . " " . $lastName . "\n" .
                       "Email: " . $email . "\n" .
                       "Phone: " . $phone . "\n" .
                       "Message: " . $message;

        // Add the message to the email body
        $mail->Body = $wholeMessage;

        if (!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            $success = false;
        } else {
            echo 'Message has been sent';
            $success = true;
        }
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }

    return $success;
}

?>