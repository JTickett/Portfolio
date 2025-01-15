<?php

function getPDO() {

    // Create a static variable to store the PDO object
    static $pdo = null;

    // If the PDO object is not already created, create it. Otherwise, return the existing object.
    if ($pdo === null) {

        // Try to get the database connection details from the .env file
        try {
            require_once realpath(__DIR__ . "/../vendor/autoload.php");
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->load();

            $dbHost = $_ENV['DB_HOST'];
            $dbPort = $_ENV['DB_PORT'];
            $dbName = $_ENV['DB_DATABASE'];
            $dbUser = $_ENV['DB_USERNAME'];
            $dbPass = $_ENV['DB_PASSWORD'];
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

        // Try to create a PDO connection
        try {
            // Add charset and port to DSN
            $dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=utf8mb4";
            
            // Create PDO connection with additional options
            $pdo = new PDO(
                $dsn,
                $dbUser,
                $dbPass,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
                ]
            );

        } catch(PDOException $e) {
            // Handle connection errors
            die("Connection failed: " . $e->getMessage());
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }

    }

    // Return the PDO object
    return $pdo;
}

// This is only called once the form has been both validated and sanitised.
function insertContactSubmission(ContactFormData $formData) {
    try {
        $pdo = getPDO();
        $query = "INSERT INTO contact (firstName, lastName, email, phone, subject, message) VALUES (:firstName, :lastName, :email, :phone, :subject, :message)";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(':firstName', $formData->firstName);
        $stmt->bindValue(':lastName', $formData->lastName);
        $stmt->bindValue(':email', $formData->email);
        $stmt->bindValue(':phone', $formData->phone);
        $stmt->bindValue(':subject', $formData->subject);
        $stmt->bindValue(':message', $formData->message);
        $success = $stmt->execute();
        
        if ($success) {
            return ['success' => true, 'message' => 'Your message has been sent!'];
        } else {
            return ['success' => false, 'message' => 'Failed to insert contact submission.'];
        }
    } catch (PDOException $e) {
        error_log('PDO Error in insertContactSubmission: ' . $e->getMessage() . 
                  ' [Error Code: ' . $e->getCode() . ']');
        return [
            'success' => false, 
            'message' => 'Database error occurred.', 
            'debug' => $e->getMessage()  // Only in development environment
        ];
    } catch (Exception $e) {
        error_log('General Error: ' . $e->getMessage());
        return ['success' => false, 'message' => 'An error occurred.'];
    }
}

?>