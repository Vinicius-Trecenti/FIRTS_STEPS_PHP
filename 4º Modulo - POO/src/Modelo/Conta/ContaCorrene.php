<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrene extends Conta {

    public function percentualTarifa(): float{
        return 0.03;
    }
}