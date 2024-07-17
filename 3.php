<?php

echo "Digite uma letra, de preferência, F ou M: ";
$letra = trim(fgets(STDIN));

if($letra == "F" || $letra == "f") {
    echo "Feminino" . PHP_EOL; 
} elseif ($letra == "M" || $letra == "m") {
    echo "Masculino" . PHP_EOL;
} else {
    echo "Sexo inválido" . PHP_EOL;
}

?>