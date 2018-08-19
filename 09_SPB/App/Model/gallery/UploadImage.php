<?php

namespace App\Model\gallery;


class UploadImage
{
    public $formName;
    public $myTypes;
    public $type;

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

    public function setAllowedTypes($myTypes, $type)
    {
        $this->myTypes = $myTypes;
        $this->type = $type;

        foreach ($this->myTypes as $key => $line) {
            if ($line == $this->type) {
                return true;
            }else {
                return false;
            }
        }
        return null;
    }

    public function upload()
    {
        if ($this->isUploaded() && $this->setAllowedTypes($this->myTypes, $this->type)) {
            move_uploaded_file(
                $_FILES[$this->formName]['tmp_name'],
                __DIR__ . '/../../data/img/' . $_FILES[$this->formName]['name']
            );
        } else {
            return null;
        }
    }

}