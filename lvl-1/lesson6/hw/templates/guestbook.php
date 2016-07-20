<html>
<head>
    <title>GuestBook</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    article {
        border: 1px #3ED248 dotted;
        border-radius: 3px;
        margin: 15px;
        padding: 10px;
    }
    article:hover {
        border: 1px solid #008419;
        cursor: pointer;
    }
    input {
        padding: 0.5em;
    }
    input[type="submit"] {
        background-color: #656765;
        color: white;
        padding: 0.5em 20px;
    }
    input[type="submit"]:hover {
        background-color: #A2A2A2;
        cursor: pointer;
    }
</style>
<body>
<h1>Guest Book</h1>
<form action="index.php" method="GET">
    <input type="text" name="note" value="<?php if (!empty($_GET['note'])) echo $_GET['note'] ?>">
    <input type="submit" value="Отправить">
</form>
<p>Записи в гостевой книге:</p>
<?php
$value->upload();
?>
<?php foreach ($value->getData() as $file_string): ?>
    <article><?= $file_string ?></article>
<?php endforeach ?>
</body>
</html>