<?php
require __DIR__ . '/../../autoload.php';

$template = __DIR__ . '/../View/templates/schedule.php';

$info = new \App\Model\schedule\TrainSchedule();

$view = new \App\View\classes\View();

$view->assign('schedule', $info->getInfo());
$view->display($template);