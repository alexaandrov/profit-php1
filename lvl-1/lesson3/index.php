<?php




// function isEven($x) {
//     if ($x % 2 == 0) {
//         return false;
//     } else {
//         return true;
//     }
// }

// var_dump(isEven(42));
// Модульные тесты
// echo assert(isEven(1) == false)."\n";
// echo assert(isEven(2) == true)."\n";



// $b = [
//     'feb'=>'February',
//     'may'=>'May',
//     'jun'=>'January',
// ];

// $str = "Hello, World";

// var_dump(explode(',', $str));


$x = $_POST['x'];
$y = $_POST['y'];

$res =  $x + $y;

?>

<!DOCTYPE html>
<html>
<head>
    <title>Массивы</title>
</head>
<body>
<form action="index.php" method="POST">
    <input type="text" name="x">
    +
    <input type="text" name="y">
    <input type="submit" value="=">
    <?= $res ?>
</form>
</body>
</html>