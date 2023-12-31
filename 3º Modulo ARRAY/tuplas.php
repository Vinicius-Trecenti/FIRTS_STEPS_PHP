<?php

$aluno = [

    "nome" => "Vinicius", 
    "nota" => 10,
    "idade" => 20

];

//list($nome, $nota, $idade) = $aluno;
["nome" => $nome, "nota" => $nota,"idade" => $idade] = $aluno;

var_dump($nome, $idade, $nota);