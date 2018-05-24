<?php

	namespace App\Config;

	/**
	 * Constants Sistem
	 */

	class Constants
	{
		
		function __construct ()
		{
			define('WWW_ROOT', dirname(__FILE__));
			define('DS', DIRECTORY_SEPARATOR);
		}

	}
