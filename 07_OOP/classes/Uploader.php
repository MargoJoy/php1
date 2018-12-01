<?php

class Uploader
{
    public $formName;

    public function __construct($formName)
    {
        $this->formName = $formName;
    }

    public function  isUploaded()
    {
        if (isset($_FILES[$this->formName]) && 0 == $_FILES[$this->formName]['error']) {
            return true;
        } else {
            return false;
        }
    }

    public function isSetAllowedTypes($array, $types)
    {
        return in_array($types, $array);
    }

    public function  upload()
    {
        if ($this->isUploaded()) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../images/' . $_FILES[$this->formName]['name']
            );
        } else {
            return null;
        }
    }
}