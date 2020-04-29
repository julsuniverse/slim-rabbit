<?php

declare(strict_types=1);

use Api\Http\Action;
use Slim\Factory\AppFactory;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

if (file_exists('.env')) {
    (new Dotenv())->load('.env');
}

$app = AppFactory::create();

// Define app routes
$app->get('/', Action\HomeAction::class);

// Run app
$app->run();