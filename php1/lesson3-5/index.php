<?php
$start_time= microtime (true);

$city_arr = ['Москва', 'Челябинск',
             'Пятигорск', 'Урюпинск',
             'Тула', 'Псков',
             'Краснодар', 'Севастополь',
             'Сочи', 'Крым', 'Ростов-на-Дону',
             'Архангельск', 'Зеленоград',
             'Санкт-Петербург', 'Дыня', 'Дача',
             'Алча', 'Тачка', 'Мышь'];

function get_city($city, $city_arr)
{
    if (!empty($city)) {
        $city_last_letter = mb_strtolower(mb_substr($city, -1, 1));
        foreach ($city_arr as $city_from_arr) {
            $city_first_letter = mb_strtolower(mb_substr($city_from_arr, 0, 1));
            if ($city_last_letter == $city_first_letter && $city != $city_from_arr) {
                return $city_from_arr;
            }
        }
    }
}

assert(get_city('Краснодар', $city_arr) == 'Ростов-на-Дону');

$end_time = microtime(true);

echo round(($end_time - $start_time), 5)." сек";
?>

<html>
<head>
    <title>Игра в города</title>
</head>
<body>
<h1>Игра в города</h1>
<form action="index.php" method="GET">
    <p>Введите город</p>
    <input type="text" name="city" value="<?php if(!empty($_GET['city'])) { echo $_GET['city']; } ?>">
    <input type="submit">
    <?php if (!empty($_GET['city'])): ?>
        <p><?= get_city($_GET['city'], $city_arr) ?></p>
    <?php endif ?>
</form>
</body>
</html>