<?php

declare(strict_types=1);

use Api\Http\Action;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

// Define app routes
$app->get('/', Action\HomeAction::class);

// Run app
$app->run();