<?php
// include "connection.php";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Validate the input fields
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (empty($name) || empty($email)) {
        echo "Name and Email fields are required.";
        // Redirect back to the index.php after 3 seconds
        header("refresh:3;url=index.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        // Redirect back to the index.php after 3 seconds
        header("refresh:3;url=index.php");
        exit();
    }

    // Set cookies for username and show a message
    setcookie("username", $name, time() + (2 * 60)); // Expiry after 2 minutes (2 * 60 seconds)

    echo "Hello, $name! You have successfully subscribed to our newsletter.";
    echo "You'll receive our newsletter on $email shortly.";

    // Redirect the user to the login page after 3 seconds
    header("refresh:120;url=login.php");
    exit();
}
?>
