<?php
session_start();
include __DIR__ . '/upload.php';

$list = scandir(__DIR__ . '/images');
$list = array_diff($list, ['.','..']);


if (isset( $_GET['do'] )&& $_GET['do'] == 'exit' ) {
    unset($_SESSION['name']);
}

?>
<?php if (isset($_SESSION['name'])) {?>
    <p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>
    <a href="/index.php?do=exit" style="display:block;">Выйти </a>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>


<form action="/upload.php" method="post" enctype="multipart/form-data">
    <label for="img">
        <input type="file" name="newImg">
    </label>
    <input type="submit">
</form>


<? foreach ($list as $name){ ?>
    <a href="/image.php?id=<? echo $name; ?>">
        <img src="/images/<? echo $name; ?>" alt="" width="300px">
    </a>
<?}?>