<?php

echo "Qual turno você estuda? (M-matutino, V-vespertino, N-noturno): ";
$turno = strtoupper(trim(fgets(STDIN)));

switch ($turno) {
    case 'M':
        echo "Bom dia!" . PHP_EOL;
        break;
    case 'V':
        echo "Boa Tarde!" . PHP_EOL;
        break;
    case 'N':
        echo "Boa Noite!" . PHP_EOL;
        break;
    default:
        echo "Valor inválido." . PHP_EOL;
}

?>
