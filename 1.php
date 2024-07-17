<?php

echo "Digite o primeiro número: ";
$numero1 = floatval(trim(fgets(STDIN)));

echo "Digite o segundo número: ";
$numero2 = floatval(trim(fgets(STDIN)));

if ($numero1 > $numero2) {
    echo "Primerio número é maior que o segundo número." . PHP_EOL;
} else {
    echo "Primeiro número não é maior que o segundo número." . PHP_EOL;
}
?>