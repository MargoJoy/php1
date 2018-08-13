<?php
session_start();
include __DIR__ . '/function.php';

if (null !== getCurrentUser()) {
    header('Location: /index.php');
} else {
    if ((isset($_POST['login'])) && (isset($_POST['password']))) {
        if (checkPassword($_POST['login'], $_POST['password'])) {
            $_SESSION['name'] = $_POST['login'];
            header('Location: /index.php');
        }
    }
}