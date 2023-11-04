<?php

$notasBimestre1 = [
    'Vinicius' => 7,
    'João' => 6,
    'Michael' => 8,
    'Denise' => 9,
    'Clarissa' => 5
];

$notasBimestre2 = [
    'Vinicius' => 5,
    'João' => 3,
    'Denise' => 2,
    'Clarissa' => 10
];

/*
    Retorna novo array contendo elementos do primeiro array que não são exibidos nos demais
    NOTA: considera os valores para realizar comparação
*/
$diff = array_diff($notasBimestre1, $notasBimestre2);

$nomesAlunos = array_keys($diff); #retorna array com as keys
$notasAlunos = array_values($diff); #retorna array com os valores

var_dump(array_combine($nomesAlunos, $nomesAlunos)); #Combina, criando array invertido