<?php

class Authentication
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getUsersList(){
        $users = include $this->data;
        return $users;
    }

    public function existsUser($login)
    {
        return isset($this->getUsersList()[$login]);
    }

    public function  checkPassword($login, $password)
    {
        if($this->existsUser($login) && password_verify($password, $this->getUsersList()[$login])) {
            return true;
        } else {
            return false;
        }
    }

    public function getCurrentUser()
    {
        if (!empty($_SESSION['name'] && $this->existsUser($_SESSION['name']))) {
            return $_SESSION['name'];
        } else {
            return null;
        }
    }

}
