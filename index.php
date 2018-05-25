<?php

	require_once 'vendor/autoload.php';

	use \App\Config\Configs as Configs;
	use \App\Config\Constants as Constants;
	use \App\Config\Router as Router;

	$config = new Configs;
	$costants = new Constants;
	$router = new Router;

	/* Start Router verification */
	$arrayRouter = $router->getRouter();
	$routerName = $arrayRouter[0];

	if(isset($arrayRouter[1])) { 
		$routerConditions = $arrayRouter[1]; 
	}else{
		$routerConditions = "";
	}
	/* End Router verification */

	/* Dinamic Control */
	$controlVariable = '\App\\Control\\'.$routerName;

	if(class_exists($controlVariable)) {
		$control = new $controlVariable;
	}


	print_r($routerName);
