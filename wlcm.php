<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html");
    exit();
}

// Display welcome message
echo "Welcome, " . $_SESSION['username'] . "!";
?>
