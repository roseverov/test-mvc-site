<?php

	/*FRONT CONTROLLER*/
	
	
	
	//1. Общие настройкии
	
	ini_set('display_errors', 1);//отображение ошибок
	error_reporting(E_ALL);
	
	//2. Подключение файлов системы
	
	define ('ROOT',dirname(__FILE__));//отображает винч и путь до директории, где нах-ся файл
	require_once (ROOT.'/components/Router.php');
	
	//3. Установка соединения с БД
	
	
	
	//4. Вызовв Router
	
	$router = new Router();
	$router->run();
	
	
	
?>