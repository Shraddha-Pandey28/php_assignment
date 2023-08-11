<?php
include 'database.php';

session_start();
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$postalCode=$_POST['postalCode'];
$id=intval($_SESSION['user_id']);

$sql = "UPDATE users_address SET country='$country', state='$state', city='$city',postalCode='$postalCode' WHERE id=$id";

$update=mysqli_query($conn,$sql);
echo "address updated";
?>