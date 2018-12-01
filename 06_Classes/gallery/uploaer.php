<?php
session_start();
include __DIR__ . '/../functions.php';
include __DIR__ . '/../classes/Uploader.php';

$uploader = new Uploader('newImg');

$type = $_FILES['newImg']['type'];
$array = include __DIR__ . '/typeArr.php';

$userName = getCurrentUser();
$date = date('c');
$fileName = $_FILES['newImg']['name'];
$log = $userName . ' | ' . $date . ' | ' . $fileName . "\n";
$logPath = __DIR__ . '/log.txt';

if (isset($userName) && $uploader->isSetAllowedTypes($array, $type)) {
    $uploader->upload();
    file_put_contents($logPath, $log, FILE_APPEND);
};

header('Location: /index.php');
