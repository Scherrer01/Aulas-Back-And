<?
class Cachorro {
    public $nome;

    public $idade;

    public $raca;

    public $castrado;

    public $sexo;

public function __construct($nome, $idade, $raca, $castrado, $sexo) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->raca = $raca;
    $this->castrado = $castrado;
    $this->sexo = $sexo;
  }
}

$cachorro1 = new Cachorro("Logan", 2, "Bodder Collie", false, "Macho");

$cachorro2 = new Cachorro("Aurora", 3, "Shitzu", true, "Fêmea");

$cachorro3 = new Cachorro("Thor", 4, "Golden", true, "Macho" );

$cachorro4 = new Cachorro("Zeus", 2, "Pit Bull", false, "Macho");

$cachorro5 = new Cachorro("Pandora", 1, "Chi-Uaua", true, "Fêmea");

$cachorro6 = new Cachorro("Odin", 8, "Rotweiller", false, "Macho");

$cachorro7 = new Cachorro("Henrique", 3, "Pincher", true, "Macho");

$cachorro8 = new Cachorro("Marques", 3, "Vira-Lata", true, "Macho");

$cachorro9 = new Cachorro("Furtunato", 3, "Lulu da Palmerania", true, "Macho");

$cachorro10 = new Cachorro("Scherrer", 4, "Dobberman", false, "Muito Macho");
?>


<?php
class Usuario {
    public $nome;
    public $cpf;
    public $sexo;
    public $email;
    public $estado_civil;
    public $cidade;
    public $estado;
    public $endereco;
    public $cep;

    public function __construct($nome, $cpf, $sexo, $email, $estado_civil, $cidade, $estado, $endereco, $cep) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->estado_civil = $estado_civil;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->endereco = $endereco;
        $this->cep = $cep;
    }
}

$usuario1 = new Usuario(
    "Josenildo Afonso Souza",
    "100.200.300-40",
    "Masculino",
    "josenewdo.souza@gmail.com",
    "Casado",
    "Xique-Xique",
    "Bahia",
    "Rua da amizade, 99",
    "40123-98"
);

$usuario2 = new Usuario(
    "Valentina Passos Scherrer",
    "070.070.060-70",
    "Feminino",
    "scherrer.valen@outlook.com",
    "Divorciada",
    "Iracemápolis",
    "São Paulo",
    "Avenida da saudade, 1942",
    "23456-24"
);

$usuario3 = new Usuario(
    "Claudio Braz Nepumoceno",
    "575.575.242-32",
    "Masculino",
    "Clauclau.nepumoceno@gmail.com",
    "Solteiro",
    "Piripiri",
    "Piauí",
    "Estrada 3, 33",
    "12345-99"
);
?>