<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $apiKey = 'f2dc96a5874460b528288d4f8500e1c3';
    $username = $_GET['username'] ?? '';
    $ip = $_SERVER['REMOTE_ADDR'];
    
    $weatherData = fetchWeatherData($apiKey, $ip);
    $temperature = ($weatherData['main']['temp'])-273.15;
    

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
      <meta charset='UTF-8'>
      <getBackgroundClass name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='style.css'>
      <title>Weather Report</title>
    </head>
    <body>
      <div class='container'>
        <h1>Weather Report</h1>
        <p>Welcome, $username!</p>
        <p>Temperature: $temperature °C</p>
      </div>
    </body>
    </html>";
}

function fetchWeatherData($apiKey, $ip) {
    $url = "https://api.openweathermap.org/data/2.5/weather?lat=23.2599&lon=77.4126&appid=$apiKey";
    $response = file_get_contents($url);
    return json_decode($response, true);
}

?>
