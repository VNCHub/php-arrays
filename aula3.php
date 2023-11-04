<?php

$notas = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres',
    4 => 'quatro',
    5 => 'cinco',
    6 => 'seis',
    7 => 'sete'
];

if (is_array($notas)) {
    echo "Deu certo!" . PHP_EOL;
}

if (array_is_list($notas)) { # retorna True se for um array numérico começado no zero, em ordem crescente.
    echo "É uma lista!" . PHP_EOL;
}

$valor = array_search('cinco', $notas);
echo $valor . PHP_EOL;
