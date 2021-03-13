<?php
// Start session management
session_start();

// Include libraries
require __DIR__ . '/vendor/autoload.php';

// Get name and address strings - need to filter input to reduce chances of SQL injection etc.
$username = filter_input(INPUT_POST, 'login_username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'login_password', FILTER_SANITIZE_STRING);

// Connect to MongoDB and select database
$mongoClient = (new MongoDB\Client);
$db = $mongoClient->Shop;
$collection = $db->Customer;

// Create a PHP array with our search criteria
$findCriteria = [
    "Username" => $username
];
// Find all of the customers that match this criteria
$cursor = $collection->find($findCriteria);

//Check that there is exactly one customer
if ($collection->count($findCriteria) == 0) {
    echo 'Invalid Username!';
    $message = "Invalid Username!";
    echo "<script type='text/javascript'>
    alert('$message');
    window.location.replace('http://localhost/Website/PHP/Login.php');
    </script>";
    return;
} else if ($collection->count($findCriteria) > 1) {
    echo 'Database error: Multiple customers have same username!';
    return;
}

//Get customer
foreach ($cursor as $doc) {
    $customer = $doc;

    // Check password
    if ($doc['Password'] != $password) {
        echo 'Incorrect Password!';
        $message = "Invalid Password!";
        echo "<script type='text/javascript'>
        alert('$message');
        window.location.replace('http://localhost/Website/PHP/Login.php');
        </script>";
        return;
    }
}

// Start session for user
$_SESSION['loggedInUsername'] = $username;

// Inform web page that login is successful
echo 'ok';
$message = "Login Successful";
echo "<script type='text/javascript'>
        alert('$message');
        window.location.replace('http://localhost/Website/PHP/Home.php');
        </script>";
