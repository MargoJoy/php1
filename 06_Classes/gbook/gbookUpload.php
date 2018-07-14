<?php
include __DIR__ . '/../classes/GuestBook.php';

//новый объект с указанием на нужный файл с данными гостевой книги
$guestbook = new GuestBook(__DIR__ . '/text.txt');


$lines = $_POST['text'];

//если не пусто
if (isset($lines)){
//
    $guestbook->append($lines)->save();
    header('Location: /gbook/guestbook.php');
}