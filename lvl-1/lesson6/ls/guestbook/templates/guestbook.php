<!DOCTYPE html>
<html>
<head>
    <title>Гостевая книга</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    article {
        margin: 15px;
        padding: 10px;
        border: 1px #888888 dotted;
        border-radius: 3px;
    }
</style>
<body>
<h1>Гостевая книга</h1>
<hr>

<?php foreach ($data as $line): ?>
    <article><?= $line->getMessage(); ?></article>
<?php endforeach ?>

</body>
</html>