<?php
class Uploader
{
    public $formName;
    public $array;
    public $types;

    public function __construct($formName)
    {
        $this->formName = $formName;
    }

    public function isUploaded()
    {

        if ((isset($_FILES[$this->formName])) && (0 == $_FILES[$this->formName]['error'])) {
            return true;
        } else {
            return false;
        }
    }


    public function isSetAllowedTypes($array, $types)
    {
        $this->array = $array;
        $this->types = $types;
        if (in_array($this->types, $this->array)){
            return true;
        } else {
            return false;
        }
    }

    public function upload()
    {
        if ($this->isUploaded() && $this->isSetAllowedTypes($this->array, $this->types)) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../gallery/img/' . $_FILES[$this->formName]['name']
            );
        } else {
            return null;
        }
    }
}