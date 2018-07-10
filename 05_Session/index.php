<?php
session_start();
include __DIR__ . '/upload.php';

$list = scandir(__DIR__ . '/img');
$list = array_diff($list, ['.','..']);


//$_GET['do'] и имеет значение exit то
if (isset( $_GET['do'] )&& $_GET['do'] == 'exit' ) {
//удаляяем переменную из сессии
    unset($_SESSION['name']);
}
?>

<form action="/upload.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="newImg">
    <input type="submit" value=Загрузить>
</form>

<?php if (isset($_SESSION['name'])) {?>
    <p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>
    <a href="/index.php?do=exit" style="display:block;">Выйти </a>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>

<? foreach ($list as $name){ ?>
    <a href="/image.php?id=<? echo $name; ?>">
        <img src="/img/<? echo $name; ?>" alt="" width="300px">
    </a>
<?}?>