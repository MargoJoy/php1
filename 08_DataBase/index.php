<?php
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/View.php';
$temp = __DIR__ . '/templates/index.php';

$view = new View();
$news = new News();

$view->assign('news', $news->getData());
$view->display($temp);