<?php

//array associativo

$contasCorrentes = array(
    1 => [
        "titular"=> "Vinicius",
        "saldo"=> "1000",
    ], 
    2 =>[
        "titular"=> "Maria",
        "saldo"=> "1000",
    ], 
    3 => [
        "titular"=> "Alberto",
        "saldo"=> "300",
    ]
);

//adicionar apos criar


//acessar a index
foreach ($contasCorrentes as $conta) {
    echo $conta['titular']. PHP_EOL;
}