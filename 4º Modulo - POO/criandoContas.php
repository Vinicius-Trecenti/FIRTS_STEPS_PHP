<?php

require('4º Modulo - POO/src/Conta.php');

$primeiraConta = new Conta();
$primeiraConta->cpf = '556.888.777-96';
$primeiraConta->titular = 'Vinicius';
$primeiraConta->saldo = 2000.00;
var_dump($primeiraConta);