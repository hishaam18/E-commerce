<?php
// Include libraries
require __DIR__ . '/vendor/autoload.php';

// Create instance of MongoDB
$mongoClient = (new MongoDB\Client);

// Select database
$db = $mongoClient->Shop;

// Select Collection
$collection = $db->Customer;

// Extract data sent to server
$FirstName = filter_input(INPUT_POST, 'register_firstName', FILTER_SANITIZE_STRING);
$LastName = filter_input(INPUT_POST, 'register_lastName', FILTER_SANITIZE_STRING);
$Username = filter_input(INPUT_POST, 'register_username', FILTER_SANITIZE_STRING);
$Gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
$Dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
$Address = filter_input(INPUT_POST, 'register_address', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'register_email_address', FILTER_SANITIZE_STRING);
$Password = filter_input(INPUT_POST, 'register_password', FILTER_SANITIZE_STRING);

// Convert to PHP array
$dataArray = [
    "FirstName" => $FirstName,
    "LastName" => $LastName,
    "Username" => $Username,
    "Gender" => $Gender,
    "Dob" => $Dob,
    "Address" => $Address,
    "Email" => $Email,
    "Password" => $Password
];

$insertResult = $collection->insertOne($dataArray);

// Echo result back to user
if ($insertResult->getInsertedCount() == 1) {
    $message = "Registration Successful!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('http://localhost/Website/PHP/Login.php');
    </script>";
} else {
    $message = "Error! Please try again.";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('http://localhost/Website/PHP/Register.php');
    </script>";
}
