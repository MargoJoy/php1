<?php
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/DB.php';

$temp = __DIR__ . '/templates/article.php';


$db = new DB();

$data = [];
$data['id'] = $_GET['id'];

$sql = 'SELECT * FROM news WHERE id=:id';
$newsData = $db->query($sql, $data); //newsData //model

$view = new View();

if ($database) {
    $view->assign('news', $newsData[0]);
} else {
    header('Location: /index.php');
}

$view->display($temp);
