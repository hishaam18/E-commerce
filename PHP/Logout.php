<?php

// Start session
session_start();

// Remove session variables
session_unset();

// Destroy session
session_destroy();

echo "Logged Out!";
