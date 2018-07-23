<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';
//require_once __DIR__ . '/classes/Article.php';

$temp = __DIR__ . '/templates/news.php';

$view = new View();
$news = new News(__DIR__ . '/data/news.php');


$article = new Article($news);

//var_dump($news);

$view->assign('news', $news->getData());
$view->display($temp);
