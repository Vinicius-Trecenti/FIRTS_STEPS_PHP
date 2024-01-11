<?php

class Titular{
    private $nome;
    private $cpf;

    private $endereco;

    public function __construct(string $nome, cpf $cpf, Endereco $endereco) {
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

    public function getEndereco(){
        return $this->endereco;
    }
}