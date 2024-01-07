<?php

class Titular{
    private $nome;
    private $cpf;

    public function __construct(string $nome, cpf $cpf) {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf  = $cpf;
    }

    private function validarNome(string $nome){
        if(strlen($nome) < 5){
            echo "Nome deve ter mais de 5 caracteres";
            exit();
        }
        
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCPF(){
        return $this->cpf;
    }
}