<?php

	namespace App\Config;

	class Constants
	{
		function __construct ()
		{
			define('WWW_ROOT', dirname(__FILE__));
			define('DS', DIRECTORY_SEPARATOR);
		}

	}
