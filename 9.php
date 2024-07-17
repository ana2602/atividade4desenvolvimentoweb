<?php

echo "Digite o primeiro número: ";
$numero1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = floatval(trim(fgets(STDIN)));

echo "Digite o terceiro número: ";
$numero3 = floatval(trim(fgets(STDIN)));

$numeros = [$numero1, $numero2, $numero3];

rsort($numeros);

echo "Números em ordem decrescente: " . implode(", ", $numeros) . PHP_EOL;

?>
