<!DOCTYPE html>
<html>
<head>
    <title>ООП</title>
</head>
<body>
<?php

class Table
{
     public function __construct($color, ...$args)
     {
        // отобразить массив с аргументами
        var_dump($args);
     }
}

$table1 = new Table('red', 1);
$table1 = new Table('red', 12, 85);


?>
</body>
</html>