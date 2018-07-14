<?php
session_start();
include __DIR__ . '/../function.php';
include __DIR__ . '/../classes/Uploader.php';

$up = new Uploader('newImg');

$types = $_FILES['newImg']['type'];
$array = include __DIR__ . '/typeArr.php';

$userName = getCurrentUser();
$date = date('c');
$fileName = $_FILES['newImg']['name'];
$log = $userName . ' | ' . $date . ' | ' . $fileName . "\n";
$logPath = __DIR__ . '/log.txt';

if (isset($_FILES['newImg'])) {
    if (isset($userName) && $up->isUploaded() && $up->setAllowedTypes($array, $types)) {
        $up->upload();
        file_put_contents($logPath, $log, FILE_APPEND);
    }
    header('Location: /index.php');
}
