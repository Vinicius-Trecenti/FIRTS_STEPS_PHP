<?php

$idade = 17;    
$nome = "Vinicius";
$numeropessoas = 1;


echo "Voce só pode entrar se tiver mais que 18 anos" . PHP_EOL;

// if ($idade > 18 || $idade == 18 and $nome == "Vinicius") {
//     echo "voce pode entrar!";
// }else {
//     echo "Voce nao pode entrar";
// }

if($idade >= 18){
    echo "Voce pode entrar!". PHP_EOL;
}else if($idade >=16 && $numeropessoas >1){
        echo "Voce tem mais de 16 e esta acompanhado pode entrar". PHP_EOL;
    }else{
        echo "Voce nao tem idade para entrar ou  esta sozinho". PHP_EOL;
}


echo PHP_EOL. "Até mais";

// $idade = 15;
// $mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
// echo $mensagem;