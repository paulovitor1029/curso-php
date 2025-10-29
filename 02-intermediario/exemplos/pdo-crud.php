<?php

declare(strict_types=1);

$dsn = 'mysql:host=localhost;dbname=curso_php;charset=utf8mb4';
$usuario = 'root';
$senha = 'secret';

try {
    $pdo = new PDO($dsn, $usuario, $senha, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $exception) {
    echo 'Erro de conexão: ' . $exception->getMessage() . PHP_EOL;
    exit(1);
}

$pdo->beginTransaction();

try {
    $stmt = $pdo->prepare('INSERT INTO posts (titulo, conteudo) VALUES (:titulo, :conteudo)');
    $stmt->execute([
        ':titulo' => 'Primeiro Post',
        ':conteudo' => 'Conteúdo de exemplo utilizando PDO.',
    ]);

    $id = (int) $pdo->lastInsertId();

    $select = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
    $select->bindValue(':id', $id, PDO::PARAM_INT);
    $select->execute();
    $post = $select->fetch();

    print_r($post);

    $update = $pdo->prepare('UPDATE posts SET conteudo = :conteudo WHERE id = :id');
    $update->execute([
        ':conteudo' => 'Conteúdo atualizado com prepared statements.',
        ':id' => $id,
    ]);

    $delete = $pdo->prepare('DELETE FROM posts WHERE id = :id');
    $delete->execute([':id' => $id]);

    $pdo->commit();
} catch (Throwable $exception) {
    $pdo->rollBack();
    echo 'Erro na operação: ' . $exception->getMessage() . PHP_EOL;
}
