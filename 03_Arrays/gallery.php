<?php
$image = include __DIR__ . '/imgArray.php';
?>

<h3>Галерея</h3>
<!--перебор массива по ключу, сам массив и переменная $image в файле imgArray.php-->
    <?php foreach ($image as $kay => $img) { ?>
<!--в идентификатор ссылки передается ключ от имени каждой картинуи в массиве-->
        <a href="/image.php?id=<?php echo $kay; ?>">
<!--выводится все что есть в массиве в путь до изображения, по очереди, если по такому пути есть изображение,
с таким именем, оно будет выведено-->
            <img width="600px" src="/img/<?php echo $img; ?>" alt="">
        </a>
    <?php } ?>
