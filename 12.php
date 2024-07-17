<?php

echo "Peso (kg): ";
$peso = floatval(trim(fgets(STDIN)));

echo "Altura (m): ";
$altura = floatval(trim(fgets(STDIN)));

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    $categoria = "Abaixo do peso";
} elseif ($imc < 24.9) {
    $categoria = "Peso normal";
} elseif ($imc < 29.9) {
    $categoria = "Sobrepeso";
} else {
    $categoria = "Obesidade";
}

echo "IMC: " . number_format($imc, 2) . PHP_EOL;
echo "Categoria: $categoria" . PHP_EOL;

?>
