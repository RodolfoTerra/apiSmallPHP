<?php

// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array("app/model"), $isDevMode);
//$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."app/model"), $isDevMode);

// or if you prefer XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config"), $isDevMode);
// database configuration parameters
$conn = array(
    'driver' 	=> 'pdo_mysql',
    'host' 		=> 'localhost',
	'user'     	=> 'root',
    'password' 	=> 'rodsroots',
    'dbname'   	=> 'teste_api',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
