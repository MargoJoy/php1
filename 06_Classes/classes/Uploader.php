<?php
class Uploader
{
    public $formName;
    public $array;
    public $types;

//имя от куда ожидается загрузка
    public function __construct($formName)
    {
        $this->formName = $formName;
    }
//был ли загружен файл от данного имени поля
    public function isUploaded()
    {
//если не пусто и нет ошибок то true
        if ((isset($_FILES[$this->formName])) && (0 == $_FILES[$this->formName]['error'])) {
            return true;
        } else {
            return false;
        }
    }

//обсуждали в чате, дополнительный метод для проверки типа получаемого файла
    public function setAllowedTypes($array, $types)
    {
        $this->array = $array;
        $this->types = $types;
        if (in_array($this->types, $this->array)){
            return true;
        } else {
            return false;
        }
    }

//перенос файла в постоянное место
    public function upload()
    {
        if ($this->isUploaded() && $this->setAllowedTypes($this->array, $this->types)) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../gallery/img/' . $_FILES[$this->formName]['name']
            );
        } else {
            return null;
        }
    }
}