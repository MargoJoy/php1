<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';
require_once __DIR__ . '/classes/DB.php';

$temp = __DIR__ . '/templates/index.php';


$db = new DB();
$database = $db->query('SELECT * FROM news ORDER BY id DESC');


$news = new News($database);

$art = new Article($news);

$view = new View();
$view->assign('news', $news->getData());
$view->display($temp);