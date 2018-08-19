<?php
require __DIR__ . '/../../autoload.php';

$typePuth = include __DIR__ . '/../data/imageType.php';


$file = $_FILES['newImg'];
$fileName = $_FILES['newImg']['name'];
$fileType = $_FILES['newImg']['type'];
$fileDes = $_POST['description'];


$uploadImage = new \App\Model\gallery\UploadImage('newImg');
$gallery = new \App\Model\gallery\Gallery();


if (isset($file) && !empty($file)) {
    if ($uploadImage->isUploaded() && $uploadImage->setAllowedTypes($typePuth, $fileType)) {
        $uploadImage->upload();
        $gallery->setImage($fileName, $fileDes);
    }
    header('Location: /../App/Controller/admin.php');
}