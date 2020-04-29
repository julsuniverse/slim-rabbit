<?php

declare(strict_types=1);

namespace Api\Http\Action;

use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class HomeAction implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $data = [
            'name' => 'App API',
            'version' => '1.0',
        ];

        return new JsonResponse($data);
    }
}