<?php

declare(strict_types=1);

use Slim\Factory\AppFactory;
use Symfony\Component\Dotenv\Dotenv;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

if (file_exists('.env')) {
    (new Dotenv())->load('.env');
}

$app = AppFactory::create();

// Define app routes
(require 'config/routes.php')($app);

// Run app
$app->run();