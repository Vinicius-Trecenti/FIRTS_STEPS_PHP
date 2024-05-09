<?php

$arquivoDeCursos = fopen('lista-cursos.txt', 'r'); 
stream_filter_append($arquivoDeCursos, 'alura.partes');

echo fread($arquivoDeCursos, filesize('lista-cursos.txt'));
