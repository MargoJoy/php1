<?php
require_once  __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/News.php';

$template = __DIR__ . '/templates/article.php';

$view = new View();
$news = new News();

if (isset($_GET['id']) && !empty($_GET['id'])) {

    $data = [':id' => $_GET['id']];
    $view->assign('oneArticle', $news->getData($data));

} else {
    header('Location: /index.php');
}

$view->display($template);
