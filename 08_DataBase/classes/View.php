<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 003 03.12.18
 * Time: 16:17
 */

class View
{
    protected $data = [];
    public function assign($name, $value)
    {
        $this->data[$name] = $value;
    }
    public function display($template)
    {
        echo $this->render($template);
    }
    public function render($template)
    {
        ob_start();
        $data = $this->data;
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}