<?php

	require_once 'vendor/autoload.php';
	require_once 'app/config/doctrine/doctrine_boot.php';

	use \App\Config\Configs as Configs;
	use \App\Config\Constants as Constants;
	
	$config = new Configs;
	$costants = new Constants;

	echo WWW_ROOT.'<br>';

