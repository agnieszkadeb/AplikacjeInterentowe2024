<?php

//wcześniejsze dane
//define('_SERVER_NAME', 'localhost');
//define('_SERVER_URL', 'http://'._SERVER_NAME);
//define('_APP_ROOT', '/Projekt1');
//define('_APP_URL', _SERVER_URL._APP_ROOT);
//define("_ROOT_PATH", dirname(__FILE__));



require_once 'Config.class.php';

$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost:80';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Projekt1';
$conf->app_url = $conf->server_url.$conf->app_root;


?>
