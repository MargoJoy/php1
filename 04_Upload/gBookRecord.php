<?php
include __DIR__ . '/funcGb.php';
$path = __DIR__ . '/text.txt';
$line = $_POST['text'];
//если установленна переменная отличная от нуля
if (isset($line)) {
//имеющийся массив
    $data = read();
//добавляет новый элемент
    $data[] = $line;
//обьеденяет весь массив в строку, разделяет переносом
    $newArr = implode("\n", $data);
//пишет строку в файл
    file_put_contents($path, $newArr);
//перенаправляет на страницу гостевой книги
    header('Location: /gBook.php');
}