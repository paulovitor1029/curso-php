<?php

declare(strict_types=1);

// Script inicial para validar ambiente

echo "Olá, mundo!\n";

// Exibe a versão do PHP em uso
printf("Versão do PHP: %s\n", PHP_VERSION);

// Listagem simples de variáveis
$nome = 'Estudante PHP';
$curso = 'Curso Completo de PHP';
$ano = date('Y');

echo "Bem-vindo, $nome! Você iniciou o $curso em $ano.\n";

// phpinfo pode ser utilizado para diagnosticar ambiente (descomente se necessário)
// phpinfo();
