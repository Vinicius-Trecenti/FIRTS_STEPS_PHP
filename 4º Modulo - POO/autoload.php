<?php

spl_autoload_register(function (string $nomecompletodaclasse) {

    

    //substituindo Alura\Banco por src
    $caminhoarquivo = str_replace('Alura\\Banco', 'src', $nomecompletodaclasse); 

    
    //trocando \\ por / em $nomecompletodaclasse
    $caminhoarquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoarquivo);
    

    //adiconando .php no final da classe para pegar o arquivo
    $caminhoarquivo .= '.php';

    //se o arquivo existir solicitamos ele
    if(file_exists($caminhoarquivo)){
        require_once $caminhoarquivo;
    }

});