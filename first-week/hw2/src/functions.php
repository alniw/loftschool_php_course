<?php

/**
 * Задание #1
 * Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
 * Если в функцию передан второй параметр true, то возвращать (через return) результат в виде одной объединенной строки.
 */
function task1(array $arr, bool $return = true)
{
    $result = '';
    foreach ($arr as $value) {
        $result .= "<p>" . $value . "</p>";
    }

    if ($return) {
        return $result;
    }
    echo $result;
}

/**
 * Задание #2
 * Функция должна принимать переменное число аргументов.
 * Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие, которое необходимо выполнить со всеми передаваемыми аргументами.
 * Остальные аргументы это целые и/или вещественные числа.
 * Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
 * Результат: 1 + 2 + 3 + 5.2 = 11.2
 */
function task2(string $operation, ...$args)
{
    foreach ($args as $n => $arg) {
        if (!is_int($arg) && !is_float($arg)) {
            trigger_error('argument #' . $n . ' is not integer or float');

            return 'ERROR';
        }
    }
    switch ($operation) {
        case '+':
            return array_sum($args);
        case '-':
            return array_shift($args) - array_sum($args);
        case '/':
            $result = array_shift($args);
            foreach ($args as $n => $arg) {
                if ($arg == 0) {
                    trigger_error('division by zero on argument #' . ($n + 1));

                    return 'ERROR: division by zero';
                }
                $result /= $arg;
            }

            return $result;
        case '*':
            $result = 1;
            foreach ($args as $arg) {
                $result *= $arg;
            }

            return $result;
        default:
            return 'ERROR: unknown operation';
    }
}

/**
 * Функция должна принимать два параметра – целые числа.
 * Если в функцию передали 2 целых числа, то функция должна отобразить
 * таблицу умножения размером со значения параметров, переданных в функцию.
 * (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8).
 * Таблица должна быть выполнена с использованием тега <table>
 * В остальных случаях выдавать корректную ошибку.
 *
 * @param int $cols
 * @param int $rows
 */
function task3(int $cols, int $rows)
{
    if ($cols < 0 || $rows < 0) {
        trigger_error('Arguments must be positive');
    }
    echo "<table>";
    for ($r = 1; $r <= $rows; $r++) {
        echo '<tr>';

        for ($c = 1; $c <= $cols; $c++) {
            $result = $c * $r;
            echo '<td>' . $result . '</td>';
        }
        echo '</tr>';
    }

    echo "</table>";
}

function custom_file_get_contents(string $filename)
{
    $fp = fopen($filename, 'r');
    if (!$fp) {
        return false;
    }

    $str = '';
    while (!feof($fp)) {
        $str .= fgets($fp, 1024);
    }

    echo $str;
}
