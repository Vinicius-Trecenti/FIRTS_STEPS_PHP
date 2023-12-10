<?php

function exibe( $mensagem) {
    echo ''. $mensagem . PHP_EOL;
}

function sacar( $conta, $valor) {
    if( $valor > $conta['saldo']) {
        echo 'Valor maior que saldo' . PHP_EOL;
    }else{
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function depositar( $conta, $valor ) {
    if( $valor > 0) {
        $conta['saldo'] += $valor;
    }else{ 
        echo "Valor negativo";
    }
    return $conta;
}