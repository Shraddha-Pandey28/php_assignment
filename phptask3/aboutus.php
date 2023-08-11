<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
session_start();
require 'connection.php';
$percent = 0;

function notempty($obj, $percent){
    if (!empty($obj)){
        $percent += 25;
    }
    return $percent;
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $interest = $_POST["interest"];
    $education = $_POST['education'];
    $profession = $_POST['profession'];
    $hobbies = $_POST['hobbies'];
    $as = $_SESSION["id"];
    $select_query = "SELECT * FROM profile WHERE id = '$as'";
    $result = mysqli_query($conn, $select_query);
    
    if (mysqli_num_rows($result) > 0) {
        $update_query = "UPDATE profile SET interest='$interest', education='$education', profession='$profession', hobbies='$hobbies' WHERE id='$as'";
        mysqli_query($conn, $update_query);
    } else {
        $insert_query = "INSERT INTO profile (id, interest, education, profession, hobbies) VALUES ('$as', '$interest', '$education', '$profession', '$hobbies')";
        mysqli_query($conn, $insert_query);
    }
    
    $percent = notempty($interest, $percent);
    $percent = notempty($education, $percent);
    $percent = notempty($profession, $percent);
    $percent = notempty($hobbies, $percent);

    echo "<h1>about us</h1><br>";
    echo "interest: " . $interest . "<br>";
    echo "education: " . $education . "<br>";
    echo "profession: " . $profession . "<br>";
    echo "hobbies: " . $hobbies . "<br>";
    echo "<br>";

    echo $percent."% completed.";
    echo "<br>";
    echo "<br>";
}
?>

<a href="index.php">logout</a>
</body>
</html>
