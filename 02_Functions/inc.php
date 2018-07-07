<?php
include __DIR__ . '/functions.php';
?>

<h3>Пункт 3.  Изучение Include в виде функции </h3>

<p><?php var_dump($inc); ?></p>
<p><?php var_dump($includeNull);?></p>
<p><?php echo $inc; ?></p>
<p>
    Оператор include, если его использовать как функцию возвращает int 1 если файл существует,
    и boolean false если файл не найден, если в подключаемом файле использовать конструкцию return то вернет
    значение полученное от return (string 'hello world' (length=11)).
</p>
