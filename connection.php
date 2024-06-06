
<?php
// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "church_database";

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



