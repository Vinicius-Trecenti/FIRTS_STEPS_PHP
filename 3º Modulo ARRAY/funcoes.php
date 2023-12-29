<?php

$notas = [
    'Vinicius' => 10,
    'Maria' => 9,
    'Lucas' => 8
];

//verifica se a chave existe no array
var_dump(key_exists('Vinicius', $notas));

//verifica se a chave não é null
var_dump(isset($notas['Vinicius']));

$chave = array_search(10, $notas);
echo $chave;