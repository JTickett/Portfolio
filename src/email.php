<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Define log directory relative to project root
$logPath = dirname(__DIR__) . '/logs/mail.log';
ini_set('error_log', $logPath);

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
        error_log('Email Error in sendEmail: ' . $e->getMessage() . 
                  ' [Error Code: ' . $e->getCode() . ']');
    }

    try {

        // Create a new PHPMailer instance
        $mail = new PHPMailer(true);

        // Enable debug output
        $mail->SMTPDebug = 2;  // Add this line for detailed debug output

        // Capture debug output
        $mail->Debugoutput = function($str, $level) {
            error_log("PHPMailer Debug [$level]: $str");
        };

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
        error_log('Email Error in sendEmail: ' . $e->getMessage() . 
                  ' [Error Code: ' . $e->getCode() . ']');
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
            error_log('Email Error in sendEmail - ErrorInfo: ' . $mail->ErrorInfo . 
                     ' - Last SMTP Error: ' . $mail->getSMTPInstance()->getError()[1]);
        } else {
            echo 'Message has been sent';
            $success = true;
            error_log('Email Success in sendEmail: ' . $mail->ErrorInfo . ']');
        }
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
        error_log('Email Error in sendEmail: ' . $e->getMessage() . 
                  ' [Error Code: ' . $e->getCode() . ']');
    }

    return $success;
}

?>