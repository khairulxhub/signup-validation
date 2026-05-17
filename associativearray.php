<?php
$country = array(
    "Pakistan" => "Islamabad",
    "USA" => "Washington DC",
    "UK" => "London",
    "France" => "Paris",
    "Bangladesh" => "Dhaka"
);
echo "<pre>";
print_r($country);
echo "</pre>";

ksort($country);

foreach ($country as $key => $value) {
    if (isset($_GET['country']) && $_GET['country'] == $key) {
        echo "<h2 style='color:green;'>The capital of " . $key . " is " . $value . "</h2>";
    } else {
        echo "The capital of " . $key . " is " . $value . "<br>";
    }
}