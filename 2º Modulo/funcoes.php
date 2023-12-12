<?php
require("importando.php");

//array associativo
$conta1 = [
    "titular"=> "Vinicius",
    "saldo"=> 1000,
];

$conta2 = [
    "titular"=> "Maria",
    "saldo"=> 1005,
];

$conta3 = [
    "titular"=> "Alberto",
    "saldo"=> 300,
];

$contasCorrentes = array($conta1, $conta2, $conta3);
$contasCorrentes[2] = sacar($contasCorrentes[2], 50);
$contasCorrentes[1] = depositar($contasCorrentes[1], 5);

maiuscula($contasCorrentes[0]);

unset($contasCorrentes[2]);


// echo "<ul>";

// for (   $i = 0; $i < count($contasCorrentes); $i++ ) { 

//     //list('titular' => $titular, 'saldo' => $saldo) = $contasCorrentes[$i];
//     ['titular' => $titular, 'saldo' => $saldo] = $contasCorrentes[$i];


//     //exibe($contasCorrentes[$i]['titular']);
//     echo "<li>Titular: $titular, Saldo: $saldo  </li>";
//     // echo "Saldo: {$contasCorrentes[$i]['saldo']} " . PHP_EOL;
//     // echo "Titular: $contasCorrentes[$i][titular] " . PHP_EOL;

// };

echo "</ul>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Corrente</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular'];?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            saldo: <?= $conta['saldo'];?>
        </dd>
        <?php } ?>
    </dl>

</body>
</html>
