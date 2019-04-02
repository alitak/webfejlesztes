<?php

define('BASE_PATH', __DIR__);

include('includes/constants.php');
include('includes/database.php');

$params = explode('/', trim($_SERVER['QUERY_STRING'], '/'));

// set default html content
$return_html = '404';

// determine module name, first char uppercase! default is home
$module_name = ucfirst(!$params[0] ? MODULE_DEFAULT : $params[0]);
$module_path = MODULES_PATH . $module_name . '.php';
if (is_file($module_path)) {
    include($module_path);
    $controller = new $module_name();

    // determine the called method, default is index
    $method_name = strtolower(!isset($params[1]) ? MODULE_DEFAULT_METHOD : $params[1]);

    if (method_exists($controller, $method_name)) {
        // initialize database
        $db = new database(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DATABASE);
        // load selected method's db object
        $controller->loadDB($module_name);
        // remove controller/method name from parameters array
        unset($params[0], $params[1]);
        // call selected method
        $return_html = call_user_func_array([$controller, $method_name], $params);
        $db->close();
    }
}

echo $return_html;


echo '<hr>
    <a href="' . BASE_URL . '/home/index">Home / index</a> |
    <a href="' . BASE_URL . '/home/show">Home / show</a> |
    <a href="' . BASE_URL . '/users/get/1">Users / get 1</a> |
    <a href="' . BASE_URL . '/users/get/2">Users / get 2</a>
    ';
