<?php

//modo de leitura a ele tenta criar se o arquivo não existir
// se existir ele escreve no final
//modos de leitura e escrito
// r - leitura
// w - escrita
// a - escrita no final
// x - criação
// + - leitura e escrita
// consultar documentacao do fopen()
// $arquivo = fopen('cursos-php.txt', 'a');
$cursos = "\n CURSO DE ARQUIVOS COM PHP 3";
file_put_contents('cursos-php.txt', $cursos);

// NO ARQUIVO SERA ESCRICO CURSOS PODENDO INFORMAR QUANTOS CARACTERES
// fwrite($arquivo, $cursos );
// fclose($arquivo); 