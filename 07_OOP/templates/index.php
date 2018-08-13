<?php
//есть переменная $_GET['do'] и имеет значение 'exit'
if (isset($_GET['do']) && $_GET['do'] == 'exit') {
//удаляет переменную из сессии
    unset($_SESSION['name']);
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="/guestBook.php">Гостевая книга</a><br>
<a href="/news.php">Новости</a><br>

<h3>Галерея</h3>
<form action="/uploadImg.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="newImg">
    <input type="submit" value=Загрузить>
</form>


<?php if (isset($_SESSION['name'])) {?>
    <p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>
    <a href="/index.php?do=exit" style="display:block;">Выйти </a>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>

<? foreach ($data['gallery'] as $image){ ?>
    <a href="/image.php?id=<?php echo $image->getImg();?>">
        <img src="/img/<? echo $image->getImg(); ?>" alt="" width="300px">
    </a>
<?}?>



</body>
</html>