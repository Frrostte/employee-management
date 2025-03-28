<?php
// Database connection settings
$servername = "sql309.infinityfree.com";  // Your MySQL server address (found in the control panel)
$username = "if0_38106019";              // Your database username
$password = "YFjko4tfXo";          // Your database password
$dbname = "maindb";            // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>