<?php
//если файл сушествует
if (isset($_FILES['newImg'])) {
//если в файле нет ошибок
    if (0 == $_FILES['newImg']['error']) {
//имя полученное от пользователя
        $name = basename($_FILES['newImg']['name']);
//массив из имени разделенный точкой
        $get_name = explode('.', $name);
//последний элемент массива имени к верхнему регистру
        $val = mb_strtoupper(end($get_name));
//если последний последний элемент массива соответствует
        if ($val == ('JPG' || 'JPEG' || 'PNG' )) {
//загрузка в указанную директорию с именем полученным от пользователя
            move_uploaded_file(
                $_FILES['newImg']['tmp_name'],
                __DIR__ . '/img/' . $name
            );
        }
    }
//перенаправляет на страницу галереи
    header('Location: /gallery.php');
}
