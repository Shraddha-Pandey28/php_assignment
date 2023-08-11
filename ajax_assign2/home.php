<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Weather App</title>
</head>
<body>
  <div class="container">
    <h1>Weather App</h1>
    <form action="weather.php" method="GET">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username">
      <button type="submit">Get Weather</button>
    </form>
  </div>
</body>
</html>
