<?php

echo "Digite o preço do primeiro produto: ";
$preco1 = floatval(trim(fgets(STDIN)));

echo "Digite o preço do segundo produto: ";
$preco2 = floatval(trim(fgets(STDIN)));

echo "Digite o preço do terceiro produto: ";
$preco3 = floatval(trim(fgets(STDIN)));

$menorPreco = $preco1;
$produtoEscolhido = "primeiro produto";

if ($preco2 < $menorPreco) {
    $menorPreco = $preco2;
    $produtoEscolhido = "segundo produto";
}

if ($preco3 < $menorPreco) {
    $menorPreco = $preco3;
    $produtoEscolhido = "terceiro produto";
}

echo "Você deve comprar o $produtoEscolhido, que custa R$ $menorPreco." . PHP_EOL;

?>
