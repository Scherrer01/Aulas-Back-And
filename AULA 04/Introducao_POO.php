<?
//Modelagem de dados sem a utilização de POO
$marda_carro1 = "Honda";
$modelo_carro1 = "Civic";
$ano_carro1 = "2016";
$revisao_carro1 = true;
$donos_carro1 = "2";

$marca_carro2 = "BMW";
$modelo_carro2 = "320i";
$ano_carro2 = "2012";
$revisao_carro2 = false;
$donos_carro2 = "3";

$marda_carro3 = "Fiat";
$modelo_carro3 = "Uno";
$ano_carro3 = "2005";
$revisao_carro3 = false;
$donos_carro3 = "1";

$marda_carro4 = "Volkswagen";
$modelo_carro4 = "Jetta";
$ano_carro4 = "2020";
$revisao_carro4 = true;
$donos_carro4 = "7";

function revisaoFeita($rev) {
$rev = true;
return $rev;
}

$revisao_carro3 = revisaoFeita($revisao_carro3); //Resultado True


function novoDono($qtd_donos) {
return $qtd_donos + 1;
}

novoDono($donos_carro4);
?>



