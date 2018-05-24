<?php

	ini_set('display_errors',1);

	require_once 'vendor/autoload.php';

	//require 'app/config/constants.php';

	use \App\Config\Constants as Constants;

	$costants = new Constants;

	
	echo WWW_ROOT.'<br>';
	//echo $defaul;