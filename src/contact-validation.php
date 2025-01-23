<?php

/**
 * This file is used to validate the contact form submission.
 * It is called by the contact-us.php file, and returns a JSON response.
 * Typically it isn't viewed directly, but is called by the contact-us.php file.
 *
 * @author   James Tickett
 */


require_once 'database.php';
require_once 'classes/Contact.php';

// Debug
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Define log directory relative to project root
$logPath = dirname(__DIR__) . '/logs/php-error.log';
ini_set('error_log', $logPath);

header('Content-Type: application/json');
ob_start();

// Default response
$result = ["success" => false, "message" => ""];

// If this is a POST request, process the form data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $formData = new Contact();

    // Just capture the data from the POST request
    $formData->firstname = $_POST['firstname'];
    $formData->lastname = $_POST['lastname'];
    $formData->email = $_POST['email'];
    $formData->phone = $_POST['phone'];
    $formData->subject = $_POST['subject'];
    $formData->message = $_POST['message'];

    $formData->sanitiseFields();
    

    // Validate the data.
    // (JS should do this, but we can't be dependant on it since it's client side)
    // TODO: The validation functions should be in the Form class
    $formData->validateFields();

    if (count($formData->responseStatuses) > 0) {
        $result["success"] = false;
        $result["message"] = $formData->responseStatuses;
    } else {
        // If the data is valid, insert it into the database
        $result = insertContactSubmission($formData);
    }

    // var_dump($result); die();

    $output = ob_get_clean(); 
    echo json_encode($result);
    exit;
}

// Otherwise output these bits of information
echo "Error reporting level: " . error_reporting() . "\n";
echo "Display errors: " . ini_get('display_errors') . "\n";
echo "Error log: " . ini_get('error_log') . "\n";

?>