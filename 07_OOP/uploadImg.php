<?php
session_start();
require_once __DIR__ . '/classes/Authentication.php';
require_once __DIR__ . '/classes/Uploader.php';
$users = __DIR__ . '/data/users.php';

$authentication = new Authentication($users);
$uploader = new Uploader('newImg');

$type = $_FILES['newImg']['type'];
$array = include __DIR__ . '/data/typeArr.php';
$userName = $authentication->getCurrentUser();
$date = date('c');
$fileName = $_FILES['newImg']['name'];
$log = $userName . ' | ' . $date . ' | ' . $fileName . "\n";
$logPath = __DIR__ . '/data/log.txt';

if (isset($userName) && $uploader->isSetAllowedTypes($array, $type)) {
    $uploader->upload();
    file_put_contents($logPath, $log, FILE_APPEND);
};

header('Location: /index.php');