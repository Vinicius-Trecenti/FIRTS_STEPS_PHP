<?php

//abrindo o arquivo
$arquivo = fopen('lista-cursos.txt', 'r');

//lendo o arquivo
while(!feof($arquivo)) {
    //lendo uma linha
    $linha = fgets($arquivo);
    echo $linha ;
}   
//para fechar o arquivo e eos outros programas possam usar - boa pratica 
fclose($arquivo);