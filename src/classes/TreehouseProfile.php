<?php

/**
 * This Class is used to manage profile data fetching from Treehouse
 *
 * @author   James Tickett
 */

class TreehouseProfile
{



    function loadProfile() {}

    function fetchAndSaveJsonData()
    {

        // Try to get the database connection details from the .env file
        try {
            require_once realpath(__DIR__ . "/../vendor/autoload.php");
            $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
            $dotenv->load();
            $treehouse_username = $_ENV['TREEHOUSE_USERNAME'];
            $url = "https://teamtreehouse.com/profiles/" . $treehouse_username . "json";
        } catch (Exception $e) {
            echo 'Message: ' . $e->getMessage();
        }

        // Initialize a cURL session
        $curl = curl_init();

        // Set the website URL
        curl_setopt($curl, CURLOPT_URL, $url);

        // Return the response as a string
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Follow redirects
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

        // Ignore SSL verification
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        // Execute the cURL session
        $jsonContent = curl_exec($curl);

        // Check for errors
        if ($jsonContent === false) {
            // Handle the error
            $error = curl_error($curl);
            echo "cURL error: " . $error;
            exit;
        }

        // Close cURL session
        curl_close($curl);

        // Decode the JSON content
        $data = json_decode($jsonContent, true);

        // Check if JSON decoding was successful
        if (json_last_error() !== JSON_ERROR_NONE) {
            echo "JSON error: " . json_last_error_msg();
            exit;
        }

        // Print the formatted JSON data
        echo "<pre>";
        print_r($data);
        echo "</pre>";

        // Specify the file path where the JSON data will be saved
        $file_path = 'response.json';

        // Save the JSON data to the specified file
        if (file_put_contents($file_path, json_encode($data, JSON_PRETTY_PRINT)) === false) {
            echo "Error saving JSON data to file.";
            exit;
        }

        echo "JSON data successfully saved to " . $file_path;
    }
}
