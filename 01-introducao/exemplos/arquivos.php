<?php

declare(strict_types=1);

$arquivo = __DIR__ . '/usuarios.csv';

$usuarios = [
    ['id' => 1, 'nome' => 'Ana', 'email' => 'ana@example.com'],
    ['id' => 2, 'nome' => 'Bruno', 'email' => 'bruno@example.com'],
];

$handle = fopen($arquivo, 'w');
if ($handle === false) {
    throw new RuntimeException('Não foi possível abrir o arquivo.');
}

fputcsv($handle, ['id', 'nome', 'email']);
foreach ($usuarios as $usuario) {
    fputcsv($handle, $usuario);
}

fclose($handle);

echo "Arquivo salvo em: $arquivo\n";

// Leitura
$handle = fopen($arquivo, 'r');
if ($handle === false) {
    throw new RuntimeException('Não foi possível ler o arquivo.');
}

$dados = [];
while (($linha = fgetcsv($handle)) !== false) {
    $dados[] = $linha;
}
fclose($handle);

print_r($dados);
