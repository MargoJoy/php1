<?php
session_start();
include __DIR__ . '/functions.php';

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
    if (0 == $_FILES['newImg']['error']) {
        $name = basename($_FILES['newImg']['name']);
        $get_name = explode('.', $name);
        $val = mb_strtoupper(end($get_name));
        if ($val == ('JPG' || 'JPEG' || 'PNG' )) {
           move_uploaded_file(
                $_FILES['newImg']['tmp_name'],
                __DIR__ . '/img/' . $name
            );
//запись в лог при загрузке файла
            file_put_contents($logPath, $log, FILE_APPEND);
        }
    }
    header('Location: /index.php');
}
