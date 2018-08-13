<?php
class View
{

    public $data = [];

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