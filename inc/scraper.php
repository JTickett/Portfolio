<?php

// https://www.zenrows.com/blog/web-scraping-php#project-setup

// -- These are the tags I need to filter out:
// <div class = "topic-stat">
// <div class="total-points">

// Include the Simple HTML DOM parser library
include_once("simplehtmldom/simple_html_dom.php");

// Specify the target website's URL
$url = "https://teamtreehouse.com/profiles/jamestickett2";

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
$htmlContent = curl_exec($curl);

// Check for errors
if ($htmlContent === false) {

    // Handle the error
    $error = curl_error($curl);
    echo "cURL error: " . $error;
    exit;
}

// Close cURL session
curl_close($curl);

// Create a new Simple HTML DOM instance and parse the HTML
$html = str_get_html($htmlContent);

// Find the Total Score
$totalScore = $html->find("div .total-points h1", 0);

// Print the Total Score
echo "Total Score: $totalScore->plaintext \n\n";

// Loop through the topics, printing the names with scores...
foreach($html->find('div .topic-stat') as $topic) {
	$topicName = "";
    $topicScore = "Score: ";
    $topicName .= $topic->find('p', 0)->plaintext . "\n";
    $topicScore .= $topic->find('h3', 0)->plaintext . "\n";
	echo "$topicName $topicScore \n";
}



// Clean up resources
$html->clear();
unset($html);

?>
