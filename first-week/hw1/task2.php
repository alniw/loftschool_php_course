<?php
/**
 * Задание #2

Дана задача:

На школьной выставке 80 рисунков. 23 из них выполнены фломастерами, 40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?
Описать и вывести условия, решение этой задачи на PHP. Все предоставленные числа из пункта 1 должны быть указаны в константах.
 */

const TOTAL_PICTURES = 80;
const FELT_PEN_PICTURES = 23;
const PENCIL_PICTURES = 40;

$dyePictures = TOTAL_PICTURES - FELT_PEN_PICTURES - PENCIL_PICTURES;
echo $dyePictures;
