<?php
session_start();
include __DIR__ . '/function.php';

//если пользователь существует
if (null !== getCurrentUser()) {
    header('Location: /index.php');
} else {
//иначе ожидаем информацию от формы, если не пусто
    if ((isset($_POST['login'])) && (isset($_POST['password']))) {
//проверка пароля и логина
        if (checkPassword($_POST['login'], $_POST['password'])) {
//если совпадает то сохраняет имя пользователя и перенаправляет на главную, иначе форма
            $_SESSION['name'] = $_POST['login'];
            header('Location: /index.php');
        }
    }
}