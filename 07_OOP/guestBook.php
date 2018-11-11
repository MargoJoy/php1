<?php
session_start();
require_once __DIR__ . '/classes/Authentication.php';
require_once __DIR__ . '/classes/View.php';
require_once __DIR__ . '/classes/GuestBook.php';

$authentication = new Authentication(__DIR__ . '/data/users.php');

$textGB = __DIR__ . '/data/text.txt';
$template = __DIR__ . '/templates/guestBook.php';

$userName = $authentication->getCurrentUser();

$gbook = new GuestBook($textGB);
$newLines = $_POST['text'];

if (isset($userName)) {
    if (null !== $newLines){
        $gbookrecord = new GuestBookRecord($newLines);
        $gbook->append($gbookrecord)->save();
        header('Location: /guestBook.php');
    }
}

$view = new View();
$view->assign('gbook', $gbook->getData());
$view->display($template);
