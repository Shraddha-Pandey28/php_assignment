<?php 
session_start();

if(isset($_SESSION['email'])){
    echo ("hi!".$_SESSION['email']);
    echo ("<br>");
    echo('welcome to our community');

    if (isset($_POST["logout"])){
        session_unset();
        session_destroy();
        header("Location:index.php");
        exit();
    }
    echo '<form method="post">';
    echo '<button type="submit" name="logout">Logout</button>';
    echo '</form>';
}
else{
    echo "you're not logged in yet";
}


?>
