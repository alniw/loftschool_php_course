<?php

$bmw = [
    "model" => "X5",
    "speed" => 120,
    "doors" => 5,
    "year" => "2015",
];
$toyota = [
    "model" => "RAV4",
    "speed" => 100,
    "doors" => 5,
    "year" => "2018",
];
$opel = [
    "model" => "ASTRA",
    "speed" => 110,
    "doors" => 4,
    "year" => "2012",
];
$cars = ["bmw" => $bmw, "toyota" => $toyota, "opel" => $opel];

foreach ($cars as $key => $value) {
    echo "CAR " . $key . "\n";
    echo implode(" ", $value) . "\n";
}
