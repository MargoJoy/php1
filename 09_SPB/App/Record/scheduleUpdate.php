<?php
require __DIR__ . '/../../autoload.php';

$template = __DIR__ . '/../View/templates/scheduleUpdate.php';
$view = new \App\View\classes\View();

$info = new \App\Model\schedule\TrainSchedule();

if(isset($_POST['departure']) && isset($_POST['dep_time']) && isset($_POST['arival']) && isset($_POST['ariv_time'])){
    $info->setSchedule($_POST['id'], $_POST['departure'], $_POST['dep_time'], $_POST['arival'], $_POST['ariv_time']);
    header('Location: /../App/Controller/admin.php');
}


$view->assign('schedule', $info->findById($_GET['id']));
$view->display($template);
