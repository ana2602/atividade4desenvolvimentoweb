<?php

echo "Digite o primeiro número: ";
$numero1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = floatval(trim(fgets(STDIN)));

echo "Digite o terceiro número: ";
$numero3 = floatval(trim(fgets(STDIN)));

$maior = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}

if ($numero3 > $maior) {
    $maior = $numero3;
}

echo "O maior número é: $maior" . PHP_EOL;

?>