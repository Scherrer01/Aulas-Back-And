<?php
//exercicio 1
$marcacarro1 = "Nissan";
$modelo_carro1 = "Versa";
$ano_carro1 = "2020";
$revisao_carro1 = "feita";
$donos_carro1 = "2";


$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = "2012";
$revisao_carro2 = false;
$donos_carro2 = "3";


function exibirDados($marca1, $modelo1, $ano1, $revisao1, $dono1) {
echo ("Carro $marca1 $modelo1 do ano $ano1, revisão $revisao1 com $dono1 donos");
}

exibirDados($marcacarro1, $modelo_carro1, $ano_carro1, $revisao_carro1, $donos_carro1);
?>





<?
//exercicio 2
$marcacarro1 = "Nissan";
$modelo_carro1 = "Versa";
$ano_carro1 = "2020";
$revisao_carro1 = "feita";
$donos_carro1 = "2";

function carroNovo($ano_carro) {
    if ($ano_carro >= "2020") {
return "Carro Novo";
    } else "Carro Velho";
}
echo carroNovo($ano_carro1);
?>







<?
//exercicio 3
$marcacarro1 = "Nissan";
$modelo_carro1 = "Versa";
$ano_carro1 = "2020";
$revisao_carro1 = false;
$donos_carro1 = "2";

function precisaRevisao($revisao_carro) {
    if ($revisao_carro = false) {
        return "Precisa de Revisão";
    } else "Não precisa de revisão";
}
echo precisaRevisao($revisao_carro1);
?>










<?php
//exercicio 4
function calcularValor($marca, $ano, $Ndonos) {
    // Define preços base de acordo com a marca
    switch (strtolower($marca)) {
        case "bmw":
        case "porsche":
            $valor = 300000;
            break;
        case "nissan":
            $valor = 70000;
            break;
        case "byd":
            $valor = 150000;
            break;
        default:
            $valor = 50000; // valor padrão para outras marcas
            break;
    }

    // Desconto por donos adicionais (além do primeiro)
    if ($Ndonos > 1) {
        $descontoDonos = ($Ndonos - 1) * 0.05;
        $valor -= $valor * $descontoDonos;
    }

    // Depreciação por ano de uso (considerando ano atual)
    $anoAtual = date("Y");
    $anosUso = $anoAtual - $ano;
    $valor -= $anosUso * 3000;

    // Valor não pode ser negativo
    if ($valor < 0) {
        $valor = 0;
    }

    return $valor;
}

// Dados dos carros
$marca_carro1 = "Honda";
$modelo_carro1 = "Civic";
$ano_carro1 = 2016;
$donos_carro1 = 2;

$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = 2012;
$donos_carro2 = 3;

$marca_carro3 = "Fiat";
$modelo_carro3 = "Uno";
$ano_carro3 = 2005;
$donos_carro3 = 1;

$marca_carro4 = "Volkswagen";
$modelo_carro4 = "Jetta";
$ano_carro4 = 2020;
$donos_carro4 = 7;

// Exibindo os valores
echo "$marca_carro1 $modelo_carro1: R$ " . number_format(calcularValor($marca_carro1, $ano_carro1, $donos_carro1), 2, ',', '.');
echo "$marca_carro2 $modelo_carro2: R$ " . number_format(calcularValor($marca_carro2, $ano_carro2, $donos_carro2), 2, ',', '.');
echo "$marca_carro3 $modelo_carro3: R$ " . number_format(calcularValor($marca_carro3, $ano_carro3, $donos_carro3), 2, ',', '.');
echo "$marca_carro4 $modelo_carro4: R$ " . number_format(calcularValor($marca_carro4, $ano_carro4, $donos_carro4), 2, ',', '.');
?>