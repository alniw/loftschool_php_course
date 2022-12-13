<?php

require '../src/functions.php';

echo task1(['a', 'b', 'c']);
echo '<br>';
echo task1(['a', 'b', 'c'], false);
echo '<br>';

echo task2('+', 1, 2, 3);
echo task2('/', 1, 2, 0);
echo task2('*', 1, '234asd', 0);

task3(4, 6);
task3(11, '1a2');

task4();
task5();
task6();
