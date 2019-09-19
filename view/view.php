<?php


class View
{
    private $data = array();

    private $render = FALSE;

    public function __construct($template)
    {
        $file = '/var/www/ubuntu/route/view/' . strtolower($template) . '.php';
        $this->render = $file;

    }

    public function assign($variable, $value)
    {
        $this->data[$variable] = $value;
    }

    public function __destruct()
    {
        extract($this->data);
        include($this->render);

    }
}
?>