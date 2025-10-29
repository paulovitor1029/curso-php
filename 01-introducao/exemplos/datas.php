<?php

declare(strict_types=1);

$hoje = new DateTimeImmutable('now', new DateTimeZone('America/Sao_Paulo'));
$evento = new DateTimeImmutable('next friday 19:30', new DateTimeZone('America/Sao_Paulo'));

$intervalo = $hoje->diff($evento);

printf(
    "Faltam %d dias, %d horas e %d minutos para o próximo evento.\n",
    $intervalo->days,
    $intervalo->h,
    $intervalo->i
);

$formatos = [
    'd/m/Y',
    'd \d\e F \d\e Y',
    DateTimeInterface::RFC3339,
];

foreach ($formatos as $formato) {
    echo $evento->format($formato) . PHP_EOL;
}

// Conversão de fuso horário
$eventoNy = $evento->setTimezone(new DateTimeZone('America/New_York'));

echo 'Horário em Nova Iorque: ' . $eventoNy->format('d/m/Y H:i') . PHP_EOL;
