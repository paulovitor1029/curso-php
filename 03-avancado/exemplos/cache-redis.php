<?php

declare(strict_types=1);

use Symfony\Component\Cache\Adapter\RedisAdapter;
use Symfony\Component\Cache\CacheItem;

$client = RedisAdapter::createConnection('redis://localhost:6379');
$cache = new RedisAdapter($client, namespace: 'curso_php', defaultLifetime: 3600);

$key = 'produtos.recentes';

/** @var CacheItem $item */
$item = $cache->getItem($key);

if (!$item->isHit()) {
    echo "Cache miss, consultando banco..." . PHP_EOL;
    // Simula consulta ao banco
    $dados = [['id' => 1, 'nome' => 'Notebook'], ['id' => 2, 'nome' => 'Mouse Gamer']];
    $item->set($dados);
    $cache->save($item);
} else {
    echo "Cache hit!" . PHP_EOL;
}

print_r($item->get());
