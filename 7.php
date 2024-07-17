<?php

echo "Digite o primeiro número: ";
$numero1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = floatval(trim(fgets(STDIN)));

echo "Digite o terceiro número: ";
$numero3 = floatval(trim(fgets(STDIN)));

// Encontrar o maior número
$maior = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
}

if ($numero3 > $maior) {
    $maior = $numero3;
}

$menor = $numero1;

if ($numero2 < $menor) {
    $menor = $numero2;
}

if ($numero3 < $menor) {
    $menor = $numero3;
}

echo "O maior número é: $maior" . PHP_EOL;

echo "O menor número é: $menor" . PHP_EOL;

?>