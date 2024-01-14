<?php

namespace Alura\Banco\Modelo\conta;
abstract class Conta{
    private $titular;
    protected float $saldo ;
    private static $quantidadeContas;

    //1 PARA CONTA CORRENTE
    //2 PARA CONTA POUPANÇA

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;
        self::$quantidadeContas++;
    }

    public static function quantidadeContas():int{
        return self::$quantidadeContas;
    }


    public function sacar(float $valorASacar): void{     

        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
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

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function percentualTarifa():float;

}