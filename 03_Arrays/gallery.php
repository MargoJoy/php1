<?php
include __DIR__ . '/imgArray.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Массивы. Циклы. Взаимодействие с пользователем.</title>

</head>
<body>
<div class="gal">
    <h3>Галерея</h3>
<!--перебор массива по ключу-->
    <?php foreach ($image as $kay => $img) { ?>
<!--в идентификатор ссылки передается ключ от имени каждой картинуи в массиве-->
        <a href="image.php?id=<?php echo $kay; ?>">
<!--выводится все что есть в массиве в путь до изображения, по очереди, если по такому пути есть изображение,
с таким именем, оно будет выведено-->
            <img src="img/<?php echo $img; ?>" alt="">
        </a>
    <?php } ?>
</div>
</body>
</html>
