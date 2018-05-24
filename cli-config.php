<?php
// cli-config.php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once "app/config/doctrine/doctrine_boot.php";

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

// // replace with mechanism to retrieve EntityManager in your app
// $entityManager = GetEntityManager();

// return ConsoleRunner::createHelperSet($entityManager);
