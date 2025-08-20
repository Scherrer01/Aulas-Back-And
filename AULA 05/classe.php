<?
class Carro {
    public $marca;
    
    public $modelo;

    public $ano;

    public $revisao;

    public $donos;

    public function __construct($marca, $modelo, $ano, $revisao, $donos) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->revisao = $revisao;
        $this->donos = $donos;
    }
}

$carro1 = new Carro("Porshe", "911", "2020", false, 3);

$carro2 = new Carro("Mitsubishi", "Lancer", "1945", true, 1);

$carro3 = new Carro("Nissan", "Kicks", "2022", true, 1);

$carro4 = new Carro("Volksvagen", "Gol", "1996", true, 2);

$carro5 = new Carro("Chevrolet", "Prisma", "2018", false, 2);

$carro6 = new Carro("BMW", "Z4", "2025", true, 1);


?>