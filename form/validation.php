<?php
require('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST");
$FirstN = $_POST['first_name'];
$LastN =$_POST['last_name'];
$Email =$_POST['email id'];

$sql = "INSERT INTO user (first_name, last_name, email_id)
VALUES ('$FirstN', '$LastN', '$Email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>