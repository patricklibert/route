<?php
session_start();
require_once 'controller/route.php';
require_once 'controller/users.php';
require_once 'controller/load.php';
require_once 'controller/profile.php';
require_once 'controller/sql.php';
require_once 'controller/login.php';
require_once 'controller/logout.php';
global $url;
$GLOBALS['$url'] = "/var/www/ubuntu/route/view/";

$route = new Route();

$route->add('/', function() {
  $home = new load();
});

$route->add('/users', function() {
   $users = new users();

});

$route->add('/users/.+', function($first) {
    $profile = new profile($first);

});

$route->add('/login', function() {
   $login = new login();

});

$route->add('/logout', function() {
    $logout = new logout();

});

$route->listen();
