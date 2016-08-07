<?php

$string = '22-06-1941';

$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';

$replacement = 'Год $3, месяц $2, день $1';

echo preg_replace($pattern, $replacement, $string);

die;

// FRONT CONTROLLER


//Общие настройки

ini_set('display_errors',1);
error_reporting(E_ALL);

//Подключение файлов системы
define('ROOT'. dirname(__FILE__));
require_once(ROOT . '/components/Router.php');
require_once(ROOT. '/components/Db.php');


//Установка соединения  с БД

// Вызов  Router
$router = new Router();
$router->run();
