<?php
// File: db.php
$host = "localhost";       // Usually "localhost" (don’t change unless your host says otherwise)
$user = "root"; // Check PHPMyAdmin → "User accounts" tab
$pass = ""; // The password you set for PHPMyAdmin
$db   = "strum";    // The name you gave your database in PHPMyAdmin

// Connect to the database
$conn = mysqli_connect($host, $user, $pass, $db);

// Check if connection failed
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>