<?php
global $url;
$GLOBALS['$url'] = "/var/www/ubuntu/route/view/";

class load
{
    public function __construct() {
        ob_start();
        include $GLOBALS['$url'] . "load.php";
        $data = ob_get_clean();
        echo $data;

    }
}