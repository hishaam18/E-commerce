<?php

session_start();

// Include libraries
require __DIR__ . '/vendor/autoload.php';

// Create instance of MongoDB
$mongoClient = (new MongoDB\Client);

// Select database
$db = $mongoClient->Shop;

if (array_key_exists("loggedInUsername", $_SESSION)) {
    $username = $_SESSION['loggedInUsername'];

    // PHP for search criteria
    $findCriteria = [
        "Username" => $username
    ];

    // Find all customers that match this criteria
    $cursor = $db->Customer->find($findCriteria);

    // Output form
    foreach ($cursor as $customer) {
        include('Common.php');
        outputHeader("User Profile");
        echo '<!-- Header -->';
        echo '<header>';
        echo '<!-- Navigation Bar -->';
        echo '<div class="navigationBar">';
        outputNavigationBar();
        echo '</div>';
        echo '</header>';
        echo '<!-- User content -->';
        echo '<div class="userContent">';
        echo '<div class="avatar" align="center">';
        if ($customer['Gender'] == "Male") {
            echo '<img src="../Img/maleAvatar.png" width="350" height="350">';
        } elseif ($customer['Gender'] == "Female") {
            echo '<img src="../Img/femaleAvatar.png" width="350" height="350">';
        }
        echo '</div>';
        echo '<div class="userDetails">';
        echo '<h1 style="border-bottom: 6px solid #000 !important">User Details</h1>';
        echo '<form action="../PHP/UpdateCustomer.php" method="POST">';
        echo '<div>';
        echo '<label class="firstName">First Name: </label>';
        echo '<input type="text" id="profile_firstName" placeholder="First Name" name="profile_firstName" value="' . $customer['FirstName'] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label class="lastName">Last Name: </label>';
        echo '<input type="text" id="profile_lastName" placeholder="Last Name" name="profile_lastName" value="' . $customer['LastName'] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label class="userName">Username: </label>';
        echo '<input type="text" id="profile_username" placeholder="Username" name="profile_username" value="' . $customer['Username'] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label class="gender">Gender: </label>';
        echo '<select id="profile_gender" name="profile_gender" required>';
        if ($customer['Gender'] == "Male") {
            echo '<option value="Male" selected>Male</option>';
            echo '<option value="Female">Female</option>';
        } elseif ($customer['Gender'] == "Female") {
            echo '<option value="Male">Male</option>';
            echo '<option value="Female" selected>Female</option>';
        }
        echo '</select>';
        echo '</div>';
        echo '<div>';
        echo '<label class="dateOfBirth">Birth: </label>';
        echo '<input id="dateOfBirth" type="date" name="dateOfBirth" max="2017-11-30" value="' . $customer['Dob'] . '" required>';
        echo '</div>';
        echo '<h1 style="border-bottom: 6px solid #000 !important">Contact Info </h1>';
        echo '<div>';
        echo '<label class="emailAddress">Email Address: </label>';
        echo '<input type="email" id="profile_emailAddress" placeholder="E-mail Address" name="profile_emailAddress" value="' . $customer['Email'] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label class="profile_Address">Address: </label>';
        echo '<input type="text" id="profile_Address" placeholder="Address" name="profile_Address" value="' . $customer['Address'] . '" required>';
        echo '</div>';
        echo '<h1 style="border-bottom: 6px solid #000 !important">Security </h1>';
        echo '<div>';
        echo '<label class="newPassword">New Password: </label>';
        echo '<input type="password" id="profile_password" placeholder="New Password" name="profile_password" value="' . $customer['Password'] . '" required>';
        echo '</div>';
        echo '<div>';
        echo '<label class="confirmPassword">Confirm Password: </label>';
        echo '<input type="password" id="profile_confirmPassword" placeholder="Confirm Password" name="profile_confirmPassword" required>';
        echo '</div>';
        echo '<input type="hidden" name="id" value="' . $customer['_id'] . '" required>';
        echo '<button type="submit" class="saveButton">Save</button>';
        echo '<button type=button class="cancelButton" onclick="home()">Cancel</button>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '<script>';
        echo 'function home() {';
        echo 'location.replace("http://localhost/Website/PHP/Home.php")';
        echo '}';
        echo '</script>';
        outputFooter();
        outputFooterEnd();
    }
} else {
    header('Location: Login.php');
}
