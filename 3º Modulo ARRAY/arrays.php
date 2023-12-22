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