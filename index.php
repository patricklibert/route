<?php
session_start();
require_once 'controller/route.php';
require_once 'controller/sql.php';
require_once 'controller/login.php';
require_once 'controller/logout.php';
require_once 'view/view.php';

$route = new Route();

$route->add('/', function() {
    $view = new view('load');
});

$route->add('/users', function() {
    $sql = new sql();
    $users = $sql->users();
    $view = new view('users');
    $view->assign('inhoud', $users);

});

$route->add('/users/.+', function($first) {
    $sql = new sql();
    $row = $sql->user($first);
    $view = new view('profile');
    $view->assign('row', $row);

});

$route->add('/login', function() {
   $login = new login();

});

$route->add('/logout', function() {
    $logout = new logout();

});

$route->listen();
