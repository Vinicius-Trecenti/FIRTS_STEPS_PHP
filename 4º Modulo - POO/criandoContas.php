<?php

require('src/Conta.php');
require('src/Titular.php');

$primeiraConta = new Conta(new Titular('123.456.789-10', 'Vinicius Trecenti'));
$conta2 = new Conta(new Titular('123.466.789', 'Teste'));

// $primeiraConta->cpfTitular = '556.888.777-96';
// $primeiraConta->nomeTitular = 'Vinicius';
// $primeiraConta->saldo = 2000.00;

// $primeiraConta->definirNome('Vinicius');
// $primeiraConta->definirCPF('558.789.123-7');

//$primeiraConta->transferir(100, $conta2);
echo "Quantidade:" . Conta::quantidadeContas() . PHP_EOL;
var_dump($primeiraConta);