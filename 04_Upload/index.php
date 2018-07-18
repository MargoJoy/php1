<?php
include __DIR__ . '/upload.php';
//выводит файл из папки
$list = scandir(__DIR__ . '/img');
$list = array_diff($list, ['.','..']);
?>

    <a href="/gBook.php">Гостевая книга</a>

<form action="/upload.php" method="post" enctype="multipart/form-data" >
    <label for="img">Загрузить файл<br>
    <input type="file" name="newImg">
    </label>
    <label for="">
        <input type="submit" value=Загрузить>
    </label>
</form>

<? foreach ($list as $name){ ?>
    <a href="/image.php?id=<? echo $name; ?>">
        <img src="/img/<? echo $name; ?>" alt="" width="300px">
    </a>
<?}?>