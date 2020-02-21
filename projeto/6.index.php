<?php
namespace Alura;
require 'autoload.php';

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luís",
    "Luisa",
    "Rafael"  
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

//$relacionados = array_merge($correntistas, $saldos);
$relacionados = array_combine($correntistas, $saldos);
$relacionados["Matheus"] = 4500;
/* echo "<pre>";
var_dump($relacionados);
echo "</pre>"; */

if (array_key_exists("Joao", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";