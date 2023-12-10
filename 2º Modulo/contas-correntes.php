<?php

//array associativo
$conta1 = [
    "titular"=> "Vinicius",
    "saldo"=> "1000",
];

$conta2 = [
    "titular"=> "Maria",
    "saldo"=> "1000",
];

$conta3 = [
    "titular"=> "Alberto",
    "saldo"=> "300",
];

$contasCorrentes = array($conta1, $conta2, $conta3);

for (   $i = 0; $i < count($contasCorrentes); $i++ ) { 
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;

};