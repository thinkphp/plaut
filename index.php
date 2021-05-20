<?php
session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

define('BASEPATH', true);

define('ROOT_DIR',  realpath(__DIR__) . '/');
define('APP_DIR', ROOT_DIR .'application/');

/***** Required Files *****/
require(APP_DIR .'config/config.php');
require(APP_DIR .'function/function.php');
require(ROOT_DIR .'autoload.php');

autoload();

/***** Base URL *****/
define('BASE_URL', $config['base_url']);

$plaut = new Plaut();

$plaut->route();
?>
