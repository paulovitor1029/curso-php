<?php

declare(strict_types=1);

use App\Application\UseCase\CriarPedido;
use App\Domain\Entity\Pedido;
use App\Infrastructure\Persistence\PedidoRepositoryInMemory;

it('cria um pedido com itens válidos', function (): void {
    $repository = new PedidoRepositoryInMemory();
    $useCase = new CriarPedido($repository);

    $pedido = $useCase->executar([
        'cliente_id' => 1,
        'itens' => [
            ['produto_id' => 10, 'quantidade' => 2, 'preco' => 199.90],
            ['produto_id' => 11, 'quantidade' => 1, 'preco' => 99.90],
        ],
    ]);

    expect($pedido)->toBeInstanceOf(Pedido::class)
        ->and($pedido->valorTotal())->toEqual(499.70);

    expect($repository->todos())->toHaveCount(1);
});
