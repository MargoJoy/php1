<?php
//возвращает массив всех пользователей и хэшей их паролей
function getUsersList()
{
    $users = include __DIR__ . '/users.php';
    return $users;
}

//проверяет - существует ли пользователь с заданным логином
function existsUser($login)
{
//Проверяет, присутствует ли в массиве указанный ключ или индекс
    foreach (getUsersList() as $key => $array ){
        if ($key == $login){
            return true;
        }
    }
    return false;
}

//возвращает true, когда существует пользователь с указанным логином и введенный им пароль прошел проверку
function checkPassword($login, $password)
{

    if (!empty(existsUser($login)) && existsUser($login) == true) {
        $access = password_verify($password, getUsersList()[$login]);

        if ($access == true){
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

//возвращает либо имя вошедшего на сайт пользователя, либо null
function getCurrentUser()
{
    if (existsUser($_SESSION['name'])) {
        if (isset($_SESSION['name'])) {
            $name = $_SESSION['name'];
            return $name;
        } else {
            return null;
        }
    }
    return null;
}
