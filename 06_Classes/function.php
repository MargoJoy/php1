<?php
//возвращает массив всех пользователей и хэшей их паролей
function getUsersList()
{
    $path = include __DIR__ . '/users.php';
    return $path;
}

//проверяет - существует ли пользователь с заданным логином
function existsUser($login)
{
//Проверяет, присутствует ли в массиве указанный ключ или индекс
    $user = array_key_exists($login, getUsersList());
    return $user;
}

//возвращает true, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function checkPassword($login, $password)
{
    $access = password_verify($password, getUsersList()[$login]);

    if ((existsUser($login) == true) && $access == true) {
        return true;
    } else {
        return false;
    }
}

//возвращает либо имя вошедшего на сайт пользователя, либо null
function getCurrentUser()
{
    if (isset($_SESSION['name'])) {
        return $_SESSION['name'];

    } else {
        return null;
    }
}