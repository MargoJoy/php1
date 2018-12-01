<?php

class Uploader
{
    public $formName;

//передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($formName)
    {
        $this->formName = $formName;
    }

//проверяет - был ли загружен файл от данного имени поля
    public function  isUploaded()
    {
        if (isset($_FILES[$this->formName]) && 0 == $_FILES[$this->formName]['error']){
            return true;
        } else {
            return false;
        }
    }

    public function isSetAllowedTypes($array, $types)
    {
        return in_array($types, $array);
    }

//осуществляет перенос файла (если он был загружен!) из временного места в постоянное
    public function  upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../gallery/img/' . $_FILES[$this->formName]['name']
            );
        } else {
            return null;
        }
    }

}



