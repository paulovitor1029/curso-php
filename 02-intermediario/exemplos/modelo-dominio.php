<?php

declare(strict_types=1);

namespace CursoPhp\Intermediario\Exemplos;

use DateTimeImmutable;

require_once __DIR__ . '/vendor/autoload.php'; // ajuste caso utilize composer

final class Post
{
    public function __construct(
        private readonly int $id,
        private string $titulo,
        private string $conteudo,
        private DateTimeImmutable $publicadoEm
    ) {
    }

    public function alterarTitulo(string $novoTitulo): void
    {
        $this->titulo = $novoTitulo;
    }

    public function alterarConteudo(string $novoConteudo): void
    {
        $this->conteudo = $novoConteudo;
    }

    public function publicar(DateTimeImmutable $data): void
    {
        $this->publicadoEm = $data;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'titulo' => $this->titulo,
            'conteudo' => $this->conteudo,
            'publicado_em' => $this->publicadoEm->format('Y-m-d H:i:s'),
        ];
    }
}

interface PostRepository
{
    public function salvar(Post $post): void;
    public function buscar(int $id): ?Post;
}

final class MemoryPostRepository implements PostRepository
{
    /** @var array<int, Post> */
    private array $posts = [];

    public function salvar(Post $post): void
    {
        $this->posts[$post->toArray()['id']] = $post;
    }

    public function buscar(int $id): ?Post
    {
        return $this->posts[$id] ?? null;
    }
}

final class PublicarPostService
{
    public function __construct(private readonly PostRepository $repository)
    {
    }

    public function publicar(Post $post): void
    {
        $post->publicar(new DateTimeImmutable());
        $this->repository->salvar($post);
    }
}

$repository = new MemoryPostRepository();
$service = new PublicarPostService($repository);

$post = new Post(1, 'Olá POO', 'Explorando conceitos intermediários.', new DateTimeImmutable());
$service->publicar($post);

var_dump($repository->buscar(1)?->toArray());
