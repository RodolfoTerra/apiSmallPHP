<?php

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'driver'   => 'pdo_mysql',
    'host'	   => 'localhost',
    'user'     => 'root',
    'password' => 'rodsroots',
    'dbname'   => 'teste_api',
);

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);
