<?php

//abrindo o arquivo
// $arquivo = fopen('lista-cursos.txt', 'r');

// //ler o arquivo como um todo

// $lendo = fread($arquivo, filesize('lista-cursos.txt'));
// echo $lendo;

// //para fechar o arquivo e eos outros programas possam usar - boa pratica 
// fclose($arquivo);

$cursos = file('lista-cursos.txt');
var_dump($cursos);