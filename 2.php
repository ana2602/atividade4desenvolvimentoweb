<?php

echo "Digite um valor seja ele negativo ou positivo: "; 
$valor = floatval(trim(fgets(STDIN))); 

if ($valor > 0) {
    echo "O valor $valor é positivo.\n"; 
} elseif ($valor < 0) {
    echo "O valor $valor é negativo.\n";
}

?>