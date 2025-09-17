<?php
$v1 = readline("Valor 1: ");
$v2 = readline("Valor 2: ");

if (is_numeric($v1) === is_numeric($v2)) {
    echo "Tipos compatíveis";
} else {
    echo "Tipos diferentes";
}
?>