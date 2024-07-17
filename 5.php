<?php

echo "Digite a primeira nota: ";
$nota1 = floatval(trim(fgets(STDIN)));

echo "Digite a segunda nota: ";
$nota2 = floatval(trim(fgets(STDIN)));

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "Aprovado com Distinção" . PHP_EOL;
} elseif ($media >= 7) {
    echo "Aprovado" . PHP_EOL;
} else {
    echo "Reprovado" . PHP_EOL;
}

?>
