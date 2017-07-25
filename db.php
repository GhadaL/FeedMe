<?php
$servername = "35.160.127.179";
$username = "alphabet";
$password = "Kudo5000";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>