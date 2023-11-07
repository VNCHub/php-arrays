<?php

#Adicionando e Removendo

$notasBimestre = [
    'Vinicius' => 7,
    'João' => 6,
    'Michael' => 8,
    'Denise' => 9,
    'Clarissa' => 5
];

$alunos = [
    'Vinicius',
    'João',
    'Denise',
    'Clarissa',
];

array_push($alunos, "Jorge", "Fred"); #adiciona no final do arquivo

var_dump($alunos);