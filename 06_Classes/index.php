<?php
session_start();

if (isset($_GET['do']) && $_GET['do'] == 'exit') {
    unset($_SESSION['name']);
}

$images = scandir(__DIR__ . '/gallery/img');
$images = array_diff($images, ['.', '..']);

?>
<?php if (isset($_SESSION['name'])) {?>
    <p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>
    <a href="/index.php?do=exit" style="display:block;">Выйти </a>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>

<a href="/gbook/guestbook.php">Гостевая книга</a>

<form action="/gallery/uploaer.php" method="post" enctype="multipart/form-data">
    <label for="">
        <input type="file" name="newImg">
    </label>
    <input type="submit">
</form>

<? foreach ($images as $image){ ?>
    <a href="/gallery/image.php?id=<? echo $image; ?>">
        <img src="/gallery/img/<? echo $image; ?>" alt="" width="300px">
    </a>
<?}?>

