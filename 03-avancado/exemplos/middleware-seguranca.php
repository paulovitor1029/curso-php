<?php

declare(strict_types=1);

namespace CursoPhp\Avancado\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class SecurityHeadersMiddleware implements MiddlewareInterface
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $response = $handler->handle($request);

        return $response
            ->withHeader('X-Frame-Options', 'DENY')
            ->withHeader('X-Content-Type-Options', 'nosniff')
            ->withHeader('Referrer-Policy', 'no-referrer')
            ->withHeader('Content-Security-Policy', "default-src 'self'; img-src 'self' data:; script-src 'self'");
    }
}
