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
$FirstName = filter_input(INPUT_POST, 'profile_firstName', FILTER_SANITIZE_STRING);
$LastName = filter_input(INPUT_POST, 'profile_lastName', FILTER_SANITIZE_STRING);
$Username = filter_input(INPUT_POST, 'profile_username', FILTER_SANITIZE_STRING);
$Gender = filter_input(INPUT_POST, 'profile_gender', FILTER_SANITIZE_STRING);
$Dob = filter_input(INPUT_POST, 'dateOfBirth', FILTER_SANITIZE_STRING);
$Email = filter_input(INPUT_POST, 'profile_emailAddress', FILTER_SANITIZE_STRING);
$Address = filter_input(INPUT_POST, 'profile_Address', FILTER_SANITIZE_STRING);
$Password = filter_input(INPUT_POST, 'profile_password', FILTER_SANITIZE_STRING);
$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);

// Update id of document
$updateCriteria = [
    "_id" => $id
];

// Data to replace
$customerData = [
    "FirstName" => $FirstName,
    "LastName" => $LastName,
    "Username" => $Username,
    "Gender" => $Gender,
    "Dob" => $Dob,
    "Email" => $Email,
    "Address" => $Address,
    "Password" => $Password
];

// Replace customer data for this ID
$updateData = $collection->replaceOne($updateCriteria, $customerData);

if ($updateData->getModifiedCount() == 1) {
    $message = "Details Updated!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('http://localhost/Website/PHP/User.php');
    </script>";
} else {
    $message = "Error When Updating Details! Please try again.";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('http://localhost/Website/PHP/User.php');
    </script>";
}
