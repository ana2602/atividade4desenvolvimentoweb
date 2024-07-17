<?php

echo "Digite o salário atual: ";
$salario_atual = floatval(trim(fgets(STDIN)));

if ($salario_atual <= 280) {
    $percentual_aumento = 20;
} elseif ($salario_atual <= 700) {
    $percentual_aumento = 15;
} elseif ($salario_atual <= 1500) {
    $percentual_aumento = 10;
} else {
    $percentual_aumento = 5;
}

$valor_aumento = $salario_atual * ($percentual_aumento / 100);
$salario_novo = $salario_atual + $valor_aumento;

echo "Salário atual: R$ " . number_format($salario_atual, 2, ',', '.') . PHP_EOL;
echo "Percentual de aumento: $percentual_aumento%" . PHP_EOL;
echo "Novo salário: R$ " . number_format($salario_novo, 2, ',', '.') . PHP_EOL;

?>

