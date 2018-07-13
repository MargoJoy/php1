<?php

$type = include __DIR__ . '/upType.php';

//если файл сушествует
if (isset($_FILES['newImg'])) {
//если в файле нет ошибок если последний последний элемент массива соответствует
    if ((0 == $_FILES['newImg']['error']) && in_array($_FILES['newImg']['type'], $type)) {
//имя полученное от пользователя
        $name = $_FILES['newImg']['name'];
//загрузка в указанную директорию с именем полученным от пользователя
        move_uploaded_file(
            $_FILES['newImg']['tmp_name'],
            __DIR__ . '/img/' . $name
        );
    }
//перенаправляет на страницу галереи
    header('Location: /gallery.php');
}
