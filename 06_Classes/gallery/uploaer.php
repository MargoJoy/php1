<?php
session_start();
include __DIR__ . '/../functions.php';
include __DIR__ . '/../classes/Uploader.php';

$uploader = new Uploader('newImg');

$type = $_FILES['newImg']['type'];
$array = include __DIR__ . '/typeArr.php';

$userName = getCurrentUser();
//var_dump($userName);

$date = date('c');
//var_dump($date);

$fileName = $_FILES['newImg']['name'];
//var_dump($fileName);

$log = $userName . ' | ' . $date . ' | ' . $fileName . "\n";
//var_dump($log);

$logPath = __DIR__ . '/log.txt';
//var_dump($logPath);

//var_dump(isset($userName));

if (isset($userName) && $uploader->isSetAllowedTypes($array, $type)) {
    $uploader->upload();
    file_put_contents($logPath, $log, FILE_APPEND);
};

header('Location: /index.php');

////var_dump($_FILES['newImg']);
//
//var_dump($uploader->isUploaded());
//
//
//$type = $_FILES['newImg']['type'];
//$array = include __DIR__ . '/typeArr.php';
//
//
//var_dump($uploader->isSetAllowedTypes($array, $type));
//var_dump($uploader->upload());


