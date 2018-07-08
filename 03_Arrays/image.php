<?php
$image = include __DIR__ . '/imgArray.php';

//в переиенную полученное методом get значение
$photo = $_GET['id'];
?>
    <a href="/gallery.php">&#8617;</a>
<!--вывод отдельного элемента массива, в качестве ключа, полученное get-ом значение-->
    <img width="600px" src="/img/<?php echo $image[$photo]; ?>" alt="">
