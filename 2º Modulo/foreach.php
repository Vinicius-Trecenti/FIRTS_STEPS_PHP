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

//adicionar apos criar => colocar ou nao o index nao interfere na inserção pois o PHP entende que vai para o ultimo
// caso seja STRING ele passa para o primeiro numerico disponivel -> 0 
// caso seja string pode ser passado na declaraçã
$contasCorrentes[] = array(
    "titular"=> "Eunice",
    "saldo"=> "10000",
) ;


//acessar a index
foreach ($contasCorrentes as $index => $conta) {
    echo $index . " " . $conta['titular']. PHP_EOL;
}