<?
// class Moto {
//     public $marca;
//     public $modelo;
//     public $ano;
//     public $cilindrada;
// }

// $moto1 = new Moto ();
// $moto1-> marca = "Honda";
// $moto1-> modelo = "Fan";
// $moto1-> ano = 2015;
// $moto-> cilindrada = 160;

// $moto2-> marca = "Honda";
// $moto2-> modelo = "Titan";
// $moto2-> ano = 2020;
// $moto2-> cilindrada = 160;

// $moto3-> marca = "BMW";
// $moto3-> modelo = "GS";
// $moto3-> ano = 2025;
// $moto3-> cilindrada = 300;

// $moto4-> marca = "Yamaha";
// $moto4-> modelo = "MT03";
// $moto4-> ano = 2022;
// $moto4-> cilindrada = 300;
?>

<?
// class Data {
//     public $dia;
//     public $mes;
//     public $ano;

//     public function __construct ($dia, $mes, $ano) {
//         $this-> dia = $dia;
//         $this-> mes = $mes;
//         $this-> ano = $ano;
//     }
// }

//  class Pessoa {
//     public $nome;
//     public $idade;
//     public $cpf;
//     public $telefone;
//     public $endereco;
//     public $estado_civil;
//     public $sexo;

// public function __construct ($nome, $idade, $cpf, $telefone, $endereco, $estado_civil, $sexo) {
//     $this-> nome = $nome;
//     $this-> idade = $idade;
//     $this-> cpf = $cpf;
//     $this-> telefone = $telefone;
//     $this-> endereco = $endereco;
//     $this->$estado_civil = $estado_civil;
//     $this-> sexo = $sexo;
//     }
// }


// class Estoque1 {

//     public $marca;
//     public $nome;
//     public $categoria;
//     public $data_fabricacao;
//     public $data_venda;

// public function __construct ($marca, $nome, $categoria, $data_fabricacao, $data_venda) {
//     $this-> marca = $marca;
//     $this-> nome = $nome;
//     $this-> categoria = $categoria;
//     $this-> data_fabricacao = $data_fabricacao;
//     $this-> data_venda = $data_venda;
//     }
// }
?> 

<?

class Cachorro {
    public $nome;

    public $idade;

    public $raca;

    public $castrado;

    public $sexo;

    public $latir;

    public $territorio;

public function __construct($nome, $idade, $raca, $castrado, $sexo, $latir, $territorio) {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->raca = $raca;
    $this->castrado = $castrado;
    $this->sexo = $sexo;
    $this->latir = $latir;
    $this->territorio = $territorio;

  }

function latido (){
    if ($this->latir == true) {
        echo "O cachorro $this->nome está latindo";
    } else {
        echo "O cachorro $this->nome está quieto";
    }
}

function territorio (){
 if ($this->territorio == true) {
    echo "O cachorro $this->nome está marcando território";
 } else {
    echo "O cachorro $this->nome está suave";
 }
}

}

$cachorro1 = new Cachorro ("Tutu", 2, "Vira-Lata", true, "Masculino", true, false);

$cachorro1 -> latido();
$cachorro1 -> territorio();
?>

<?

class Homem {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this-> name = $name;
        $this-> age = $age;
    }

function reservista(){
    if ($this->age >= 18) {
        echo "$this->name apresente sua reservista no TG";
    } else {
        echo "$this->name se apresente no TG para servir";
    }
}
    
    
}
$homem1 = new Homem("Scherrer", 20);

$homem1 -> reservista()
?>

<?

class casal {
    public $nombre;

    public $estado_civil;

    public $anos;

    public function __construct($nombre, $estado_civil, $anos) {
        $this-> nombre = $nombre;
        $this-> estado_civil = $estado_civil;
        $this-> anos = $anos;
    }

    function casado() {
        if ($this->estado_civil = true) {
            echo "$this->nombre Parabéns por estar $this->anos casado";
        } else 
        echo "oloco";
    }
}
$casal1 = new Casal("Scherrer", true, 3);
$casal1 -> casado();
?>