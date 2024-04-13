<?php

echo "test";
    $url = 'http://127.0.0.1:5001/test';
    $response = file_get_contents($url);

    // Check if the request was successful
    if ($response === FALSE) {
        // Handle error
        echo "Error occurred while fetching data from Flask endpoint";
    } else {
        // Display the response from the Flask endpoint
        echo "Response from Flask endpoint: " . $response;
    }




?>