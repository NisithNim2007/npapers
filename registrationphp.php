<?php
// Simulated user data (replace with database)
$valid_users = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newUsername = $_POST['newUsername'];
    $newPassword = $_POST['newPassword'];

    // Check if the username is available
    if (!isset($valid_users[$newUsername])) {
        // Store the new user (in a real scenario, this should be done in a database)
        $valid_users[$newUsername] = $newPassword;
        echo 'Registration successful. <a href="index.html">Login here</a>';
    } else {
        echo 'Username already exists. Choose a different username.';
    }
}
?>
