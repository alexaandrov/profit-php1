<html>
<head>
    <title>GuestBook</title>
</head>
<style>
    body {
        max-width: 980px;
        margin: 0 auto;
        padding: 0;
        outline: none;
        /*background-image: url("../dist/img/background.jpg");*/
        background-position: bottom;
        font-family: "Segoe UI";
    }
    @media(max-width: 960px) {
        body {
            margin: 0 10px;
        }
    }
    h1 {
        font-family: "Segoe UI Light";
        color: #7d7d7d;
    }
    h2  {
        font-family: "Segoe UI Light";
        font-size: 1em;
        margin-top: 5px;
        margin-bottom: 20px;
    }
    a {
        outline: none;
        color: black;
        text-decoration: none;
    }

    header {
        /*width: 100px;*/
        margin: 0;
        margin-top: 10px;
        /*position: fixed;*/
        padding: 0;
        background-color: #F8F8F8;
        box-shadow: 0px 2px 4px #545454;
    }

    header ul {
        margin: 0;
        padding: 0;
        /*display: table-row;*/
    }

    header ul li {
        list-style-type: none;
        display: inline-block;
        padding: 15px 0px;
        margin: 0;
    }
    header ul li:hover {
        padding: 15px 0px 11px;
        border-bottom: 4px solid green;
    }
    header ul li:active {
        background-color: #CAC9C9;
        border-bottom: 4px solid green;
    }
    header ul li a {
        padding: 15px 20px;
        margin: 0;
    }
    header ul li a:hover {
        /*background-color: #D7D7D7;*/
        border-bottom: 1px solid green;
    }
    h1 {
        text-align: center;
    }
    article {
        background-color: #F8F8F8;
        box-shadow: 0px 0px 2px #545454;
        /*border: 1px #3ED248 dotted;*/
        /*border-radius: 3px;*/
        margin-bottom: 5px;
        padding: 10px;
        border: 1px solid white;
    }
    article:hover {
        /*border-right: 2px solid #26F143;*/
        box-shadow: 0px 0px 8px #545454;

        /*border: 1px solid #008419;*/
        /*box-shadow: 0px 1px 8px #545454;*/
        /*cursor: pointer;*/
    }
    article p {
        font-size: 0.9em;
    }
    input {
        padding: 0.5em;
    }
    input[type="text"] {
        border: none;
        box-shadow: 0px 1px 2px #545454;
        margin: 0;
        padding: 0.7em;
    }
    input[type="submit"] {
        box-shadow: 0px 1px 2px #F8F8F8;

        background-color: ;
        color: white;
        padding: 0.7em 20px;
        border: none;
        /*border-radius: 3px;*/
    }
    input[type="submit"]:hover {
        background-color: #A2A2A2;
        cursor: pointer;
    }
    form {
        /*margin: 10px;*/
        float: right;
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

<div class="wrapper">
    <h1>Guest Book</h1>
    <form method="GET">
        <input type="text" name="note">
        <input type="submit" value="Отправить">
    </form>
    <p>Записи в гостевой книге:</p>
    <?php
    $guestbook->upload();
    ?>
    <?php foreach ($guestbook->getData() as $id => $note): ?>
        <?php if (!empty($note)) : ?>
            <a href="<?= 'book.php?id=' . $id ?>">
                <article>
                    <h2>Запись номер: <?= $id ?></h2>
                    <p><?= $note ?></p>
                </article>
            </a>
        <?php endif ?>
    <?php endforeach ?>
</div>

</body>
</html>