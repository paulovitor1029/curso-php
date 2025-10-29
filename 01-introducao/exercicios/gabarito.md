# Gabarito Resumido – Módulo Introdução

> Utilize como referência após concluir os exercícios sozinho. Compare lógica, nomenclatura e organização com suas soluções.

## Exemplos de Respostas

### Média de Notas (Lista 01 – Exercício 2)
```php
$notas = [
    (float) readline('Nota 1: '),
    (float) readline('Nota 2: '),
    (float) readline('Nota 3: '),
];

$media = array_sum($notas) / count($notas);

if ($media >= 7) {
    $status = 'Aprovado';
} elseif ($media >= 5) {
    $status = 'Em recuperação';
} else {
    $status = 'Reprovado';
}

echo "Média: " . number_format($media, 2) . " - Status: $status" . PHP_EOL;
```

### Sistema de Login (Lista 02 – Exercício 1)
```php
$usuario = 'admin';
$senha = '123456';

definirTentativas:
for ($tentativas = 1; $tentativas <= 3; $tentativas++) {
    $login = readline('Usuário: ');
    $password = readline('Senha: ');

    if ($login === $usuario && $password === $senha) {
        echo 'Bem-vindo!' . PHP_EOL;
        return;
    }

    echo 'Credenciais inválidas. Tentativa ' . $tentativas . '/3' . PHP_EOL;
}

echo 'Acesso bloqueado. Aguarde alguns minutos e tente novamente.' . PHP_EOL;
```

### Ordenação de Produtos (Lista 03 – Exercício 2)
```php
$produtos = [
    ['nome' => 'Mouse', 'preco' => 79.90],
    ['nome' => 'Teclado', 'preco' => 149.50],
    ['nome' => 'Monitor', 'preco' => 899.00],
];

usort($produtos, static function (array $a, array $b): int {
    return $a['preco'] <=> $b['preco'];
});

print_r($produtos);
```

### Desafio – Gerador de Senhas
```php
declare(strict_types=1);

function gerarSenha(int $tamanho = 12, bool $maiusculas = true, bool $numeros = true, bool $simbolos = true): string
{
    $alfabeto = 'abcdefghijklmnopqrstuvwxyz';
    $numerosStr = '0123456789';
    $simbolosStr = '!@#$%^&*()-_=+';

    $conjunto = $alfabeto;
    if ($maiusculas) {
        $conjunto .= strtoupper($alfabeto);
    }
    if ($numeros) {
        $conjunto .= $numerosStr;
    }
    if ($simbolos) {
        $conjunto .= $simbolosStr;
    }

    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $indice = random_int(0, strlen($conjunto) - 1);
        $senha .= $conjunto[$indice];
    }

    return $senha;
}

echo gerarSenha() . PHP_EOL;
```
