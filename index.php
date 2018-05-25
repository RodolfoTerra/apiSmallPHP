<?php

	//require_once 'app/config/doctrine/doctrine_config.php';

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


	/* Dinamic Model */
	$modelVariable = '\App\\Model\\'.$routerName;

	if(class_exists($modelVariable)) {
		$model = new $modelVariable;
	}


	/* Dinamic Control */
	$controlVariable = '\App\\Control\\'.$routerName;

	if(class_exists($controlVariable)) {
		$control = new $controlVariable;
	}


	/* Dinamic View */
	$viewVariable = '\App\\View\\'.$routerName;

	if(class_exists($viewVariable)) {
		$view = new $viewVariable;
	}

	// $testeNome = 'Nome 1';
	// echo $model->setTesteNome($testeNome);

	// $entityManager->persist($model);
	// $entityManager->flush();

	//echo $model->getTesteNome();
	//print_r($teste->getTesteNome());
