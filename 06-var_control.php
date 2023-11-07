<?php

# Função List (Cria diversas variáveis)
$list = ['Jorge', 74, 10];
list($nome, $idade, $nota) = $list;

# Ou:
$list2 = ['Jorge', 74, 10];
[$nome2, $idade2, $nota2] = $list2;

# Ou ainda: (este precisa ser um array associativo)
$list3 = ['nome3'=> 'Jorge', 'idade3' => 74, 'nota3' => 10];
extract($list3);

if ($nome == $nome2 && $nome2 == $nome3) {
    echo True . PHP_EOL;
}

# A função compact realiza o inverso da extract
$list4 = compact('nome3', 'idade3', 'nota3');

var_dump($list4);