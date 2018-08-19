<?php
require __DIR__ . '/autoload.php';

$template = __DIR__ . '/App/View/templates/home.php';
$cityText = __DIR__ . '/App/data/cityText.txt';

$view = new \App\View\classes\View();

$city = new \App\Model\city\City($cityText);

$view->assign('aboutSpb', $city->getText());
$view->display($template);