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

#Funções de adicionar
array_push($alunos, "Jorge", "Fred"); #adiciona no final do array
array_unshift($alunos,"Marques","Richard"); #adiciona no inicio do array

#Funções de remover
$value = array_shift($alunos); #remove no inicio do array
$secondValue = array_pop($alunos); #remove do final do array

var_dump($alunos);