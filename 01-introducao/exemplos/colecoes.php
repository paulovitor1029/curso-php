<?php

declare(strict_types=1);

/**
 * Normaliza e valida um CPF simples.
 */
function normalizarCpf(string $cpf): string
{
    $apenasDigitos = preg_replace('/\D+/', '', $cpf) ?? '';

    if (strlen($apenasDigitos) !== 11) {
        throw new InvalidArgumentException('CPF deve conter 11 dígitos.');
    }

    return substr($apenasDigitos, 0, 3) . '.' .
        substr($apenasDigitos, 3, 3) . '.' .
        substr($apenasDigitos, 6, 3) . '-' .
        substr($apenasDigitos, 9, 2);
}

$usuarios = [
    ['nome' => 'Ana', 'cpf' => '123.456.789-09', 'nascimento' => '1995-02-11'],
    ['nome' => 'Bruno', 'cpf' => '98765432100', 'nascimento' => '1988-07-23'],
    ['nome' => 'Carlos', 'cpf' => '74185296311', 'nascimento' => '2001-10-05'],
];

// Aplica normalização em todos os usuários
$usuariosNormalizados = array_map(static function (array $usuario): array {
    $usuario['cpf'] = normalizarCpf($usuario['cpf']);
    return $usuario;
}, $usuarios);

print_r($usuariosNormalizados);

// Filtra usuários maiores de 25 anos
$maioresDe25 = array_filter($usuariosNormalizados, static function (array $usuario): bool {
    $idade = (int) date('Y') - (int) date('Y', strtotime($usuario['nascimento']));
    return $idade >= 25;
});

print_r($maioresDe25);

// Reduz lista para string com nomes formatados
$listaNomes = array_reduce($usuariosNormalizados, static function (?string $carry, array $usuario): string {
    $novo = $usuario['nome'];
    if ($carry === null) {
        return $novo;
    }
    return $carry . ', ' . $novo;
});

echo "Participantes: $listaNomes\n";
