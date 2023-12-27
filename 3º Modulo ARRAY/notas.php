<?php

$notas = [
    'Maria' => 10,
    'Lucas' => 9,
    'Vinicius' => 8
];

// a para manter associado as chaves
// r para ir do maior para menor
ksort($notas);
var_dump($notas);