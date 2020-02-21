<?php

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luís",
    "Luisa",
    "Rafael"  
];

$correntistasNaoPagantes = [
    "Luís",
    "Luisa",
    "Rafael"
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

echo "<pre>";
var_dump($correntistasPagantes);
echo "</pre>";