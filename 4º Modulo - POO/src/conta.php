<?php

Class Conta{
    public string $cpf;
    public string $titular;
    public float $saldo;

    function sacar(float $valoraSacar){
        if($valoraSacar > $this->saldo){
            echo 'saldo indisponivel';
        }else {
            $this->saldo -= $valoraSacar;
        }
    }
}