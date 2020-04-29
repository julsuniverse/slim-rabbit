<?php

declare(strict_types=1);

use DI\Container;
use DI\ContainerBuilder;

$config = require __DIR__ . '/config.php';

$builder = new ContainerBuilder();
$builder->addDefinitions($config);
return $builder->build();