<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Places</title>
</head>

<body>

    <h2>Wat is de hoofdstad?</h2>
    <?php

    // Pre given associative array from exercise 12

$places = [
    "Japan" => "Tokyo",
    "Mexico" => "Mexico City",
    "USA" => "New York City",
    "India" => "Mumbai",
    "Korea" => "Seoul",
    "China" => "Shanghai",
    "Nigeria" => "Lagos",
    "Argentina" => "Buenos Aires",
    "Egypt" => "Cairo",
    "UK" => "London"];

    // Make the code get Shangai as the result

    // echo "De hoofdstad van China is ". $places['China'];

    foreach($places as $place => $place_city) {
        echo "De hoofdstad van " . $place . " is " . $place_city;
        echo "<br>";
      }
?>
</body>

</html>