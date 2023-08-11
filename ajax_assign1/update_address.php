<?php
include 'database.php';
$countries=array("India","Canada");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

</head>
<body>
    <h1>UPDATE YOUR ADDRESS</h1>
    <form id="addressForm" name ="addressForm" method="post" action="update.php">
    <label for="country">Country:</label>
    <select id="country" name="country" onchange="states_under()"required>
        <option value="" selected>Select Country</option>
        <?php
        foreach($countries as $country){
            echo "<option value='$country'>$country</option>";
        }
        ?>
    </select>
   

    <label for="state">State:</label>
    <select id="state" name="state" onchange="cities_under()" required>
        <option value="" disabled selected>Select State</option>
    </select>

    <label for="city">City:</label>
    <select id="city" name="city" required>
        <option value="" disabled selected>Select City</option>
    </select>

    <label for="postalCode">Postal Code:</label>
    <input type="text" id="postalCode" name="postalCode" required>

    <button type="submit" name="submit">Submit</button>
</form>
<script>
    const state_city = {
        "India" : {
            "madhya_pradesh" : ["Bhopal", "Indore", "Jabalpur"],
            "Maharashtra":['Nagpur','Pune','Mumbai']
        },
        "Canada" : {
            "Alberta":['Calgary','Edmonton','Red Deer'],
        "British Columbia":['Victoria','Kelowna','Abbotsford'],
        "Manitoba":['Winnipeg','Brandon','Dauphin']
        }
    };

   //for state
    
   function states_under(){
    const selectedCountry =document.getElementById('country');
    const selectedState =document.getElementById('state');
    console.log('generate');
    console.log(selectedCountry);
    const valueOfCountry = selectedCountry.value;
    if(selectedCountry){
        state.disabled=false;
    }
    for(const state in state_city[valueOfCountry]){
        const option=document.createElement("option");
        option.value=state;
        option.textContent=state;
        selectedState.appendChild(option);
    }
   }

   function cities_under() {
        const selectedCountry= document.getElementById("country");
        const selectedState = document.getElementById("state");
        const selectedCity = document.getElementById("city");

        console.log("dskfaks");

        const valueOfCountry = selectedCountry.value;
        const valueOfState = selectedState.value;
        if(selectedState){
        city.disabled=false;
    }
    
        for(const city in state_city[valueOfCountry][valueOfState]){
            const option = document.createElement("option");
            console.log('helo');
            option.value =state_city[valueOfCountry][valueOfState][city];
            option.textContent = state_city[valueOfCountry][valueOfState][city];
            
            selectedCity.appendChild(option);
        }
    }
</script>
</body>
</html>