<?php
/**
 * Задание #5

Создайте массив $bmw с ячейками:
model
speed
doors
year
Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”.
Создайте массивы $toyota' и '$opel аналогичные массиву $bmw (заполните данными).
Объедините три массива в один многомерный массив.
Выведите значения всех трех массивов в виде:
CAR name
name ­ model ­speed ­ doors ­ year
Например:

CAR bmw
X5 ­120 ­ 5 ­ 2015
 */

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
    echo "CAR " . $key . "<br>";
    echo implode(" ", $value) . "<br><br>";
}
