<?php

namespace Alura\Banco\Modelo\conta;


class ContaPoupanca extends Conta{

    public function percentualTarifa():float{
        return 0.05;
    }
}