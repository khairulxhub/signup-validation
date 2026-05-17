<?php

// Associative array with country and capital
$countryCapital = array(
    "Bangladesh" => "Dhaka",

    "Nepal" => "Kathmandu",
    "Sri Lanka" => "Colombo",
     "Indoneshia" => "Jakarta",
    "Pakistan" => "Islamabad"
);

// Sort array by country name (key)
ksort($countryCapital);

// Print the sorted array
echo "Country and Capital List:<br><br>";

foreach ($countryCapital as $country => $capital) {
    echo "Country: " . $country . " => Capital: " . $capital . "<br>";
}
