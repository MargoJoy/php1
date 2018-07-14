<?php
session_start();

//есть переменная $_GET['do'] и имеет значение 'exit'
if (isset($_GET['do']) && $_GET['do'] == 'exit') {
//удаляет переменную из сессии
    unset($_SESSION['name']);
}

//сканирует всю папку, помещает содердимое в массив
$list = scandir(__DIR__ . '/gallery/img');
//удаление из массива лишних элементов
$list = array_diff($list, ['.', '..']);
?>

<a href="/gbook/guestbook.php">Гостевая книга</a>

<?php if (isset($_SESSION['name'])) {?>
    <p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>
    <a href="/index.php?do=exit" style="display:block;">Выйти </a>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>


    <h3>Галерея</h3>
<form action="/gallery/upload.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="newImg">
    <input type="submit" value=Загрузить>
</form>

<? foreach ($list as $name){ ?>
    <a href="/gallery/image.php?id=<? echo $name; ?>">
        <img src="/gallery/img/<? echo $name; ?>" alt="" width="300px">
    </a>
<?}?>



