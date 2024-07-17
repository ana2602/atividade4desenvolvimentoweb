<?php

echo "Digite a temperatura em graus Celsius: ";
$celsius = floatval(trim(fgets(STDIN)));

// Conversão para Fahrenheit
$fahrenheit = ($celsius * 9/5) + 32;

echo "A temperatura em Fahrenheit é: " . number_format($fahrenheit, 2) . " °F" . PHP_EOL;

?>
