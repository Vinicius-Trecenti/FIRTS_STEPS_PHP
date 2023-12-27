<?php

$notas = [
    [
       'aluno' => 'Vinicius',
       'nota' => 6,

    ],

    [
        'aluno' => 'Maria',
        'nota' => 8,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 10,
    ]
];

function ordenaNotas(array $nota1, array $nota2): int {
   
    // if($nota1['nota'] > $nota2['nota']){
    //     return -1;
    // }

    // if($nota2['nota'] > $nota1['nota']){
    //     return 1;
    // }

    // return 0;

    //retorna -1 caso seja menor ou 1 caso seja maior e zero se igual
    return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotas');
var_dump($notas);