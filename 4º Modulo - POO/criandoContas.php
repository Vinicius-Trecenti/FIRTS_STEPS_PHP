<?php

require('src/Conta.php');

$primeiraConta = new Conta();
$conta2 = new Conta();

$primeiraConta->cpfTitular = '556.888.777-96';
$primeiraConta->nomeTitular = 'Vinicius';
$primeiraConta->saldo = 2000.00;


$primeiraConta->transferir(100, $conta2);
var_dump($primeiraConta);