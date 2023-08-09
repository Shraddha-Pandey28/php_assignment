<?php
session_start();
require 'connection.php';
$as = intval($_SESSION["id"]);
$query = "SELECT * FROM profile WHERE id = $as";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    $interest = $data["interest"];
    $education = $data['education'];
    $profession = $data['profession'];
    $hobbies = $data['hobbies'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

<form class="form-inline" action="aboutus.php" method="post">
    <div class="form-group">
        <label class="sr-only" for="interest">Topic of Interest:</label>
        <input type="text" class="form-control" name="interest" value="<?php echo $interest; ?>">
    </div>
    <div class="form-group">
        <label class="sr-only" for="education">Education:</label>
        <input type="text" class="form-control" name="education" value="<?php echo $education; ?>">
    </div>
    <div class="form-group">
        <label class="sr-only" for="profession">Profession:</label>
        <input type="text" class="form-control" name="profession" value="<?php echo $profession; ?>">
    </div>
    <div class="form-group">
        <label class="sr-only" for="hobbies">Hobbies:</label>
        <input type="text" class="form-control" name="hobbies" value="<?php echo $hobbies; ?>">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html>