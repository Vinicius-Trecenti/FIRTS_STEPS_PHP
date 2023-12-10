<?php
require("importando.php");

//array associativo
$conta1 = [
    "titular"=> "Vinicius",
    "saldo"=> 1000,
];

$conta2 = [
    "titular"=> "Maria",
    "saldo"=> 1005,
];

$conta3 = [
    "titular"=> "Alberto",
    "saldo"=> 300,
];

$contasCorrentes = array($conta1, $conta2, $conta3);
$contasCorrentes[2] = sacar($contasCorrentes[2], 50);
$contasCorrentes[1] = depositar($contasCorrentes[1], 5);

for (   $i = 0; $i < count($contasCorrentes); $i++ ) { 
    exibe($contasCorrentes[$i]['titular']);
    echo "Saldo: {$contasCorrentes[$i]['saldo']} " . PHP_EOL;
    // echo "Titular: $contasCorrentes[$i][titular] " . PHP_EOL;

};

