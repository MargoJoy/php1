<?php
session_start();
include __DIR__ . '/upload.php';

$list = scandir(__DIR__ . '/img');
$list = array_diff($list, ['.','..']);

?>
<p>Имя пользователя: <?php echo $_SESSION['name']; ?> </p>

<?php if (isset($_SESSION['name'])) {?>
    <form action="/upload.php" method="post" enctype="multipart/form-data" >
        <label for="img">Загрузить файл<br>
            <input type="file" name="newImg">
        </label>
        <label for="">
            <input type="submit" value=Загрузить>
        </label>
    </form>
<?php } else {?>
    <a href="/login.php" style="display:block;">Войти</a>
<?php } ?>


<? foreach ($list as $name){ ?>
    <a href="/image.php?id=<? echo $name; ?>">
        <img src="/img/<? echo $name; ?>" alt="" width="300px">
    </a>
<?}?>

