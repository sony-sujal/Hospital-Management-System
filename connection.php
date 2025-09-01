<?php
// Database configuration for InfinityFree hosting

$host = "sql105.infinityfree.com";    // Replace with your InfinityFree MySQL Host
$user = "if0_39833008";       // Your InfinityFree MySQL username
$password = "Sujal8055"; // Your InfinityFree MySQL password
$dbname = "if0_39833008_edoc";   // Your InfinityFree MySQL database name

// Create database connection
$database = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$database) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
