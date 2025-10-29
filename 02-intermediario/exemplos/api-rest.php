<?php

declare(strict_types=1);

// Exemplo simples de API REST utilizando FastRoute

require __DIR__ . '/vendor/autoload.php';

use FastRoute\Dispatcher;
use function FastRoute\simpleDispatcher;

$posts = [
    1 => ['id' => 1, 'titulo' => 'Primeiro Post', 'conteudo' => 'Conteúdo de exemplo'],
];

$dispatcher = simpleDispatcher(static function (FastRoute\RouteCollector $r): void {
    $r->addRoute('GET', '/posts', 'listarPosts');
    $r->addRoute('GET', '/posts/{id:\\d+}', 'mostrarPost');
    $r->addRoute('POST', '/posts', 'criarPost');
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

header('Content-Type: application/json');

global $posts;

switch ($routeInfo[0]) {
    case Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo json_encode(['message' => 'Recurso não encontrado']);
        break;
    case Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo json_encode(['message' => 'Método não permitido']);
        break;
    case Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        if ($handler === 'listarPosts') {
            echo json_encode(array_values($posts));
        }
        if ($handler === 'mostrarPost') {
            $id = (int) ($vars['id'] ?? 0);
            echo json_encode($posts[$id] ?? ['message' => 'Post não encontrado']);
        }
        if ($handler === 'criarPost') {
            $payload = json_decode(file_get_contents('php://input') ?: '[]', true);
            $novoId = max(array_keys($posts)) + 1;
            $posts[$novoId] = [
                'id' => $novoId,
                'titulo' => $payload['titulo'] ?? 'Sem título',
                'conteudo' => $payload['conteudo'] ?? '',
            ];
            http_response_code(201);
            echo json_encode($posts[$novoId]);
        }
        break;
}
