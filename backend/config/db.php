<?php
$host = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";       // Default password is empty
$database = "gym_management";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
