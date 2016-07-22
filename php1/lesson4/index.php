<html>
<head>
    <title>Массивы</title>
</head>
<body>
<?php
// Первый способ открытия файлов
// $res = fopen(__DIR__ . '/db.txt', 'r');

// do {
//     echo fgets($res) . "<br/>";
// } while (!feof($res));

// fclose($res);

// $res = file_get_contents(__DIR__ . '/db.txt');
// var_dump($res);

// $res = file(__DIR__ . '/db.txt');
// $res[] = "\nСтрока номер 8";
// var_dump($res);

// $res = implode("\n", $res);

// var_dump($res);

// file_put_contents(__DIR__ . '/db.txt', $res);


// Include не так прост, каккажется
$res = pathinfo(__DIR__);
var_dump($res);



?>
</body>
</html>