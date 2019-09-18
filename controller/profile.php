<?php

global $url;
$GLOBALS['$url'] = "/var/www/ubuntu/route/view/";


class profile
{
    public function __construct($first) {
        $sql = new sql();
        $row = $sql->user($first);
        ob_start();
        include $GLOBALS['$url'] . "profile.php";
        $data = ob_get_clean();
        echo $data;
        unset($db);

    }
}