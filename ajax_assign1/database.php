<?php
$servername = "localhost";
$username = "root"; 
$password = "Admin@1234";
$database = "ajax_assignment";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>