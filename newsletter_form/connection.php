<?php
$servername = "localhost";
$username = "root";
$password = "Admin@1234";
$dbname = "newsletter_form";

// Create connection
$conn = new mysqli($email, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>