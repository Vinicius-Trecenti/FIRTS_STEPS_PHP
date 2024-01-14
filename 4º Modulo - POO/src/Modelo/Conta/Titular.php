<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\cpf;

class Titular extends Pessoa{

    private $endereco;

    public function __construct(string $nome, cpf $cpf, Endereco $endereco) {
        parent::__construct($nome, $cpf);
        $this->validarNome($nome);
       
    }

    public function getEndereco(){
        return $this->endereco;
    }
}