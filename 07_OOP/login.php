<?php
session_start();
require_once __DIR__ . '/classes/Authentication.php';
require_once __DIR__ . '/classes/View.php';

$template = __DIR__ . '/templates/login.php';
$users = __DIR__ . '/data/users.php';

$authentication = new Authentication($users);

if (null !== $authentication->getCurrentUser()){
    header('Location: /index.php');
} else {
    if (isset($_POST['login']) && isset($_POST['password'])) {
        if ($authentication->checkPassword($_POST['login'], $_POST['password'])) {
            $_SESSION['name'] = $_POST['login'];
            header('Location: /index.php');
        }
    }
}

$view = new View();
$view->display($template);