<?php 

$array = array(
    1 => "um",
    2=> "dois",
    3=> "tres",
);

foreach ($array as $key => $value) {
    echo $key ." em portugues é: ". $value . PHP_EOL;
}

echo "contando o array: " . count($array) . PHP_EOL;
echo "com sizeof: ". sizeof($array) . PHP_EOL;


$notas = [
    5,
    4,
    3,
    2,
    1
];

//antes
foreach ($notas as $value) {
    echo $value . PHP_EOL;
}

echo "Ordendando um array: ";

//depois
sort($notas);
foreach ($notas as $value) {
    echo $value . PHP_EOL;
}