<?php
<<<<<<< HEAD
$conn = mysqli_connect('35.160.127.179','alphabet','Kudo5000','alphabet');
=======
$servername = "35.160.127.179";
$username = "alphabet";
$password = "Kudo5000";
$db = "alphabet";
>>>>>>> 2b9d0cadbb3038f3f4b5bc49c2e25f006a6ef3d4

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>