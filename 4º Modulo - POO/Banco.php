<?php

// require('src/Pessoa.php');
// require('src/Funcionario.php');

// require('src/Conta.php');
// require('src/Endereco.php');

// require('src/Titular.php');
// require('src/cpf.php');

require_once 'autoload.php';

use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\cpf;


$endereco = new Endereco('Caragua', 'indaia', 'Da praia','671');
$primeiraConta = new Conta(new Titular('Vinicius Trecenti', new cpf('123.456.789-10'), $endereco));
$conta2 = new Conta(new Titular('Teste', new cpf( '123.466.789-10'), $endereco));

// $primeiraConta->cpfTitular = '556.888.777-96';
// $primeiraConta->nomeTitular = 'Vinicius';
// $primeiraConta->saldo = 2000.00;

// $primeiraConta->definirNome('Vinicius');
// $primeiraConta->definirCPF('558.789.123-7');

//$primeiraConta->transferir(100, $conta2);
echo "Quantidade:" . Conta::quantidadeContas() . PHP_EOL;
var_dump($conta2);