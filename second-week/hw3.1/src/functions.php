<?php

/**
 * Задание #3.1
 * Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
 * id - уникальный идентификатор, равен номеру эл-та в массиве
 * name - случайное имя из 5-ти возможных (сами придумайте каких)
 * age - случайное число от 18 до 45
 * Преобразуйте массив в json и сохраните в файл users.json
 * Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
 * Посчитайте количество пользователей с каждым именем в массиве
 * Посчитайте средний возраст пользователей
 */
function task1()
{
    $usersBefore = buildUsersArray();
    echo 'Вывод пользователей после конвертации в формат json: ';
    echo '<br>';
    convertArrayToJson($usersBefore);
    $usersAfter = convertJsonToArray('users.json');
    echo '<br>';
    echo 'Вывод пользователей после обратной конвертации в массив: ';
    echo '<br>';
    print_r($usersAfter);
    echo '<br>';
    echo 'Вывод количества пользователей с каждым из имён: ';
    echo '<br>';
    print_r(getUniqueNamesCount($usersAfter));
    echo '<br>';
    echo 'Средний возраст пользователей = ' . getAgeAverage($usersAfter);
}

function buildUsersArray(): array
{
    $arr = [];
    for ($i = 1; $i <= 50; $i++) {
        $arr[] = ['id' => $i, 'name' => getRandomName(), 'age' => getRandomAge()];
    }

    return $arr;
}

function getRandomName(): string
{
    $names = ['Александр', 'Анастасия', 'Антон', 'Евгений', 'Ирина'];
    $i = array_rand($names);

    return $names[$i];
}

function getRandomAge(): string
{
    return mt_rand(18, 45);
}

function convertArrayToJson($arr)
{
    $json = json_encode($arr, JSON_UNESCAPED_UNICODE);
    echo $json;
    file_put_contents('users.json', $json);
}

function convertJsonToArray($jsonFile)
{
    $json = file_get_contents($jsonFile);

    return json_decode($json, true);
}

function getUniqueNamesCount($arr): array
{
    return array_count_values(array_column($arr, 'name'));
}

function getAgeAverage($arr): int
{
    $ageArr = array_column($arr, 'age');
    $average = array_sum($ageArr) / count($ageArr);

    return round($average);
}
