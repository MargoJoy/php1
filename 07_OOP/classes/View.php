<?php
class View
{
//массив для хранения этих данных
    public $data = [];

//сохраняет данные, передаваемые в шаблон
    public function assign($name, $value)
    {
//ключ, значение
        $this->data[$name] = $value;
    }
//отображает указанный шаблон с заранее сохраненными данными
    public function display($template)
    {
//отображает шаблон, предварительно сохранив все в строку
        echo $this->render($template);

    }
//возвращает указанный шаблон
    public function render($template)
    {
//открывается буфер вывода
        ob_start();
//в буфр сохраняется полученный массив
        $data = $this->data;
//подключается шаблон страницы
        include $template;
//сохраняет накопленное содержимое
        $content = ob_get_contents();
//уничтожение накопленной информации
        ob_end_clean();
//возвращает содержимое
        return $content;
    }

}


