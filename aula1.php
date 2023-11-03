<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

echo 'Total de variáveis no array: ' . count($array) . PHP_EOL;

foreach ($array as $key => $value) {
    echo 'key: ' . $key . ' -> value: ' . $value . PHP_EOL;
}
