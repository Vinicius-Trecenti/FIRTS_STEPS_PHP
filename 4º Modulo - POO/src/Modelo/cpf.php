<?php

namespace Alura\Banco\Modelo;

class cpf {

    private string $cpf;

    public function __construct(string $cpf) {
        $this->cpf = $cpf;
    }
}