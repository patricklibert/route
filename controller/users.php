<?php

global $url;
$GLOBALS['$url'] = "/var/www/ubuntu/route/view/";
class users
{
    public function __construct() {
        $sql = new sql();
        $inhoud = $sql->users();
        ob_start();
        include $GLOBALS['$url'] . "users.php";
        $data = ob_get_clean();
        echo $data;
        unset($db1);

    }
}