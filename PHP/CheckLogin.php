<?php

// Start session
session_start();

if (array_key_exists("loggedInUsername", $_SESSION)) {
    echo "Already Logged In!";
} else {
    echo 'Not Logged In!';
}
