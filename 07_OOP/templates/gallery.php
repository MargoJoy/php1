<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Галлерея</title>
</head>
<body>

<?php if (isset($_SESSION['name'])) {?>
    <p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>
    <a href="/index.php?do=exit" style="display:block;">Выйти </a>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>

<h3>Галлерея</h3>
<a href="/guestBook.php">Гостевая книга</a>
<a href="/news.php">Новости</a>

<?php
foreach ($data['gallery'] as $image) { ?>
    <a href="/image.php?id=<?php echo $image->getFile(); ?>">
        <img src="/images/<?php echo $image->getFile(); ?>" alt="" width="300px">
    </a>
<?php } ?>

<form action="/uploadImg.php" method="post" enctype="multipart/form-data">
    <label for="">
        <input type="file" name="newImg">
    </label>
    <input type="submit">
</form>


</body>
</html>
