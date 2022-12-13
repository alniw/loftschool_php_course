<?php

require '../src/RateInterface.php';
require '../src/GPSTrait.php';
require '../src/SecondDriverTrait.php';
require '../src/OptionsTrait.php';
require '../src/AbstractRate.php';
require '../src/BaseRate.php';
require '../src/HourRate.php';
require '../src/StudentAbstractRate.php';

echo 'Кейс 1. Тариф базовый (5 км, 1 час)
- добавить услугу GPS <br>';
$baseRate = new BaseRate(5, 60);
$totalPrice = $baseRate->getBasePrice() + $baseRate->getGpsOptionPrice($baseRate, 15);
echo "Стоимость поедки = $totalPrice <br>";

echo 'Кейс 2. К условиям предыдущего кейса добавлена опция дополнительного водителя<br>';
$baseRate = new BaseRate(5, 60);
$totalPrice = $baseRate->getBasePrice() + $baseRate->getGpsOptionPrice($baseRate, 15) + $baseRate->getSecondDriverOptionPrice();
echo "Стоимость поедки = $totalPrice <br>";

echo 'Кейс 3. Тариф почасовой без опций. Поездка длилась 61 минуту <br>';
$hourRate = new HourRate(5, 61);
$totalPrice = $hourRate->getBasePrice();
echo "Стоимость поедки = $totalPrice <br>";

echo 'Кейс 4. Тариф студенческий без опций (5 км, 1 час)<br>';
$hourRate = new StudentAbstractRate(5, 60);
$totalPrice = $hourRate->getBasePrice();
echo "Стоимость поедки = $totalPrice <br>";
