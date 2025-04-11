<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // default password for XAMPP is blank
$db   = 'rural_edu';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>