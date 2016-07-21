<!DOCTYPE html>
<html>
<head>
    <title>News</title>
</head>

<style>
    body {
        max-width: 980px;
        margin: 0 auto;
        padding: 0;
        outline: none;
        /*background-image: url("dist/img/background.jpg");*/
        background-position: bottom;
        font-family: Calibri;
    }

    a {
        outline: none;
        color: black;
        text-decoration: none;
    }

    header {
        margin: 0;
        padding: 0;
        background-color: #F8F8F8;
        box-shadow: 0px 2px 4px #545454;
    }

    header ul {
        margin: 0;
        padding: 0;
        display: table-row;
    }

    header ul li {
        list-style-type: none;
        display: inline-block;
        padding: 15px 0px;
        margin: 0;
    }
    header ul li a {
        padding: 15px 20px;
        margin: 0;
    }
    header ul li a:hover {
        background-color: #D7D7D7;
    }
    h1 {
        text-align: center;
    }
    article {
        border: 1px #3ED248 dotted;
        border-radius: 3px;
        margin: 15px 0;
        padding: 10px;
    }
    article:hover {
        border: 1px solid #008419;
        /*cursor: pointer;*/
    }
    input {
        padding: 0.5em;
    }
    input[type="submit"] {
        background-color: #4b4f67;
        color: white;
        padding: 0.5em 20px;
        border: none;
        border-radius: 3px;
    }
    input[type="submit"]:hover {
        background-color: #A2A2A2;
        cursor: pointer;
    }
</style>
<body>

<header>
    <ul>
        <li><a href="site.php">Home</a></li>
        <li><a href="news.php">News</a></li>
        <li><a href="guestbook.php">Guestbook</a></li>
        <li><a href="uploader.php">Uploader</a></li>
    </ul>
</header>

<h1>News</h1>
<form method="GET">
    <input type="text" name="note">
    <input type="submit" value="Отправить">
</form>

<p>Новости:</p>
<?php
$news->upload();
?>
<?php foreach ($news->getData() as $id => $note): ?>
    <a href="<?= 'article.php?id=' . $id ?>"><article><?= $note ?></article></a>
<?php endforeach ?>

</body>
</html>