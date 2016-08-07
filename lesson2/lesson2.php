<?php

function getGender($firstname) {
    $firstname = mb_strtolower($firstname);

    $female = ['а', 'я', 'ь'];

    foreach($female as $value) {
        if (mb_substr($firstname, -1, 1) == $value) {
            return 'Женский';
        }
    }
    return 'Мужской';
}

assert(getGender("ЛЮБОВЬ") == 'Женский');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Определение пола по имени</title>
</head>
<body>
<form action="include.php" method="POST">
    <input type="text" name="firstname" placeholder="Введите ваше имя">
    <input type="submit" value="Определить пол">
</form>

<?php
if (!empty($_POST['firstname'])) {
    $firstname = $_POST['firstname'];
    $gender = getGender($firstname); ?>
    <p>Ваше имя: </p>
    <?= $firstname; ?>
<?php }

if (!empty($gender)) { ?>
    <p>Ваш пол: </p>
    <?= $gender; ?>
<?php  } ?>

</body>
</html>