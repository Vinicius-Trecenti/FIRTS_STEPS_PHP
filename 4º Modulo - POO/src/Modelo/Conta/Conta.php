<?php

namespace Alura\Banco\Modelo\conta;
class Conta{
    private $titular;
    private float $saldo ;
    private static $quantidadeContas;

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;
        self::$quantidadeContas++;
    }

    public static function quantidadeContas():int{
        return self::$quantidadeContas;
    }


    public function sacar(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

}