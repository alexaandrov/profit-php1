<?php

$file = __DIR__ . '/notes.txt';
$file_array = file($file);

if (!empty($_GET['note'])) {
    $file_array[] = strip_tags(htmlspecialchars($_GET['note']));
    $result = implode("\n", $file_array);
    file_put_contents($file, $result);
}

?>

<html>
<head>
    <title>Гостевая книга</title>
</head>
<body>
<?php foreach ($file_array as $file_string): ?>
    <div><p><?= $file_string ?></p></div>
<?php endforeach ?>
<form action="index.php" method="GET" enctype="multipart/form-data">
    <input type="text" name="note">
    <input type="submit" value="Отправить">
</form>
</body>
</html>