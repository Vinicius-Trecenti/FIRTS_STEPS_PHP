<?php

class Pessoa{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    protected function validarNome(string $nome){
        if(strlen($nome) < 5){
            echo "Nome deve ter mais de 5 caracteres";
            exit();
        }
        
    }
}