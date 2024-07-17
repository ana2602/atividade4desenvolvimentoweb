<?php

echo "Digite um número positivo: ";
$numero = intval(trim(fgets(STDIN)));

if ($numero > 0) {
  
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . PHP_EOL;
    }
} else {
    echo "Por favor, digite um número positivo." . PHP_EOL;
}

?>
