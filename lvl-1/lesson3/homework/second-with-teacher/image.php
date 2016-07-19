<?php

$images = include __DIR__ . '/data.php';


function get_image($images) {
    if (!empty($_GET['id']) && $_GET['id'] < count($images) && $_GET['id'] > 0) {
        return $images[$_GET['id']];
    }

    if (!empty($_GET['name'])) {
        foreach ($images as $image) {
            if ($image == $_GET['name']) {
                return $image;
            }
        }
    } else {
        return $images[0];
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Фото по ID</title>
</head>
<style>
    h1 {
        text-align: center;
    }
    img {
        width: 350px;
        height: 350px;
        border-radius: 3px;
        margin: 10px 0;
    }
</style>
<body>

<?php if (isset($_GET['id'])): ?>
    <h2>Фото по ID</h2>
    <form method="GET">
        <p>ID</p>
        <input type="number" name="id" value="<?= $_GET['id'] ?>">
        <input type="submit" value="Отобразить">
    </form>
    <p class="image-name"><?= get_image($images) ?></p>
    <img src="<?= 'img/' . get_image($images); ?> " alt="image">
<?php endif ?>

<?php if (isset($_GET['name'])): ?>
    <h2>Фото по названию</h2>
    <form method="GET">
        <p>Введите название</p>
        <input type="text" name="name" value="<?= $_GET['name'] ?>">
        <input type="submit" value="Отобразить">
    </form>
    <img src="<?= 'img/' . get_image($images); ?> " alt="image">
<?php endif ?>

</body>
</html>