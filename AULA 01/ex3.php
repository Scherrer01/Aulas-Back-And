<?
$frase = "O PHP foi criado em mil novecentos e noventa e cinco";
$novaFrase = str_replace(
    ['o', 'a', 'i'],
    ['0', '4', '1'],
    $frase);

echo "A frase original é: $frase \n 
E a alterada é $novaFrase"
?>