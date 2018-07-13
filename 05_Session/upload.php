<?php
session_start();
include __DIR__ . '/functions.php';
$type = include __DIR__ . '/upType.php';

//пользователь
$userName = getCurrentUser();
//дата
$date = date('c');
//файл
$fileName = $_FILES['newImg']['name'];
//имя, дата и файл для записи в лог
$log = $userName . ' | ' . $date . ' | ' . $fileName . "\n";
//путь к логу
$logPath = __DIR__ . '/log.txt';

if (isset($_FILES['newImg'])) {
//проверка на наличие файла и существование пользователя
    if ((0 == $_FILES['newImg']['error']) && in_array($_FILES['newImg']['type'], $type) && (isset($userName))) {
        $name = $_FILES['newImg']['name'];

           move_uploaded_file(
                $_FILES['newImg']['tmp_name'],
                __DIR__ . '/img/' . $name
            );
//запись в лог при загрузке файла
            file_put_contents($logPath, $log, FILE_APPEND);

    }
    header('Location: /index.php');
}
