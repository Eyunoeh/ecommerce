<?php


// Sample data
$data = array(
    'name' => 'John Doe',
    'age' => 30,
    'email' => 'john@example.com'
);

// Encode the data as JSON
$json_response = json_encode($data);

// Set headers to indicate JSON content
header('Content-Type: application/json');

// Output the JSON response
echo $json_response;

