<?php

declare(strict_types=1);

namespace Api\Http\Action;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HomeAction
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $data = [
            'name' => 'App API',
            'version' => '1.0',
        ];

        return new JsonResponse($data);
    }
}