<?php

$notas = [7,4,8,2,1,9,5,10,11,17,13,15,3];

echo "Desordenada:";
foreach ($notas as $v) echo " ". $v;
echo PHP_EOL;

sort($notas);

echo "Ordenada:   ";
foreach ($notas as $v) echo " ". $v;
echo PHP_EOL . PHP_EOL;

#como fazer sorting em objetos complexos?

$notasComplexas = [
    [
        'nome' => 'Vinicius',
        'nota' => 7
    ],
    [
        'nome' => 'Denise',
        'nota' => 6
    ],
    [
        'nome' => 'Clarissa',
        'nota' => 8
    ]
    ];

echo "Desordenada:" . PHP_EOL;
imprimeNotas($notasComplexas);

usort($notasComplexas, 'ordenaNotas');

echo "Ordenada:" . PHP_EOL;
imprimeNotas($notasComplexas);

function imprimeNotas($array) {
    foreach ($array as $v) {
        echo 'Nome: ' . $v['nome'] . ' Nota: ' . $v['nota'] . PHP_EOL;
    }
}

function ordenaNotas (array $notas1, array $notas2) : int
{
    return $notas1['nota'] <=> $notas2['nota'];
}
