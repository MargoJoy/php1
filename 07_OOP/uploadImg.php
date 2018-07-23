<?php
session_start();
include __DIR__ . '/function.php';
include __DIR__ . '/classes/Uploader.php';

//создание обьекта класса
$up = new Uploader('newImg');

//полученный тип файла
$types = $_FILES['newImg']['type'];
//массив с допустимыми типами
$array = include __DIR__ . '/data/typeArr.php';

//информация для записи в лог
$userName = getCurrentUser();
$date = date('c');
$fileName = $_FILES['newImg']['name'];
$log = $userName . ' | ' . $date . ' | ' . $fileName . "\n";
$logPath = __DIR__ . '/data/log.txt';

//проверка, если не пуст еще одна проверка и перенаправление на главную
if (isset($_FILES['newImg'])) {
//проверка имени пользователя, был ли загружен файл, тип файла
    if (isset($userName) && $up->isUploaded() && $up->setAllowedTypes($array, $types)) {
//если все верно то переносит файл в постоянное место и пишет информацию о загрузке
        $up->upload();
        file_put_contents($logPath, $log, FILE_APPEND);
    }
    header('Location: /index.php');
}