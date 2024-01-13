<?php

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