<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
require_once('connection.php');
require_once('lib/tools.php');
session_start();
if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else {
    $controller = 'pages';
    $action = 'home';
}

if (isset($_GET['no_layout'])) {
    require_once('routes.php');
} else {
    require_once('views/layout.php');
}