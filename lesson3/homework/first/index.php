<?php

require __DIR__ . '/calculate.php';

if (isset($_POST['x'])) {
    $x = (int)$_POST['x'];
} else {
    $x = null;
}

if (isset($_POST['y'])) {
    $y = (int)$_POST['y'];
} else {
    $y = null;
}

$allow_options = ['+', '-', '*', '/'];

if (isset($_POST['option']) && in_array($_POST['option'], $allow_options)) {
    $post_option = $_POST['option'];
} else {
    $post_option = null;
    echo "Good job maaan!";
}

$result = calculate($x, $y, $post_option);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Массивы</title>
</head>
<body>
<form method="POST">
    <input type="text" name="x" value="<?= $x ?>">
    <select name="option">
    <?php foreach ($allow_options as $allow_option) { ?>
        <option value="<?= $allow_option ?>" <?php if ($allow_option == $post_option) { ?> selected <?php } ?>><?= $allow_option ?></option>
    <?php } ?>
    </select>
    <input type="text" name="y" value="<?= $y ?>">
    <input type="submit" value="=">
    <?php if(isset($result)) { echo $result; } ?>
</form>
</body>
</html>