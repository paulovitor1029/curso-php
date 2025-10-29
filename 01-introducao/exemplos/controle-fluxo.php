<?php

declare(strict_types=1);

$opcoes = [
    '1' => 'Calcular média de notas',
    '2' => 'Gerar tabuada',
    '3' => 'Converter temperatura',
    '0' => 'Sair',
];

while (true) {
    echo "\n=== Menu Principal ===\n";
    foreach ($opcoes as $codigo => $descricao) {
        echo "[$codigo] $descricao\n";
    }

    $escolha = readline('Selecione uma opção: ');

    switch ($escolha) {
        case '1':
            $notas = [];
            for ($i = 1; $i <= 3; $i++) {
                $notas[] = (float) readline("Informe a nota $i: ");
            }
            $media = array_sum($notas) / count($notas);
            echo "Média final: " . number_format($media, 2) . "\n";
            break;
        case '2':
            $numero = (int) readline('Informe um número: ');
            for ($i = 1; $i <= 10; $i++) {
                printf("%d x %d = %d\n", $numero, $i, $numero * $i);
            }
            break;
        case '3':
            $celsius = (float) readline('Informe temperatura em °C: ');
            $fahrenheit = ($celsius * 9 / 5) + 32;
            printf("%.2f °C equivalem a %.2f °F\n", $celsius, $fahrenheit);
            break;
        case '0':
            echo "Até logo!" . PHP_EOL;
            exit(0);
        default:
            echo "Opção inválida, tente novamente.\n";
    }
}
