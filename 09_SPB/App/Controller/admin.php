<?php
require __DIR__ . '/../../autoload.php';

$template = __DIR__ . '/../View/templates/admin.php';
$view = new \App\View\classes\View();

//-------------------

$cityText = __DIR__ . '/../../App/data/cityText.txt';

$city = new \App\Model\city\City($cityText);

$view->assign('aboutSpb', $city->getText());

//-------------------

$gallery = new \App\Model\gallery\Gallery();

$view->assign('allImages', $gallery->getImages());


//-------------------
$info = new \App\Model\schedule\TrainSchedule();

$view->assign('schedule', $info->getInfo());

$view->display($template);

