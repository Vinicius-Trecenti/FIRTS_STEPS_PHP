<?php 

$meuCursos = file('lista-cursos.txt');
$outrosCursos = file('cursos-php.txt');

$arquivoCSV = fopen('cursos.csv', 'w');

foreach ($meuCursos as $curso){
    $linha = [trim($curso), 'Sim'];

    fputcsv($arquivoCSV, $linha, ';');

    // fwrite($arquivoCSV, implode(',', $linha));
}

foreach ($outrosCursos as $curso){
    $linha = [trim($curso), 'Sim'];

    fputcsv($arquivoCSV, $linha, ';');

    // fwrite($arquivoCSV, implode(',', $linha));
}

fclose($arquivoCSV);